#include <iostream>
#include <cmath>
using namespace std;

// Dinh nghia mang chua so ngay
int ngay[13] = {0,31,28,31,30,31,30,31,31,30,31,30,31};

// Mo ta lop
class N_Date
{
	int d,m,y; //Ngay - thang -nam;
	public:
		operator int(); //toan tu chuyen doi kieu;
		
		// Dinh nghia phuong thuc xuat va nhap
		friend ostream &operator << (ostream &out, N_Date x);
		friend istream &operator >> (istream &in, N_Date &x);
};

//ham nhap
istream &operator >> (istream &in, N_Date &x)
{
	cout << "Ngay: "; in >> x.d;
	cout << "Thang: "; in >> x.m;
	cout << "Nam: "; in >> x.y;
	return in;
}

// ham xuat
ostream &operator << (ostream &out, N_Date x)
{
	out << x.d << "/" << x.m << "/" << x.y;
	return out;
}

// ham thanh phan cua lop
N_Date::operator int()
{
	int s = 0, i;
	if(y == 1900)
	{
		s += d;
		for(i = 0; i < m; i++)
			s += ngay[i];
	}
	else
	{
		s += d;
		s += (y-1900)*365; // cong vao s so ngay cua cac nam
		for(i = 1900; i < y; i++) {
			// nam nhuan
			if ((i % 4 == 0) && (i % 100 != 0) || (i % 400 == 0))
				s += 1;
		}
		for (i = 0; i < m; i++) {
			s += ngay[i];
			if((i % 4 == 0) && (i %100 != 0) && (i == 2))
				s += 1;
		}
	}
	return s;
}
int main()
{
	N_Date x; // khai bao doi tuong
	long n;
	cout << "Nhap ngay x\n"; 
	cin >> x; // nhap vao doi tuong
	
	// chuyen kieu
	n = long(x);
	cout << "\nNgay x = " << x;
	cout << "\nSo nguyen tuong ung: " << n;
	
return 0;
}

