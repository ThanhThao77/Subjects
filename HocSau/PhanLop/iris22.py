import pandas as pd
import numpy as np
from sklearn.neural_network import MLPClassifier

df = pd.read_csv('./PhanLop/iris.csv')

X = np.array(df.drop(columns=['species']))
y = np.array(df["species"])

clf = MLPClassifier(solver='lbfgs', alpha= 0.01, hidden_layer_sizes=(10,5), random_state=1)

clf.fit(X,y)

print("Du bao:")
kq= clf.predict([[5.1,3.5,1.4,0.2]])
kq2= clf.predict([[7,3.2,4.7,1.4]])
print(kq)
print(kq2)