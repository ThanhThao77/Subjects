import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.metrics import r2_score
import numpy as np
from sklearn.linear_model import LinearRegression

#Hoi quy tuyen tinh
data=pd.read_csv("./Hoiquytuyentinh/USA_Housing.csv") 
 
dt_Train,dt_Test = train_test_split(data,test_size=0.3,shuffle = False)
X_train = dt_Train.iloc[:,:5].values
y_train = dt_Train.iloc[:,5].values
X_test = dt_Train.iloc[:,:5].values 
y_test = dt_Train.iloc[:,5].values 
reg = LinearRegression()
reg.fit(X_train,y_train) 
y_pred = reg.predict(X_test)
score = reg.score(X_test, y_test)
print("Ti le du doan mo hinh cua Linear Regression: %.2f" %r2_score(y_test,y_pred))
print("Thuc te \t\t Du doan \t\t\t Chenh lech")
for i in range (0, len(y_test)):
    print( y_test[i], "\t\t", y_pred[i], "\t\t",abs(y_test[i]-y_pred[i]))