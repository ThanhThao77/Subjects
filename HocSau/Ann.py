import tensorflow as tf
from tensorflow import keras
from keras.layers import Dense,activation
import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split

data=pd.read_csv('./USA_Housing/USA_Housing.csv')
X = np.array(data.drop(columns='Gia'))
y = np.array(data['Gia'])

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, shuffle=True)
X_train, X_val, y_train, y_val = train_test_split(X_train, y_train, test_size=0.2, random_state=42)
model = keras.models.Sequential()
model.add(Dense(256, activation='relu'))
model.add(Dense(32, activation='relu'))
model.compile(loss='mean_squared_error',optimizer='adam')
model.fit(X_train,y_train,validation_data=(X_val,y_val),
          batch_size=32,epochs=5,verbose=1)
score=model.evaluate(X_test,y_test,verbose=0)
y_predict=model.predict(X_test)