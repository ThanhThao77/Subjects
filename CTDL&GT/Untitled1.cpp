// Nguyen Manh Hien
// hiennm@tlu.edu.vn

#include <iostream>

using namespace std;

struct sv {
	int msv;
	int tuoi;
	string ht;
};

template <typename T>
class Queue
{
public:
	Queue()
	{
		front = NULL;
		back = NULL;
		size = 0;
	}
	
	~Queue()
	{
		while (!empty())
			dequeue();
	}
	
	// Kiem tra hang doi co dang rong hay khong.
	bool empty()
	{
		return (size == 0);
	}
	
	// Lay kich thuoc (so phan tu hien co) cua hang doi.
	int getSize()
	{
		return size;
	}
	
	// In tat ca phan tu trong hang doi
	void print()
	{
		Node *p = front;
		while (p != NULL)
		{
			cout << p-> elem.msv << "\t";
			cout << p -> elem.ht << "\t";
			cout << p -> elem.tuoi << "\t";
			cout << endl;
			p = p->next;
		}
		cout << endl;
	}
	
	// Kiem tra xem danh sach co chua x hay khong.
	bool find(int x)
	{
		Node * p = front;
		
		while (p != NULL)
		{
			if (p->elem.msv == x)
				return true;
			p = p->next;
		}
		
		return false;
	}
	
	// Them phan tu e vao cuoi hang doi.
	void enqueue(T e)
	{
		Node * v = new Node;  // Tao nut moi
		v->elem = e;          // Dat phan tu moi vao nut moi
		v->next = NULL;       // Nut moi se tro thanh nut cuoi nen con tro next bang NULL
		
		if (size == 0)        // Truong hop danh sach dang rong
			front = back = v; // Nut moi tro thanh nut duy nhat
		else                  // Truong hop co it nhat mot nut trong danh sach (tuc la ton tai nut cuoi)
		{
			back->next = v;   // Lien ket nut cuoi voi nut moi
			back = v;         // Nut moi tro thanh nut cuoi
		}
		
		size++;               // Cap nhat kich thuoc
	}
	
	// Xoa phan tu o dau hang doi.
	T dequeue()
	{
		T e = front->elem;       // Giu lai phan tu dau de tra ve sau khi xoa
		
		Node * v = front;        // Giu lai dia chi cua nut dau
		
		if (size == 1)           // Truong hop danh sach dang co mot nut duy nhat
			front = back = NULL; // Xoa xong thi danh sach rong
		else                     // Truong hop danh sach co tu 2 nut tro len
			front = front->next; // Cho front tro sang nut thu hai (se tro thanh nut dau sau khi xoa)
		delete v;                // Xoa nut dau
		
		size--;                  // Cap nhat kich thuoc
		
		return e;
	}
	
private:
	struct Node
	{
		T elem;
		Node * next;
	};
	
	Node * front; // Con tro toi nut dau danh sach
	Node * back;  // Con tro toi nut cuoi danh sach
	int size;     // Kich thuoc cua hang doi
};

int main()
{
	Queue<sv> q;
	
	sv a,b,c;
	a.msv = 1;
	a.ht = "Nguyen Van A";
	a.tuoi = 20;
	
	b.msv = 2;
	b.ht = "Nguyen Van B";
	b.tuoi = 17;
	
	c.msv = 3;
	c.ht = "Nguyen Van C";
	c.tuoi = 25;
	
	q.enqueue(a);
	q.enqueue(b);
	q.enqueue(c);
		
	cout << "Cac phan tu trong danh sach la:\n";
	cout << "MSV\t Ho ten\t\tTuoi" << endl;
	q.print();
	cout << endl;
	
	cout << "Kich thuoc hang doi sau khi chen: " << q.getSize() << endl;
	if (q.find(2))
		cout << "Tim duoc MSV 2 trong danh sach" << endl;
	if (!q.find(10))
		cout << "Khong tim duoc MSV 10 trong danh sach\n" << endl;
	

	return 0;
}

