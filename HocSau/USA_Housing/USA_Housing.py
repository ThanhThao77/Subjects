import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
from sklearn.neural_network import MLPRegressor
from sklearn.metrics import mean_squared_error, mean_absolute_error, r2_score
# load dữ liệu từ usa_housing
housing_data = pd.read_csv('./Hoiquytuyentinh/USA_Housing.csv')
# Hiển thị thông tin chi tiết số hàng , số cột
# print(housing_data.info())
# print(housing_data.describe())



# chia dữ liệu huấn luyện và test
X = housing_data.drop(['Gia'], axis=1).values
y = housing_data['Gia'].values
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=42)


# tạo model tuyến tính
model = LinearRegression()

# huấn luyện dữ liệu
model.fit(X_train, y_train)
# sử dụng mô hình huấn luyện để dự đoán giá
y_pred = model.predict(X_test)



# Tạo MLPRegressor model
mlp_model = MLPRegressor(hidden_layer_sizes=(100,100), max_iter=1000, random_state=42)

# Huấn luyện
mlp_model.fit(X_train, y_train)

# Dự đoán
mlp_y_pred = mlp_model.predict(X_test)

# hàm m_s_e tính sai số trung biinh binh phuong

mse = mean_squared_error(y_test, y_pred)
lin_r2 = r2_score(y_test, y_pred)
mlp_r2 = r2_score(y_test, mlp_y_pred)
print("Linear: Mean Squared Error: ", mse)
mlp_mse = mean_squared_error(y_test, mlp_y_pred)
print("MLP: Mean Squared Error: ", mlp_mse)
# print("Linear: Score: ", lin_r2)
# print("MLP: Score: ", mlp_r2)

print("Coefficient of determination Linear: %.2f" % r2_score(y_test, y_pred))
print("Coefficient of determination MLP: %.2f" % r2_score(y_test, mlp_y_pred))

print("Thuc te  \t\t Du doan  \t\t Chenh lech")
for i in range(len (y_pred)):
    print(f"{y_test[i]:.2f} {y_pred[i]:.2f} {abs(y_test[i]-y_pred[i]):.2f}")
