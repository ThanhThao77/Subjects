import math

def f(x):
    return x**2 + 5*math.sin(x)

def df(x):
    return 2*x + 5*math.cos(x)

def d2f(x):
    return 2 - 5*math.sin(x)

def newton_raphson(x0, tol):
    x = x0
    while True:
        fx = f(x)
        dfx = df(x)
        d2fx = d2f(x)
        x_new = x - dfx / d2fx
        if abs(x_new - x) < tol:
            break
        x = x_new
    return x_new

# Sử dụng phương pháp Newton-Raphson để tìm nghiệm của phương trình f'(x) = 0
x0 = 1 # Giá trị xấp xỉ ban đầu
tol = 1e-6 # Sai số cho phép
x_opt = newton_raphson(x0, tol)
print("Nghiệm của phương trình f'(x) = 0 là:", x_opt)