// Nguyen Manh Hien
// hiennm@tlu.edu.vn

#include <iostream>
#include <string>

using namespace std;

// Muc tu trong tu dien
struct MucTu
{
    string tuTiengAnh;
    string nghiaTiengViet;

	// Ham tao
	MucTu(string tuTA = "", string nghiaTV = "")
    {
    	tuTiengAnh = tuTA;
    	nghiaTiengViet = nghiaTV;
    }
};

// Tu dien dua tren bang bam tham do tuyen tinh
class TuDien
{
public:
	// Ham tao
	TuDien(int size = 101) // Kich thuoc bang bam ngam dinh la 101
    {
		tableSize = size;             // Khoi tao kich thuoc bang bam
        table = new MucTu[tableSize]; // Cap phat bo nho cho bang bam
        
        // Tat ca cac o trong bang bam deu trong
		trong = new bool[tableSize];
		for (int i = 0; i < tableSize; i++)
			trong[i] = true;            
    }
    
    // Ham huy
    ~TuDien()
    {
    	delete[] table; // Giai phong bang bam
    	delete[] trong; // Xoa mang trong
    }
   
    // Chen muc tu vao tu dien
	void chenMucTu(MucTu mt)
    {
    	// Thuc hien phep bam de xac dinh vi tri trong bang bam
		int index = hash(mt.tuTiengAnh);
		
		// Neu co dung do thi xet vi tri ke tiep
		while (!trong[index])
		{
			index++;
			index = index % tableSize;
		}
		
		// Het dung do thi dat muc tu vao bang bam
		table[index] = mt;
		trong[index] = false;
    }
    
    // Lay nghia tieng Viet
    string nghiaTiengViet(string tuTiengAnh)
    {
		// Thuc hien phep bam de xac dinh vi tri trong bang bam
		int index = hash(tuTiengAnh);
		
		// Neu co muc tu thi kiem tra tu tieng Anh co dung la tu dang tim hay khong
		while (!trong[index])
		{
			if (table[index].tuTiengAnh == tuTiengAnh)
				return table[index].nghiaTiengViet;
			
			index++;
			index = index % tableSize;
		}
		
		// Den day nghia la khong tim duoc, tra ve xau rong
		return "";
	}
	void dem()
	{	
		int index=0,dem=0;
		while(index<tableSize)
		{
			if (trong[index]!=true) 
				dem++;
			index++;
		}
		cout<<"Co "<<dem<<" tu."<<endl;
	}
	void fix(string tuTiengAnh)
	{
		int index = hash(tuTiengAnh);
		while (!trong[index])
		{
			if (table[index].tuTiengAnh == tuTiengAnh)
			{
				string tam;
				cout<<"Nhap nghia ban muon sua: ";
				cin>>tam;
				table[index].nghiaTiengViet=tam;
				break;
			}
			index++;
			index = index % tableSize;
		}
		
	}
	bool check(string tuTiengAnh)
	{
		int index = hash(tuTiengAnh);
		while (!trong[index])
		{
			if (table[index].tuTiengAnh == tuTiengAnh)
				return true;
			index++;
			index = index % tableSize;
		}
		return false;
	}
	
	
private:
	MucTu * table; // Con tro toi bang bam
	int tableSize; // Kich thuoc bang bam        
	bool * trong;  // Neu trong[i] == true thi vi tri i trong bang bam dang trong
	
    // Ham bam anh xa tu tieng Anh sang mot vi tri trong bang bam:
    //   1. Cong cac ky tu
    //   2. Chia cho kich thuoc bang bam va lay phan du
	int hash(string tuTiengAnh)
    {
        int hashVal = 0;
		for (int i = 0; i < tuTiengAnh.size(); i++)
    		hashVal += tuTiengAnh[i];

		return hashVal % tableSize;
    }
};

int main()
{
	TuDien td;
	
	// Tao mot vai muc tu
	MucTu mt1("computer", "may tinh");
	MucTu mt2("memory", "bo nho");
	MucTu mt3("hard disk", "dia cung");
	
	// Chen cac muc tu vao tu dien
	td.chenMucTu(mt1);
	td.chenMucTu(mt2);
	td.chenMucTu(mt3);
	
	td.dem();
	string tuTA, nghiaTV;
	
	// Yeu cau nhap tu tieng Anh de tra cuu tu dien
	cout << "Nhap tu tieng Anh: ";
	getline(cin, tuTA);
	
	// Tim nghia tieng Viet
	nghiaTV = td.nghiaTiengViet(tuTA);
	
	// In ket qua tra cuu
	if (nghiaTV == "")		
		cout << "Tu vua nhap khong co trong tu dien" << endl;
	else		
		cout << "Nghia cua tu vua nhap la: " << nghiaTV << endl;
	
	string sua;
	cout<<"Nhap tu can sua: ";
	getline(cin,sua);
	if(td.check(sua)==true)
		td.fix(sua);
	else
		cout << "Tu vua nhap khong co trong tu dien" << endl;
	string tam;
	tam = td.nghiaTiengViet(sua);
	if (tam == "")		
		cout << "Tu vua nhap khong co trong tu dien" << endl;
	else		
		cout << "Nghia cua tu vua nhap la: " << tam << endl;
	return 0;
}
