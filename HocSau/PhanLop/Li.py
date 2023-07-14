import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.neural_network import MLPClassifier
from sklearn.tree import DecisionTreeClassifier
from sklearn.metrics import accuracy_score

df = pd.read_csv('./PhanLop/iris.csv')
X = df.iloc[:, :-1]
y = df.iloc[:, -1]
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)
from sklearn.preprocessing import StandardScaler

scaler = StandardScaler()
X_train = scaler.fit_transform(X_train)
X_test = scaler.transform(X_test)

model = MLPClassifier(hidden_layer_sizes=(10, 10), max_iter=3000, random_state=42)
model.fit(X_train, y_train)
accuracy = model.score(X_test, y_test)
print(f'Do chinh xac tren tap kiem tra cua MLP: {accuracy:.2f}')

# Tạo ra một mảng 2 chiều gồm 20 mẫu mới có giá trị đặc trưng giống nhau
import numpy as np

# Tạo ra một mảng 2 chiều gồm 20 mẫu mới có giá trị đặc trưng giống nhau
new_sample = np.tile([[5.1, 3.5, 1.4, 0.2]], (20, 1))

# Chuẩn hóa mẫu mới
new_sample_scaled = scaler.transform(new_sample)

# Phân lớp mẫu mới
predictions = model.predict(new_sample_scaled)

# Hiển thị kết quả phân lớp
print(predictions)