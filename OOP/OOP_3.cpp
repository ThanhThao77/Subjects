#include <iostream>
#include <cmath>
using namespace std;

void nhap (int &a, int &b, int &c)
{
	cout << "Nhap canh a = "; cin >> a;
	cout << "Nhap canh b = "; cin >> b;
	cout << "Nhap canh c = "; cin >> c;
}

float chuvi(int a, int b, int c)
{
	return a + b + c;
}

float dientich (int a, int b, int c)
{
	float p = chuvi(a,b,c) / 2.0;
	return sqrt(p * (p-a) * (p-b) * (p-c));
}
int main()
{
	int a,b,c;
	nhap(a,b,c);
	if (a+b>c && b+c>a && c+a>b)
	{
		cout << "a,b,c la do dai 3 canh cua tam giac";
		cout << "\nChu vi cua tam giac la: " << chuvi(a,b,c);
		cout << "\nDien tich cua tam giac la: " << dientich(a,b,c);
	}
	else
		cout <<"a, b, c khong la do dai cua 1 tam giac\n";
return 0;
}

