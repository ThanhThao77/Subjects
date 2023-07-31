#include <iostream>
#include <string>
using namespace std;

class NGUOI
{
	protected:
		string maCB, hoten, maDV;
		int namsinh;
		float hsl;
	public:
		NGUOI(){};
		void nhap();
		void xuat();
		float get_hsl();
};

void NGUOI::nhap()
{
	cin.ignore();
	cout << "Nhap ma can bo: "; getline(cin,maCB);
	cout << "Nhap ho ten can bo: "; getline(cin,hoten);
	cout << "Nhap nam sinh: "; cin >> namsinh;
	cin.ignore();
	cout << "Nhap ma don vi: "; getline(cin,maDV);
	cout << "Nhap he so luong: "; cin >> hsl;

}

void NGUOI::xuat()
{
	cout << maCB << "\t" << hoten << "\t" << namsinh << "\t" << hsl << "\t" << maDV << "\t";
}

float NGUOI::get_hsl()
{
	return hsl;
}

class CBPHONGBAN : public NGUOI
{
	private:
		string chucdanh;
		int phucap;
	public:
		CBPHONGBAN(){};
		void nhap();
		void xuat();
		double TinhluongCB();
};

void CBPHONGBAN::nhap()
{
	NGUOI::nhap();
	cin.ignore();
	cout << "Nhap chuc danh: "; getline(cin,chucdanh);
	cout << "Nhap phu cap: "; cin >> phucap;
	cout << endl;
}

void CBPHONGBAN::xuat()
{
	NGUOI::xuat();
	cout << chucdanh << "\t" << phucap << "\n";
}

double CBPHONGBAN::TinhluongCB()
{
	return (get_hsl()*2000000)+phucap;
}

class GIANGVIEN : public NGUOI
{
	private:
		string chuyen_nganh, hocvi, hang;
	public:
		GIANGVIEN(){};
		void nhap();
		void xuat();
		double TinhluongGV();
};

void GIANGVIEN::nhap()
{
	NGUOI::nhap();
	cin.ignore();
	cout << "Nhap chuyen nganh: "; getline(cin, chuyen_nganh);
	cout << "Nhap hoc vi: "; getline(cin, hocvi);
	cout << "Nhap hang: "; getline(cin, hang);
	cout << endl;
}

void GIANGVIEN::xuat()
{
	NGUOI::xuat();
	cout << chuyen_nganh << "\t" << hocvi << "\t" << hang << "\n";
}

double GIANGVIEN::TinhluongGV()
{
	return (get_hsl()*2000000*1.25);
}

int main()
{
	CBPHONGBAN ds1[50];
	GIANGVIEN ds2 [50];
	
	int n;
	cout << "Nhap so can bo: "; cin >> n;
	cout << "NHAP THONG TIN CAN BO\n";
	for(int i = 0; i < n; i++)
		ds1[i].nhap();
		
	int m;
	cout << "Nhap so giang vien: "; cin >> m;
	cout << "NHAP THONG TIN GIANG VIEN\n";
	for(int i = 0; i < m; i++)
		ds2[i].nhap();
		
	cout << "\nDANH SACH CAN BO\n";
	for (int i = 0; i < n; i++)
		ds1[i].xuat();
	
	cout << "\nDANH SACH GIANG VIEN\n";
	for (int i = 0; i < m; i++)
		ds2[i].xuat();
return 0;
}

