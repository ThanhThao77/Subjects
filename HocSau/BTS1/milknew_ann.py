from keras import Sequential
from keras.layers import Dense
import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
import tensorflow as tf
from keras.layers import Dropout, BatchNormalization      #giam overfitting va on dinh hoa mo hinh
from sklearn.metrics import accuracy_score, precision_score, recall_score, f1_score

#chuyen nhan ve dang float 0,1,2
def data_mahoa(x):
    for i,j in enumerate(x):
        for k in range (0,8):
            if (j[k]=="low"):
                j[k] = 0
            elif (j[k]=="medium"):
                j[k] = 1
            elif (j[k]=="high"):
                j[k] = 2
    return x

#doc file dl
data = pd.read_csv('milknew.csv')
data = np.array(data[["pH","Temprature","Taste","Odor","Fat ","Turbidity","Colour","Grade"]].values)

data = data_mahoa(data) #chuyen nhan ve dang float 0,1,2

#chia data thanh tap train,test 70-30
train,test = train_test_split(data, test_size=0.3,shuffle=True)

#x: lay tat ca cac cot tru cot 7, y :lay cot thu 7
X_train = train[:, :7]
y_train = train[:,7]
X_test = test[:, :7]
y_test = test[:,7]

num_iterations = 5 #so lan lap
#mang chua cac do do cua lan lap
accuracy_ann_scores = [] 
precision_ann_scores = []
recall_ann_scores = []
f1_ann_scores = []

for i in range(num_iterations):
    # Neural Network
    model = Sequential()

    model.add(Dense(180, activation = 'relu'))
    model.add(BatchNormalization())
    model.add(Dropout(0.2))

    model.add(Dense(30, activation = 'relu'))
    model.add(BatchNormalization())
    model.add(Dropout(0.2))

    model.add(Dense(3, activation='softmax'))

    #chuyen du lieu sang kieu float32 do failed to convert a NumPy array to a Tensor (Unsupported object type float)
    X_train = X_train.astype(np.float32)
    y_train = y_train.astype(np.float32)
    X_test = X_test.astype(np.float32)
    y_test = y_test.astype(np.float32)

    model.compile(optimizer='adam', loss='sparse_categorical_crossentropy', metrics=['accuracy'])
     # Train the model
    model.fit(X_train, y_train, epochs= 350, batch_size=32, verbose=1, validation_data=(X_test, y_test))
    y_pred = model.predict(X_test)

    #Convert predicted probabilities to class labels: Chuyen doi XS du doan thanh nhan lop
    y_pred = np.argmax(y_pred, axis=1)  

    # Evaluate the model
    accuracy = accuracy_score(y_test, y_pred)
    precision = precision_score(y_test, y_pred, average='macro')
    recall = recall_score(y_test, y_pred, average='macro')
    f1 = f1_score(y_test, y_pred, average='macro')

    #Luu ketqua vao mang
    accuracy_ann_scores.append(accuracy)
    precision_ann_scores.append(precision)
    recall_ann_scores.append(recall)
    f1_ann_scores.append(f1)


for i in range (num_iterations):
    print('Lan ', i+1)
    print('Accuracy: %.2f%%'% (accuracy_ann_scores[i] *100))
    print('Precision: %.2f%%'% (precision_ann_scores[i] *100))
    print('Recall: %.2f%%'% (recall_ann_scores[i]*100))
    print('F1: %.2f%%'% (f1_ann_scores[i]*100))
    print()

# Calculate average scores
average_accuracy_ann = np.mean(accuracy_ann_scores)
average_precision_ann = np.mean(precision_ann_scores)
average_recall_ann = np.mean(recall_ann_scores)
average_f1_ann = np.mean(f1_ann_scores)

print('Average Metrics for Artificial Neural Network:')
print('Accuracy: %.2f%%'% (average_accuracy_ann*100))
print('Precision: %.2f%%'% (average_precision_ann*100))
print('Recall: %.2f%%'% (average_recall_ann*100))
print('F1: %.2f%%'% (average_f1_ann*100))
print()

#Max scores
print('Best Parameters for Artificial Neural Network:')
print('Accuracy: %.2f%%'% (max(accuracy_ann_scores)*100))
print('Precision: %.2f%%'% (max(precision_ann_scores)*100))
print('Recall: %.2f%%'% (max(recall_ann_scores)*100))
print('F1: %.2f%%'% (max(f1_ann_scores)*100))
print()