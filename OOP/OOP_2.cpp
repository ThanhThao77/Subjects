#include <iostream>
using namespace std;

void nhap (int &thang, int &nam)
{
	do{
		cout << "Nhap thang: "; cin >> thang;	
		cout << "Nhap nam: "; cin >> nam;
	} while (nam < 0 || thang < 1 || thang > 12);
}

bool ktra_nhuan (int nam)
{
	if ((nam % 4 == 0 || nam % 400 == 0))
		return true;
	return false;
}

int find (int thang, int nam)
{
	switch (thang)
	{
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:
			return 31;
		
		case 4:
		case 6:
		case 9:
		case 11:
			return 30;
		
		case 2:
			if (ktra_nhuan(nam))
				return 29;
			else
				return 28;	
	}
}
int main()
{
	int thang, nam;
	nhap(thang,nam);
	cout << "Thang " << thang << " co " << find(thang,nam) << " ngay!";
return 0;
}

