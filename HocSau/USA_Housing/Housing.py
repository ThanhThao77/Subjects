import pandas as pd
import numpy as np
from sklearn import datasets, linear_model

excel = pd.read_csv('USA_Housing.csv') #doc dl dau vao
X = np.array([excel['TB_ThuNhapKhuVuc'], excel['TB_tuoinha'], 
              excel['TB_dientich'], excel['TB_sophong'], 
              excel['Dansokhuvuc']]).T
y = np.array([excel['Gia']]).T #Tim ma tran y

#Cach 1: Dung thu vien sklearn
regr = linear_model.LinearRegression()        #Khai bao doi tuong regr la hoi quy tuyen tinh
regr.fit(X,y)                                 #Truyen du lieu X va y cho doi tuong regr
print('w = ',regr.coef_) 
print('Du doan cach 1: ',regr.predict(np.array([[79545.45857, 5.682861322, 7.009188143, 4.09, 23086.8005]])))

#Cach 2: Thuc hien nhan ma tran
one = np.ones((X.shape[0], 1))
Xbar = np.concatenate((one, X), axis= 1).T                     #Ghep ma tran 1 voi X
w = ((np.linalg.pinv((Xbar@(Xbar.T))))@Xbar)@y                 #Tim ma tran he so hoi quy w
print('\nw = ', w.T)
p = np.array([[1,79545.45857, 5.682861322, 7.009188143, 4.09, 23086.8005]])  #Khai bao dl du doan
print('Du doan cach 2: ', (p@w)[0][0])