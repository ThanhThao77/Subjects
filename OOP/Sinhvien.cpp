#include <iostream>
#include <string>
using namespace std;

class Sinhvien
{
	protected:
		int msv;
		string hoten;
		int tuoi;
	public:
		Sinhvien() {};
		~ Sinhvien() {};  // ham huy
		void Nhap()
		{
			cout << "Nhap ma sinh vien: "; cin >> msv;
			cout << "Nhap ho ten: "; cin >> hoten;
			cout << "Nhap tuoi: "; cin >> tuoi;
		}
		void Xuat()
		{
			cout << msv << "\t" << hoten << "\t" << tuoi << "\t";
		}
};

// lop dan xuat
class DTK:public Sinhvien
{
	private:
		float toan, ly, hoa;
	public:
		void Nhap() 
		{
			Sinhvien::Nhap();
			cout << "Nhap diem Toan: "; cin >> toan;
			cout << "Nhap diem Ly: "; cin >> ly;
			cout << "Nhap diem Hoa: "; cin >> hoa;
		}
		
		void Xuat()
		{
			Sinhvien::Xuat();
			cout << toan << "\t" << ly << "\t" << hoa << "\n";
		}
		
		float Tinh_DTB() {
			return (toan + ly + hoa)/3;
		}
		
		string Xeploai() 
		{
			if (Tinh_DTB() >= 8)
				return "Gioi";
			else if (Tinh_DTB() >= 7)
				return "Kha";
			if (Tinh_DTB() >= 5)
				return "Trung binh";
			else
				return "Yeu";
		}
};

int main()
{
	DTK ds[50]; // khai bao mang ds gom 50 ptu
	int n;
	cout << "Nhap so sinh vien: "; cin >> n;
	cout << "\nNhap thong tin sinh vien\n";
	for (int i = 0; i < n; i++)
		ds[i].Nhap();
	cout << "\nDANH SACH SV DA NHAP LA\n";
	for (int i = 0; i < n; i++)
		ds[i].Xuat();
	
	cout << "\nDANH SACH SV CO DTB > 8\n";
	for (int i = 0; i < n; i++)
	{
		if (ds[i].Tinh_DTB() > 8)
			ds[i].Xuat();
	}
	
	cout << "\nDANH SACH SV XEP LOAI KHA\n";
	for (int i = 0; i < n; i++)
	{
		if (ds[i].Xeploai() == "Kha")
			ds[i].Xuat();
	}
	
return 0;
}

