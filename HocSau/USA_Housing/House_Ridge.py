import pandas as pd
from sklearn.metrics import r2_score
from sklearn.neural_network import MLPRegressor
from sklearn.model_selection import train_test_split
from sklearn.linear_model import Ridge
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

model = Ridge(alpha=0.5,max_iter=1000, solver='svd')

model.fit(X_train, y_train) #sdung tap dl huanluyen tim ra trong so

y_pred = model.predict(X_test) #du doan nhan cua tap Xtest
y = np.array(y_test) 

print("Thuc te        Du doan     Chenh lech")
for i in range(0, len(y)):
    print("%.2f" %y[i], " ", y_pred[i], " ", abs(y[i] - y_pred[i]))

print("\nCoefficient of determination of Ridge regression: %.2f" % r2_score(y_test, y_pred))


# acu = model.score(X_test, y_test)
# print("Accuracy: ", acu)

#sai so huan luyen tren tap train
#print("Sai so huan luyen cua mo hinh tren tap train: ",model.score(X_train, y_train))
#he so hoi quy
#print("He so hoi quy: ",model.coef_)
#print('NSE: ', NSE(y, y_pred))

