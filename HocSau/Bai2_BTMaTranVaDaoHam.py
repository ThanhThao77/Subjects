import numpy as np

# khởi tạo ma trận 
A = np.array([[1, 4, -1], [2, 0, 1]])
B = np.array([[-1, 0], [1, 3], [-1,1]])

#Ma trận chuyển vị của B^T
transpose_matrixB = B.T
print("\nMa trận chuyển vị B^T =\n", transpose_matrixB)

#Ma trận nghịch đảo của A^-1 (sử dụng giả nghịch đảo)
inverse_matrixA = np.linalg.pinv(A)
print("\nMa trận nghịch đảo A^-1 = \n", inverse_matrixA)

#Tính
print("\n A + B^T = \n", A + transpose_matrixB)
print("\n A - B^T = \n", A - transpose_matrixB)
print("\n A * 2 = \n", A*2)
print("\n A * B = \n", np.dot(A,B))
print("\n A * A^-1 = \n", np.dot(A,inverse_matrixA))
