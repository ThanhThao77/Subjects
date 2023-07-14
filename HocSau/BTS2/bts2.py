import os
import random
import numpy as np
import pandas as pd
import tensorflow as tf
from collections import defaultdict

# data visulaiztion
import matplotlib.pyplot as plt
import plotly.express as px
import plotly.graph_objects as go
from keras.utils import plot_model

# data pre-processing
from sklearn.model_selection import train_test_split
from keras.preprocessing.image import ImageDataGenerator
from keras import mixed_precision

# model building
from keras.models import Model
from keras.layers import Input
from keras.layers import Flatten
from keras.layers import Dense
from keras.layers import Conv2D
from keras.layers import MaxPooling2D, BatchNormalization
from keras.layers import Dropout
from keras.models import Sequential

# call backs
from keras.callbacks import EarlyStopping
from keras.callbacks import ModelCheckpoint
from keras.callbacks import ReduceLROnPlateau
from keras.callbacks import TerminateOnNaN

# evaluation
from sklearn.metrics import precision_score
from sklearn.metrics import recall_score 
from sklearn.metrics import f1_score
from sklearn.metrics import confusion_matrix
from sklearn.metrics import classification_report
from keras.utils import np_utils, image_dataset_from_directory
# load model
from keras.models import load_model

data_dir = "BTS2/Shoe vs Sandal vs Boot Dataset/Shoe"

# train = tf.keras.utils.image_dataset_from_directory(
#     data_dir,
#     validation_split=0.2,
#     subset="training",
#     seed=123,
#     image_size=(102, 136),
#     batch_size=32
# )

# valid = tf.keras.utils.image_dataset_from_directory(
#     data_dir,
#     validation_split=0.2,
#     subset="validation",
#     seed=123,
#     image_size=(102, 136),
#     batch_size=32
# )

(X_train, y_train), (X_test, y_test) = image_dataset_from_directory(data_dir)
X_val, y_val = X_train[50000:60000,:], y_train[50000:60000]
X_train, y_train = X_train[:50000,:], y_train[:50000]

X_train = X_train.reshape(X_train.shape[0], 32, 32, 3)
X_val = X_val.reshape(X_val.shape[0], 32, 32, 3)
X_test = X_test.reshape(X_test.shape[0], 32, 32, 3)


Y_train = np_utils.to_categorical(y_train, 10)
Y_val = np_utils.to_categorical(y_val, 10)
Y_test = np_utils.to_categorical(y_test, 10)
print("Du lieu y ban dau: ", y_train[0])
print("Du lieu y sau one-hot encoding ",Y_train[0])

model = Sequential()


model.add(Conv2D(32, (3, 3), padding='same', activation='relu', input_shape=(32, 32, 3)))
model.add(BatchNormalization())
model.add(Conv2D(32, (3, 3), padding='same', activation='relu'))
model.add(BatchNormalization())
model.add(MaxPooling2D(pool_size=(2, 2)))
model.add(Dropout(0.25))

model.add(Conv2D(64, (3, 3), padding='same', activation='relu'))
model.add(BatchNormalization())
model.add(Conv2D(64, (3, 3), padding='same', activation='relu'))
model.add(BatchNormalization())
model.add(MaxPooling2D(pool_size=(2, 2)))
model.add(Dropout(0.25))

model.add(Conv2D(128, (3, 3), padding='same', activation='relu'))
model.add(BatchNormalization())
model.add(Conv2D(128, (3, 3), padding='same', activation='relu'))
model.add(BatchNormalization())
model.add(MaxPooling2D(pool_size=(2, 2)))
model.add(Dropout(0.25))

model.add(Flatten())
model.add(Dense(512, activation='relu'))
model.add(BatchNormalization())
model.add(Dropout(0.5))
model.add(Dense(10, activation='softmax'))


model.compile(loss='categorical_crossentropy',
                optimizer='adam',
                metrics=['accuracy'])

H = model.fit(X_train, Y_train, validation_data=(X_val, Y_val),
                batch_size=32, epochs=20, verbose=1)

score = model.evaluate(X_test, Y_test, verbose=0)
print(score)