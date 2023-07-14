import numpy as np
import matplotlib.pyplot as plt
from keras.models import Sequential
from keras.layers import Dense,Dropout,Activation,Flatten
from keras.layers import Conv2D, MaxPooling2D
from keras.utils import np_utils
from keras.datasets import mnist

(X_train, y_train),(X_test,y_test) = mnist.load_data()
X_val, y_val = X_train[50000:60000,:],y_train[50000:60000]
X_train, y_train = X_train[:50000,:], y_train[:50000]
print(X_train.shape)

X_train = X_train.reshape(X_train.shape[0], 28, 28, 1)
X_val = X_val.reshape(X_val.shape[0], 28, 28, 1)
X_test = X_test.reshape(X_test.shape[0], 28, 28, 1)

y_train = np_utils.to_categorical(y_train,10)
y_val = np_utils.to_categorical(y_val, 10)
y_test = np_utils.to_categorical(y_test, 10)
print('Du lieu y ban dau ', y_train[0])
print('Du lieu y sau one_hot encoding ', y_train[0])

model = Sequential()
model.add(Conv2D(32, (3, 3), activation='sigmoid', input_shape=(28,28,1)))
model.add(Conv2D(32, (3, 3), activation='sigmoid'))
model.add(MaxPooling2D(pool_size=(2,2)))
model.add(Flatten())
model.add(Dense(128, activation='sigmoid'))
model.add(Dense(10, activation='softmax'))
#6
model.compile(loss= 'categorical_crossentropy',
              optimizer='adam',metrics=['accuracy'])
#7
H = model.fit(X_train, y_train, validation_data=(X_val, y_val),
              batch_size = 32, epochs=1, verbose=1)
#9
score= model.evaluate(X_test, y_test, verbose =0)
print("Score: ",score)
#10
plt.imshow(X_test[0].reshape(28,28), cmap='gray')

y_predict = model.predict(X_test[0].reshape(1,28,28,1))
print('Giá trị dự đoán: ',np.argmax(y_predict))