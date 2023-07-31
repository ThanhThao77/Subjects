#include <iostream>
#include <cmath>
using namespace std;

void nhap (int a[100][100], int &n)
{
	cout << "Nhap kich co ma tran vuong = "; cin >> n;
	cout << "Nhap phan tu:\n";
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			cout << "a[" << i << "][" << j << "] = ";
			cin >> a[i][j];
		}
		cout << endl;
	}
}
void xuat (int a[100][100], int n)
{
	cout << "Ma tran la:\n";
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			cout << a[i][j] << "	";
		}
		cout << endl;
	}
}

void Demchanle (int a[100][100], int n)
{
	int demchan = 0, demle = 0;
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			if (a[i][j] % 2 == 0)
				demchan ++;
			else
				demle ++;
		}
	}
	cout << "So phan tu chan co trong mang la: " << demchan;
	cout << "\nSo phan tu le co trong mang la: " << demle;
}

bool ktdoixung (int a[100][100], int n)
{
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			if(a[i][j] != a[j][i])
				return 0;
		}
	} return 1;
}

int main()
{
	int a[100][100], n;
	nhap(a,n);
	xuat(a,n);
	Demchanle(a,n);
	if (ktdoixung(a,n))
		 cout << "Ma tran doi xung";
	else
		cout <<"\nMa tran khong doi xung";	
return 0;
}

