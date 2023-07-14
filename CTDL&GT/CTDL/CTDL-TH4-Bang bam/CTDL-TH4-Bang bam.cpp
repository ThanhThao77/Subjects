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
			if(table[index].tuTiengAnh == mt.tuTiengAnh)
			{
				table[index].nghiaTiengViet;
				return;
			}
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
	int demsomuctu()
	{
		return demsomuctu (trong, tableSize);
	}
    
    void capnhat(string tuTiengAnh, string x) 
	{
		int index = hash(tuTiengAnh);
		while (!trong[index]) {
			if (table[index].tuTiengAnh == tuTiengAnh)
			{
				table[index].nghiaTiengViet = x;
				break;
			}
			index++;
            index = index % tableSize;		}
	}
	
	bool check(string del)
    {
    	int index = hash(del);
    	while (!trong[index])
		{
			if (table[index].tuTiengAnh == del)
				return true;
			index++;
			index = index % tableSize;
		}
		return false;
    	
	}
	void xoamuctu(string del)
	{
		int index = hash(del);
		while (!trong[index])
		{
			if (table[index].tuTiengAnh == del)
			{
				trong[index] = true;
				break;
			}
			index++;
			index = index % tableSize;
		}
		
		cout <<"Da xoa muc tu!";
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
    
    int demsomuctu(bool *trong, int tableSize)
    {
    	int count = 0;
    	for (int i = 0; i < tableSize; i++)
    	{
    		if (!trong[i])
    		count ++;
		}
		return count;
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
	
	string tuTA, nghiaTV;
	
		// Tim so muc tu	
	cout << "So muc tu hien co trong tu dien la: " << td.demsomuctu() << endl;

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
	

	//Cap nhat nghia TV
    string x, y;
	cout<<"Nhap tu tieng Anh can cap nhat nghia: "; getline(cin, x);
	cout<<"Nhap nghia tieng Viet: "; getline(cin, y);
	td.capnhat(x, y);
	
		
	string del;
	cout <<"Nhap tu TA cua muc tu can xoa: ";getline(cin,del);
	if (!td.check(del)) 
	    cout <<"Tu vua nhap khong ton tai!";
	else 
	    td.xoamuctu(del);
	
	return 0;
	
	// tham do bac 2
//	void chenMucTu(MucTu mt)
//    {
//    	// Thuc hien phep bam de xac dinh vi tri trong bang bam
//		int index = hash(mt.tuTiengAnh);
//		int i =0;
//		// Neu co dung do thi xet vi tri ke tiep
//		h=index;
//		while (!trong[h])
//		{
//			h = (index+i*i) % tableSize;
//			i++;
//		}
//		
//		// Het dung do thi dat muc tu vao bang bam
//		table[index] = mt;
//		trong[index] = false;
//    }

}
