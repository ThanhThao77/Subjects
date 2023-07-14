# from d2l import mxnet as d2l
# from mxnet import np, npx
# from mxnet.gluon import nn
# npx.set_np()
#
# net = nn.Sequential()
# # Here, we use a larger 11 x 11 window to capture objects. At the same time,
# # we use a stride of 4 to greatly reduce the height and width of the output.
# # Here, the number of output channels is much larger than that in LeNet
# net.add(nn.Conv2D(96, kernel_size=11, strides=4, activation='relu'),
#         nn.MaxPool2D(pool_size=3, strides=2),
#         # Make the convolution window smaller, set padding to 2 for consistent
#         # height and width across the input and output, and increase the
#         # number of output channels
#         nn.Conv2D(256, kernel_size=5, padding=2, activation='relu'),
#         nn.MaxPool2D(pool_size=3, strides=2),
#         # Use three successive convolutional layers and a smaller convolution
#         # window. Except for the final convolutional layer, the number of
#         # output channels is further increased. Pooling layers are not used to
#         # reduce the height and width of input after the first two
#         # convolutional layers
#         nn.Conv2D(384, kernel_size=3, padding=1, activation='relu'),
#         nn.Conv2D(384, kernel_size=3, padding=1, activation='relu'),
#         nn.Conv2D(256, kernel_size=3, padding=1, activation='relu'),
#         nn.MaxPool2D(pool_size=3, strides=2),
#         # Here, the number of outputs of the fully connected layer is several
#         # times larger than that in LeNet. Use the dropout layer to mitigate
#         # overfitting
#         nn.Dense(4096, activation="relu"), nn.Dropout(0.5),
#         nn.Dense(4096, activation="relu"), nn.Dropout(0.5),
#         # Output layer. Since we are using Fashion-MNIST, the number of
#         # classes is 10, instead of 1000 as in the paper
#         nn.Dense(10))
# X = np.random.uniform(size=(1, 1, 224, 224))
# net.initialize()
# for layer in net:
#     X = layer(X)
#     print(layer.name, 'output shape:\t', X.shape)

import numpy as np
from keras.models import Sequential
from keras.layers import Conv2D, MaxPooling2D, Flatten, Dense, Dropout

model = Sequential()
model.add(Conv2D(96, kernel_size=11, strides=4, activation='relu', input_shape=(224, 224, 1)))
model.add(MaxPooling2D(pool_size=3, strides=2))
model.add(Conv2D(256, kernel_size=5, padding='same', activation='relu'))
model.add(MaxPooling2D(pool_size=3, strides=2))
model.add(Conv2D(384, kernel_size=3, padding='same', activation='relu'))
model.add(Conv2D(384, kernel_size=3, padding='same', activation='relu'))
model.add(Conv2D(256, kernel_size=3, padding='same', activation='relu'))
model.add(MaxPooling2D(pool_size=3, strides=2))
model.add(Flatten())
model.add(Dense(4096, activation='relu'))
model.add(Dropout(0.5))
model.add(Dense(4096, activation='relu'))
model.add(Dropout(0.5))
model.add(Dense(10, activation='softmax'))

X = np.random.uniform(size=(1, 224, 224, 1))
for layer in model.layers:
    X = layer(X)
    print(layer.name, 'output shape:\t', X.shape)