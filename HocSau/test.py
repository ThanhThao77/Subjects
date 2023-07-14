# import thư viện
import numpy as np
import pandas as pd
from tensorflow.keras.models import Sequential
from tensorflow.keras.layers import Dense, LSTM
from sklearn.metrics import accuracy_score, recall_score, precision_score, f1_score
from sklearn import preprocessing

# hàm chia chuỗi thành các mẫu
def split_sequence(sequence, n_steps, n_pred, n_features):
    X, y = [], []
    for i in range(len(sequence) - (n_steps + n_pred) + 1):
        # gather input and output parts of the pattern
        seq_x = sequence[i: i+n_steps, :]
        seq_y = sequence[i+n_steps:i+n_steps+n_pred, n_features-1]
        y.append(1 if np.sum(seq_y) >= 1 else 0) # ngưỡng ngắn sự kiện để phân loại thành lớp 1, còn lại là lớp 0
        X.append(seq_x)
    return np.array(X), np.array(y)

# load dữ liệu từ tệp CSV
filename = './data/LSTM-Multivariate_pollution.csv'
all_attributes = ['dew', 'temp', 'press', 'wnd_dir', 'wnd_spd', 'snow', 'rain', 'pollution']
data = pd.read_csv(filename, usecols=all_attributes)

# chuyển các giá trị chuỗi sang số
le = preprocessing.LabelEncoder()
data['wnd_dir'] = le.fit_transform(data['wnd_dir'])

# lấy giá trị từ dữ liệu
values = data.values.astype('float32')

# chỉ định kích thước cửa sổ
n_steps = 3
n_pred = 2
n_features = len(all_attributes)

# chia dữ liệu thành các mẫu
X, y = split_sequence(values, n_steps, n_pred, n_features)

# chia dữ liệu thành tập huấn luyện và tập kiểm tra
n_test = 1000
X_train, X_test, y_train, y_test = X[:-n_test], X[-n_test:], y[:-n_test], y[-n_test:]

# định nghĩa mô hình LSTM
model = Sequential()
model.add(LSTM(100, activation='relu', input_shape=(n_steps, n_features)))
model.add(Dense(1, activation='sigmoid'))
model.compile(optimizer='adam', loss='binary_crossentropy', metrics=['accuracy'])

# huấn luyện mô hình
model.fit(X_train, y_train, epochs=5, batch_size=32, verbose=1, validation_data=(X_test, y_test))

# đánh giá mô hình sử dụng accuracy, recall, precision và f1-score
y_pred = model.predict(X_test)
y_pred_classes = np.where(y_pred >= 0.5, 1, 0)
acc = accuracy_score(y_test, y_pred_classes)
recall = recall_score(y_test, y_pred_classes, average='macro')
precision = precision_score(y_test, y_pred_classes, average='macro')
f1 = f1_score(y_test, y_pred_classes, average='macro')

print("Accuracy: %.3f, Recall: %.3f, Precision: %.3f, F1-score: %.3f" % (acc, recall, precision, f1))