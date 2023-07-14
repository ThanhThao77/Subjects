from sklearn.linear_model import LogisticRegression
from sklearn.metrics import accuracy_score, precision_score, recall_score, f1_score
import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import scale

# Load the data
data = pd.read_csv('milknew.csv')
X = np.array(data.drop(columns='Grade'))
y = np.array(data['Grade'])

# # Scale the data
# X = scale(X)

# Split the data into train and test sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, shuffle=True)

# Split the train set into train and validation sets
# X_train, X_val, y_train, y_val = train_test_split(X_train, y_train, test_size=0.2, random_state=42)

num_iterations = 5         #So lan lap
accuracy_scores = []
precision_scores = []
recall_scores = []
f1_scores = []

for i in range(num_iterations):
    # Xay dung Softmax Regression va truyen dl
    clf = LogisticRegression(random_state=0, solver='lbfgs', 
                             multi_class='multinomial', 
                             max_iter=2000).fit(X_train, y_train)

    # Predict on test set
    y_pred = clf.predict(X_test)

    # Evaluate the model
    accuracy = accuracy_score(y_test, y_pred)
    precision = precision_score(y_test, y_pred, average='macro')
    recall = recall_score(y_test, y_pred, average='macro')
    f1 = f1_score(y_test, y_pred, average='macro')

    accuracy_scores.append(accuracy)
    precision_scores.append(precision)
    recall_scores.append(recall)
    f1_scores.append(f1)

average_accuracy = np.mean(accuracy_scores)
average_precision = np.mean(precision_scores)
average_recall = np.mean(recall_scores)
average_f1 = np.mean(f1_scores)

for i in range (num_iterations):
    print('Lan ', i+1)
    print('Accuracy: %.2f%%' % (accuracy_scores[i]*100))
    print('Precision: %.2f%%'% (precision_scores[i]*100))
    print('Recall: %.2f%%' % (recall_scores[i]*100))
    print('F1: %.2f%%'% (f1_scores[i]*100))
    print()

print('Average Metrics for Softmax Regression:')
print('Accuracy: %.2f%%'% (average_accuracy *100))
print('Precision: %.2f%%'% (average_precision *100))
print('Recall: %.2f%%' % (average_recall *100))
print('F1: %.2f%%'% (average_f1*100))
print()

print('Best Parameters for Softmax Regression:')
print('Accuracy: %.2f%%'% (max(accuracy_scores) *100))
print('Precision: %.2f%%'% (max(precision_scores) *100))
print('Recall: %.2f%%'% (max(recall_scores) *100))
print('F1: %.2f%%'% (max(f1_scores)*100))
print()


