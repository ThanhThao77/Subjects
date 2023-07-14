from sklearn import datasets
from sklearn.model_selection import train_test_split
from sklearn.svm import SVC
from sklearn.metrics import accuracy_score

# Load dataset
iris = datasets.load_iris()
X = iris.data
y = iris.target

# Train SVM model
clf = SVC(kernel='linear')

clf.fit(X, y)

w = clf.coef_
print('w = ', w)
b = clf.intercept_
print('b = ', b)
print("Du bao:")
kq= clf.predict([[5.1,3.5,1.4,0.2]])
kq2= clf.predict([[7,3.2,4.7,1.4]])
print(kq)
print(kq2)