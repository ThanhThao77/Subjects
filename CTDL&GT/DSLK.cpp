// Nguyen Manh Hien
// hiennm@tlu.edu.vn

#include <iostream>

using namespace std;

struct sv{
		string ht;
		int tuoi;
		int msv;
		float diem1;
		float diem2;
		float diem3;
		float tong;
	};


template <typename T>
class SingleList
{
public:

	SingleList()
	{
		head = NULL;
		size = 0;
	}
	
	~SingleList()
	{
		while (!empty())
			popFront();
	}
	
	// Kiem tra xem danh sach co rong hay khong.
	bool empty()
	{
		return (head == NULL);
	}
	
	// Tra ve kich thuoc (so phan tu).
	int getSize()
	{
		return size;
	}
	
	// Tra ve phan tu dau danh sach.
	T front()
	{
		return head->elem;
	}
	
	// In cac phan tu tren cung mot dong, cach nhau boi dau cach.
	void print()
	{
		Node * p = head;
		
		while (p != NULL)
		{
			cout << p->elem.msv << "\t";
			cout << p->elem.ht << "\t";
			cout << p->elem.tuoi << "\t";
			cout << p->elem.diem1 << "\t";
			cout << p->elem.diem2 << "\t";
			cout << p->elem.diem3 << "\t";
			cout << p->elem.tong << "\t";
			cout << endl;
			p = p->next;
		}
		
		cout << endl;
	}
	
	// Chen x vao dau danh sach.
	void pushFront(T x)
	{
		Node * v = new Node(x, head);
		head = v;
		size++;
	}
	
	// Xoa phan tu dau danh sach.
	void popFront()
	{
		Node * old = head;
		head = head->next;
		delete old;
		size--;
	}
	
	// Kiem tra xem danh sach co chua x hay khong.
	bool contains(int x)
	{
		Node * p = head;
		
		while (p != NULL)
		{
			if (p->elem.msv == x)
				return true;
			p = p->next;
		}
		
		return false;
	}
	
	// Xoa x khoi danh sach (neu co).
	// Neu x xuat hien nhieu lan trong danh sach, chi xoa phan tu dau tien bang x.
	void remove(int x)
	{
		Node * p1 = NULL; // tro toi nut nam ngay phia truoc nut dang xet
		Node * p2 = head; // tro toi nut dang xet
		
		while (p2 != NULL)
		{
			if (p2->elem.msv == x)  // gap phan tu bang x
			{
				if (p1 == NULL) // phan tu can xoa nam o dau danh sach
				{
					head = head->next;
					delete p2;
				}
				else            // phan tu can xoa nam o giua hoac cuoi danh sach
				{
					p1->next = p2->next;
					delete p2;
				}
				
				size--;
				break;
			}
				
			p1 = p2;
			p2 = p2->next;
		}
	}
	
private:
	struct Node      // kieu du lieu cua cac nut trong danh sach
	{
		T elem;      // phan tu
		Node * next; // con tro toi nut ke tiep
		
		Node(T e, Node * n)
		{
			elem = e;
			next = n;
		}
	};
	
	Node * head;    // con tro toi nut dau danh sach
	int size;       // kich thuoc danh sach
};

int main()
{
	SingleList<sv> ds;
	
	sv a,b,c;
	a.ht = "Nguyen Van A";
	a.msv = 123;
	a.tuoi = 18;
	a.diem1 = 7;
	a.diem2 = 6;
	a.diem3 = 8;
	a.tong = a.diem1 + a.diem2 + a.diem3;
	
	b.ht = "Nguyen Van B";
	b.msv = 456;
	b.tuoi = 15;
	b.diem1 = 5;
	b.diem2 = 9;
	b.diem3 = 7;
	b.tong = b.diem1 + b.diem2 + b.diem3;
	
	c.ht = "Nguyen Van C";
	c.msv = 789;
	c.tuoi = 26;
	c.diem1 = 8;
	c.diem2 = 6;
	c.diem3 = 8;
	c.tong = c.diem1 + c.diem2 + c.diem3;


	ds.pushFront(a);
	ds.pushFront(b);
	ds.pushFront(c);

	
	cout << "Danh sach phan tu: \n";
	cout << "MSV\tHo ten\tTuoi\tDiem 1\tDiem 2\tDiem 3\tTong" << endl;
	ds.print();                                       
	cout << "Kich thuoc danh sach: " << ds.getSize(); 
	cout << endl;
	
	if (ds.contains(123))
		cout << "Tim duoc MSV 123 trong danh sach" << endl;
	if (!ds.contains(222))
		cout << "Khong tim duoc MSV 222 trong danh sach\n" << endl;
	
	ds.popFront(); 
	cout << "Danh sach sau khi xoa phan tu dau tien: \n";
	ds.print();    
	
	ds.remove(456);
	cout << "\nDanh sach sau khi xoa MSV 456: \n";
	ds.print();	
	
	return 0;
}
