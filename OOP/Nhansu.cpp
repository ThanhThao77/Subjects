#include <iostream>
#include <string>
using namespace std;

class NHANSU
{
	protected:
		int mnv;
		string hoten;
		int tuoi;
	public:
		NHANSU();
		NHANSU(int _mnv, string _hoten, int _tuoi);
		void Nhap();
		void Xuat();
		bool DK_vehuu();
		~NHANSU()
		{
			mnv = 0;
			hoten = "";
			tuoi = 0;
		};
};

NHANSU::NHANSU() {
	this -> mnv = 0;
	this -> hoten = "";
	this -> tuoi = 0;
}

NHANSU::NHANSU(int _mnv, string _hoten, int _tuoi){
	mnv = _mnv;
	hoten = _hoten;
	tuoi = _tuoi;
}

void NHANSU::Nhap()
{
	cout << "Nhap Ma NV: "; cin >> mnv;
	cin.ignore();
	cout << "Nhap Ten NV: "; getline(cin,hoten);
	cout << "Nhap Tuoi NV: "; cin >> tuoi;
}

void NHANSU::Xuat()
{
	cout << mnv << "\t" << hoten << "\t" << tuoi << "\t";
}

bool NHANSU::DK_vehuu()
{
	if (tuoi >= 55)
		return true;
	return false;
}

class CONGNHAN : public NHANSU
{
	private:
		int muc_luong;
		int ngay_cong;
		string tay_nghe;
	public:
		void Nhap();
		void Xuat();
		double TinhluongCN();
};

void CONGNHAN::Nhap()
{
	NHANSU::Nhap();
	cout << "Nhap muc luong: "; cin >> muc_luong;
	cout << "Nhap ngay cong: "; cin >> ngay_cong;
	cin.ignore();
	cout << "Nhap tay nghe: "; getline(cin, tay_nghe);
	cout << endl;
}

void CONGNHAN::Xuat()
{
	NHANSU::Xuat();
	cout << muc_luong << "\t" << ngay_cong << "\t" << tay_nghe << endl;
}

double CONGNHAN::TinhluongCN()
{
	return (muc_luong * ngay_cong);
}

class CANBO : public NHANSU
{
	private:
		float hs_luong;
		int phucap;
		string chuyen_mon;
		string trinh_do;
	public:
		void Nhap();
		void Xuat();
		double TinhluongCB();
};

void CANBO::Nhap()
{
	NHANSU::Nhap();
	cout << "Nhap he so luong: "; cin >> hs_luong;
	cout << "Nhap phu cap: "; cin >> phucap;
	cin.ignore();
	cout << "Nhap chuyen mon: "; getline(cin, chuyen_mon);
	cout << "Nhap trinh do: "; getline(cin, trinh_do);
	cout << endl;	
}

void CANBO::Xuat()
{
	NHANSU::Xuat();
	cout << hs_luong << "\t" << phucap << "\t" << chuyen_mon << "\t" << trinh_do << "\n";
}

double CANBO::TinhluongCB()
{
	return ((hs_luong * 1500000) + phucap);
}

int main()
{
	CONGNHAN ds1[50];
	CANBO ds2[50];
	
	int n;
	cout << "Nhap so cong nhan: "; cin >> n;
	cout << "\nNHAP THONG TIN CONG NHAN\n";
	for (int i = 0; i < n; i++)
		ds1[i].Nhap();
		
	int m;
	cout << "Nhap so can bo: "; cin >> m;
	cout << "\nNHAP THONG TIN CAN BO\n";
	for (int i = 0; i < n; i++)
		ds2[i].Nhap();
		
	cout << "\nDANH SACH CONG NHAN\n";
	for (int i = 0; i < n; i++)
		ds1[i].Xuat();
		
	cout << "\nDANH SACH CAN BO\n";
	for (int i = 0; i < n; i++)
		ds2[i].Xuat();
	
	cout << "\nDANH SACH CONG NHAN DU DK VE HUU\n";
	for (int i = 0; i < n; i++)
	{
		if(ds1[i].DK_vehuu())
		ds1[i].Xuat();
	}	
	
	cout << "\nDANH SACH CAN BO CHUA DU DK VE HUU\n";
	for (int i = 0; i < m; i++)
	{
		if (!ds2[i].DK_vehuu())
		ds2[i].Xuat();
	}
	
	long max = ds1[0].TinhluongCN();
	for (int i = 1; i < n; i++)
	{
		if (max < ds1[i].TinhluongCN())
			max = ds1[i].TinhluongCN();
	}
	cout << "\nTien luong cao nhat trong cong nhan la: " << max;
	
	long min = ds2[0].TinhluongCB();
	for (int i = 1; i < m; i++)
	{
		if (min > ds2[i].TinhluongCB())
			min = ds2[i].TinhluongCB();
	}
	cout << "\nTien luong thap nhat trong can bo la: " << min;
return 0;
}

