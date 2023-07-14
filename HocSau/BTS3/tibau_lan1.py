# lstm for time series forecasting
from numpy import sqrt
import numpy as np
from numpy import asarray
from pandas import read_csv
from keras import Sequential
from keras.layers import Dense
from keras.layers import LSTM, SimpleRNN,GRU
from sklearn.metrics import r2_score
from keras.layers import Dense, Dropout, Activation, Flatten, Conv2D, MaxPooling2D, AveragePooling2D,BatchNormalization
from sklearn.metrics import precision_score, recall_score, f1_score


# split a univariate sequence into samples
def split_sequence(sequence, n_steps, n_pred, pred_col):
    X, y = list(), list()
    for i in range(len(sequence) - (n_steps + n_pred) +1):
        # gather input and output parts of the pattern
        seq_x = sequence[i: i+n_steps, :]
        seq_y = sequence[i+n_steps+n_pred -1, pred_col]
        X.append(seq_x)
        y.append(seq_y)
    return asarray(X), asarray(y)

# load the dataset
filename = "data_tibau.csv"
all_attributes = ['Wind_Speed', 'Wind_direction']
data = read_csv(filename, index_col=False, usecols=all_attributes, encoding='utf-8')[all_attributes]
print(data)
# retrieve the values
values = data.values.astype('float32')
print(values)
# specify the window size
n_steps = 5
n_pred = 2
# split into samples
X, y = split_sequence(values, n_steps, n_pred, 0)
print(X)
print(y)
# reshape into [samples, timesteps, features]
X = X.reshape((X.shape[0], X.shape[1], len(all_attributes)))

from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X,y, test_size=0.2, shuffle = False)
X_train, X_val, y_train, y_val =  train_test_split(X_train,y_train, test_size=0.125, shuffle = False)
print(X_train.shape, X_test.shape , X_val.shape, y_train.shape, y_test.shape, y_val.shape)




# model LSTM
model_lstm = Sequential()
model_lstm.add(LSTM(150, activation='relu', kernel_initializer='he_normal', input_shape=(X_train.shape[1], X_train.shape[2])))
model_lstm.add(Dense(100, activation='relu', kernel_initializer='he_normal'))
# model_lstm.add(BatchNormalization())
# model_lstm.add(Dropout(0.2))
model_lstm.add(Dense(50, activation='relu', kernel_initializer='he_normal'))
model_lstm.add(Dense(1))

model_lstm.compile(optimizer='adam', loss='mse', metrics=['mae'])

model_lstm.fit(X_train, y_train, epochs=150, batch_size=32, verbose=1, validation_data=(X_val, y_val))

mse_lstm, mae_lstm = model_lstm.evaluate(X_test, y_test, verbose=0)

y_pred_lstm = model_lstm.predict(X_test)
y_pred_lstm=y_pred_lstm.reshape(y_pred_lstm.shape[0])

#RNN
model_rnn= Sequential()
model_rnn.add(SimpleRNN(100, activation='relu', kernel_initializer='he_normal', input_shape=(X_train.shape[1], X_train.shape[2])))
model_rnn.add(Dense(100, activation='relu', kernel_initializer='he_normal'))
# model_rnn.add(BatchNormalization())
# model_rnn.add(Dropout(0.2))
model_rnn.add(Dense(50, activation='relu', kernel_initializer='he_normal'))
model_rnn.add(Dense(1))

model_rnn.compile(optimizer='adam', loss='mse', metrics=['mae'])

model_rnn.fit(X_train, y_train, epochs=150, batch_size=32, verbose=1, validation_data=(X_val, y_val))

mse_rnn, mae_rnn = model_rnn.evaluate(X_test, y_test, verbose=0)

y_pred_rnn = model_rnn.predict(X_test)
y_pred_rnn=y_pred_rnn.reshape(y_pred_rnn.shape[0])


#GRU
model_gru = Sequential()
model_gru.add(GRU(100, activation='relu', kernel_initializer='he_normal', input_shape=(X_train.shape[1], X_train.shape[2])))
model_gru.add(Dense(100, activation='relu', kernel_initializer='he_normal'))
# model_gru.add(BatchNormalization())
# model_gru.add(Dropout(0.2))
model_gru.add(Dense(50, activation='relu', kernel_initializer='he_normal'))
model_gru.add(Dense(1))

model_gru.compile(optimizer='adam', loss='mse', metrics=['mae'])

model_gru.fit(X_train, y_train, epochs=150, batch_size=32, verbose=1, validation_data=(X_val, y_val))

mse_gru, mae_gru = model_gru.evaluate(X_test, y_test, verbose=0)

y_pred_gru = model_gru.predict(X_test)
y_pred_gru=y_pred_gru.reshape(y_pred_gru.shape[0])

#Đánh giá mô hình
#LSTM
print("LSTM")
print('MSE: %.2f' % mse_lstm)
print('RMSE: %.2f' % sqrt(mse_lstm))
print('MAE: %.2f' % mae_lstm)
print('R2: %.2f' % r2_score(y_test, y_pred_lstm))
print()

#RNN
print("RNN")
print('MSE: %.2f' % mse_rnn)
print('RMSE: %.2f' % sqrt(mse_rnn))
print('MAE: %.2f' % mae_rnn)
print('R2: %.2f' % r2_score(y_test, y_pred_rnn))
print()

#GRU
print("GRU")
print('MSE: %.2f' % mse_gru)
print('RMSE: %.2f' % sqrt(mse_gru))
print('MAE: %.2f' % mae_gru)
print('R2: %.2f' % r2_score(y_test, y_pred_gru))