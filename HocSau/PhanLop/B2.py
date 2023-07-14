import numpy as np 
import pandas as pd
from sklearn.tree import DecisionTreeClassifier, DecisionTreeRegressor
from sklearn.model_selection import train_test_split
from sklearn.neural_network import MLPClassifier


df = pd.read_csv('./PhanLop/iris.csv')
data = np.array(df)  
dt_Train, dt_Test = train_test_split(data, test_size = 0.3, shuffle = False) 

X_train = dt_Train[:, :4]
y_train = dt_Train[:, 4]
X_test  = dt_Test[:, :4]
y_test  = dt_Test[:, 4]

#ID3
tree_id3 = DecisionTreeClassifier(criterion = 'entropy')
tree_id3.fit(X_train, y_train)
id3_y_pred = tree_id3.predict(X_test)


#Tao MLPClass
mlp_clf = MLPClassifier(hidden_layer_sizes=(10,10), max_iter=1000)
#Huan luyen
mlp_clf.fit(X_train, y_train)
#Du doan
mlp_y_pred = mlp_clf.predict(X_test)



print("Thuc te \t Du doan(id3) \t Du doan(MLP)" )
for i in range (0, len(y_test)):
    print( y_test[i], "\t\t",  id3_y_pred[i], "\t\t", mlp_y_pred[i])



count_id3 = 0
count_mlp = 0
for i in range(0,len(y_test)):
    if(y_test[i] == id3_y_pred[i]):
        count_id3 = count_id3 +1
    if(y_test[i] == mlp_y_pred[i]):
        count_mlp = count_mlp +1
print('Ty le id3 du doan dung:', count_id3/len(id3_y_pred)*100, "%")
print('Ty le id3 du doan sai:',100 - count_id3/len(id3_y_pred)*100, "%")
print("")
print('Ty le mlp du doan dung:', count_mlp/len(mlp_y_pred)*100, "%")
print('Ty le mlp du doan sai:',100 - count_mlp/len(mlp_y_pred)*100, "%")

# đánh giá độ chính xác trên tập kiểm tra
accuracy = mlp_clf.score(X_test, y_test)
accuracy_id3 = tree_id3.score(X_test, y_test)
print("\nDo chinh xac MLP: {:.2f}%".format(accuracy * 100))
print("Do chinh xac ID3: {:.2f}%".format(accuracy_id3 * 100))

