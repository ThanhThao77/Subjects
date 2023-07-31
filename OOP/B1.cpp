#include <iostream>
#include <cmath>
using namespace std;

int DemUS (int n)
{
	int dem = 0;
	for (int i = i; i <= n; i++)
	{
		if (n % i == 0)
		{
			dem ++;
		}
	}
	return dem;
}

int ktraSNT(int n)
{
	int d = 0;
	for (int i = 2; i <= sqrt(n); i++)
	{
		if (n % i == 0)
		{
			d++;
		}
	} return d;	
}

int DemSNT (int n)
{
	int count = 0;
	while (n != 0)
	{
		int c = n % 10;
		if (ktraSNT(n) == 1)
			count ++;
		n = n/10;
	} return count;
}

int main (){
	int n;
	cout << "Nhap N = ";
	cin >> n;
	cout << "So cac uoc so cua " << n << " la: " << DemUS(n) << endl;
	if (ktraSNT(n) == 0)
		cout << n << " la so nguyen to";
	else 
		cout << n << " khong phai la so nguyen to";
	cout << "\nCo " << DemSNT(n) << " chu so nguyen to";
	return 0;
}

