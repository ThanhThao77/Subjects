import pandas as pd
from sklearn.metrics import r2_score
from sklearn.neural_network import MLPRegressor
from sklearn.model_selection import train_test_split
import numpy as np
#from Mesure_regression import NSE

data = pd.read_csv('./Hoiquytuyentinh/USA_Housing.csv')

dt_Train, dt_Test = train_test_split(data, test_size=0.3, shuffle=False) 
#Nếu shuffle = false lấy 30% lm dl bên trên test, 70% còn lại lm train. Dùng khi dl đã xáo trộn r
#Nếu shuffle = true lấy 30% lm dl bất kì test, 70% còn lại lm train
X_train = dt_Train.iloc[:,:5] #cột 0 đến cột 4
y_train = dt_Train.iloc[:,5] #lấy tất cả các dòng nhưg chỉ lấy cột số 5
X_test = dt_Test.iloc[:,:5]
y_test = dt_Test.iloc[:,5]

#tầng ẩn đầu tiên là 100 noron. Nếu 2 tầng ẩn thì khai báo hidden_layer_sizes=(100,80)
#model = MLPRegressor(hidden_layer_sizes=(100), activation='relu', 
#                     solver='adam', alpha=0.00001, learning_rate=0.001, max_iter=200)
#max_iter: số lần lặp
model = MLPRegressor(hidden_layer_sizes=(100,100), max_iter=1000, random_state=42)
model.fit(X_train, y_train) #sdung tap dl huanluyen tim ra trong so
y_pred = model.predict(X_test) #du doan nhan cua tap Xtest
y = np.array(y_test) 

print("Coefficient of determination: %.2f" % r2_score(y_test, y_pred))
print("Thuc te    Du doan   Chenh lech")
for i in range(0, len(y)):
    print("%.2f" %y[i], " ", y_pred[i], " ", abs(y[i] - y_pred[i]))
#print('NSE: ', NSE(y, y_pred))

