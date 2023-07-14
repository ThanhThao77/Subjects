import numpy as np
import matplotlib.pyplot as plt
from keras import Sequential
from keras.layers import Dense, Dropout, Activation, Flatten, Conv2D, MaxPooling2D, AvgPool2D
from keras.utils import np_utils
from keras.datasets import mnist
from PIL import Image

(X_train, y_train), (X_test, y_test) = mnist.load_data()
X_val, y_val = X_train[50000:60000,:], y_train[50000:60000]
X_train, y_train = X_train[:50000,:], y_train[:50000]

X_train = X_train.reshape(X_train.shape[0], 28,28,1)
X_val = X_val.reshape(X_val.shape[0], 28,28,1)
X_test = X_test.reshape(X_test.shape[0], 28,28,1)

y_train = np_utils.to_categorical(y_train,10)
y_val = np_utils.to_categorical(y_val,10)
y_test = np_utils.to_categorical(y_test,10)

model = Sequential()
model.add(Conv2D(96, (11,11), activation='relu', input_shape=(224,224,1), strides=4))
model.add(MaxPooling2D(pool_size=(3, 3),strides=2))
model.add(Conv2D(256, (5,5), activation='relu', padding="same")) 
#model.add(Conv2D(16, (5,5), activation='sigmoid'))
model.add(MaxPooling2D(pool_size=(3, 3),strides=2))
model.add(Conv2D(384, (3,3), activation='relu', padding="same"))
model.add(Conv2D(384, (3,3), activation='relu', padding="same"))
model.add(Conv2D(384, (3,3), activation='relu', padding="same"))
model.add(MaxPooling2D(pool_size=(3, 3),strides=2))

model.add(Flatten())

model.add(Dense(4096, activation = 'relu'))
model.add(Dense(4096, activation = 'relu'))
model.add(Dense(10))

model.compile(optimizer='adam', loss='categorical_crossentropy', metrics=['accuracy'])
H = model.fit(X_train, y_train, epochs= 10, batch_size=32, verbose=1, validation_data=(X_val, y_val))
score  = model.evaluate(X_test, y_test, verbose=0)
print(score)

plt.imshow(X_test[0].reshape(28,28), cmap = 'gray')

image_data = X_test[0].reshape(28, 28)
image = Image.fromarray(image_data)
image.show()

y_pred = model.predict(X_test[0].reshape(1,28,28,1))
print('Gia tri du doan: ', np.argmax(y_pred))
