# lstm for time series forecasting
import numpy as np
import pandas as pd
from numpy import sqrt
from numpy import asarray
from pandas import read_csv
from tensorflow.keras import Sequential
from tensorflow.keras.layers import Dense
from tensorflow.keras.layers import LSTM
from sklearn.metrics import r2_score, f1_score, accuracy_score, recall_score, precision_score

# split a univariate sequence into samples
def split_sequence(sequence, n_steps, n_pred, pred_col):
    X, y = list(), list()
    for i in range(len(sequence) - (n_steps + n_pred) +1):
        # gather input and output parts of the pattern
        seq_x = sequence[i: i+n_steps, :]
        seq_y = sequence[i+n_steps+n_pred -1, pred_col]
        X.append(seq_x)
        y.append(seq_y)
    return asarray(X), asarray(y)

# load the dataset
filename = './data/LSTM-Multivariate_pollution.csv'
all_attributes = ['dew', 'temp', 'press', 'wnd_dir', 'wnd_spd', 'snow', 'rain', 'pollution']
data = read_csv(filename, index_col=False, usecols=all_attributes, encoding='utf-8')[all_attributes]
print(data)
#Chuyển dữ liệu chuỗi sang số nguyên
from sklearn import preprocessing
le = preprocessing.LabelEncoder()
data = data.apply(le.fit_transform)
print(data)
# retrieve the values
values = data.values.astype('float32')
print(values)
# specify the window size
n_steps = 3
n_pred = 2
# split into samples
X, y = split_sequence(values, n_steps, n_pred, 5)
print(X)
print(y)
# reshape into [samples, timesteps, features]
X = X.reshape((X.shape[0], X.shape[1], len(all_attributes)))
# split into train/test
n_test = 1000
X_train, X_test, y_train, y_test = X[:-n_test], X[-n_test:], y[:-n_test], y[-n_test:]
#from sklearn.model_selection import train_test_split
#X_train, X_test, y_train, y_test = train_test_split(X,y, test_size=0.2, shuffle=false)
print(X_train.shape, X_test.shape, y_train.shape, y_test.shape)

# define model
model = Sequential()
model.add(LSTM(100, activation='relu', kernel_initializer='he_normal', input_shape=(X_train.shape[1], X_train.shape[2])))
model.add(Dense(50, activation='relu', kernel_initializer='he_normal'))
model.add(Dense(50, activation='relu', kernel_initializer='he_normal'))
model.add(Dense(26, activation='softmax'))
# compile the model
model.compile(optimizer='adam', loss='mse', metrics=['mae'])
# fit the model
model.fit(X_train, y_train, epochs=5, batch_size=32, verbose=1, validation_data=(X_test, y_test))
# evaluate the model
mse, mae = model.evaluate(X_test, y_test, verbose=0)
print('MSE: %.3f, RMSE: %.3f, MAE: %.3f' % (mse, sqrt(mse), mae))
# make a prediction
y_pred = model.predict(X_test)
y_pred = np.argmax(y_pred, axis = 1)
y_true = np.argmax(y_test, axis=1)
# y_pred=y_pred.reshape(y_pred.shape[0])
# print(y_pred)
# print('R2: ', r2_score(y_test, y_pred))
print('F1: ', f1_score(y_test, y_pred, average='weighted'))

# y_pred_classes = asarray.where(y_pred >= 0.5, 1, 0)
# acc = accuracy_score(y_test, y_pred_classes)
# recall = recall_score(y_test, y_pred_classes, average='macro')
# precision = precision_score(y_test, y_pred_classes, average='macro')
# f1 = f1_score(y_test, y_pred_classes, average='macro')

# print("Accuracy: %.3f, Recall: %.3f, Precision: %.3f, F1-score: %.3f" % (acc, recall, precision, f1))