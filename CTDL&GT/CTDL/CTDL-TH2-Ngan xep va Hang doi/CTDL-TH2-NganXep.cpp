// Nguyen Manh Hien
// hiennm@tlu.edu.vn

#include <iostream>

using namespace std;

template <typename T>
class Stack
{
public:
	// Dung luong ngan xep (capacity) co gia tri ngam dinh la 100.
	Stack(int capacity = 100)
	{
		theArray = new T[capacity];
		topOfStack = -1;
	}
	
	~Stack()
	{
		delete[] theArray;
	}
	
	// Kiem tra ngan xep co rong hay khong.
	bool empty()
	{
		return (topOfStack == -1);
	}
	
	// Lay kich thuoc (so phan tu hien co) cua ngan xep.
	int getSize()
	{
		return (topOfStack + 1);
	}
	
	// In tat ca phan tu
	void print()
	{
		for (int i = topOfStack; i >= 0; i--)
		{
			cout << theArray[i] << " ";
		}
	}
	
	// Kiem tra xem danh sach co chua x hay khong.
	bool contains(int x)
	{
		for (int i = topOfStack; i >= 0; i--)
		{
			if (theArray[i] == x)
			  return true;
		}
		return false;
	}
	
	// Them phan tu e vao ngan xep.
	void push(T e)
	{
		topOfStack++;
		theArray[topOfStack] = e;
	}
	
	// Xoa phan tu khoi ngan xep.
	void pop()
	{
		topOfStack--;
	}
	
	// Lay phan tu nam o dinh ngan xep (nhung khong xoa).
	T top()
	{
		return theArray[topOfStack];
	}

private:
	T * theArray;   // Con tro toi mang chua cac phan tu
	int topOfStack; // Chua vi tri cua phan tu nam o dinh ngan xep
};

int main()
{	
	Stack<char> s;
	
	if (s.empty())
		cout << "Ngan xep dang rong" << endl;
	
	s.push('B'); 
	s.push('E');
	s.push('K');
	s.push('A');
	s.push('C');

	cout << "Kich thuoc ngan xep sau khi chen:  " << s.getSize() << endl; // Se in ra 5
	cout << "Tat ca cac phan tu trong ngan xep la: ";
    s.print();
    cout << endl;
    
    if (s.contains('A'))
		cout << "Tim duoc A trong ngan xep" << endl;
	if (!s.contains('F'))
		cout << "Khong tim duoc F trong ngan xep\n" << endl;
		
	/*
	cout << "Cac phan tu trong ngan xep: ";
	while (!s.empty()) // Se in ra: C A K E B
	{
		cout << s.top() << " ";
		s.pop();
	}
	cout << endl;
	*/
	cout << "Kich thuoc ngan xep sau khi xoa rong: " << s.getSize() << endl; // Se in ra 0

	return 0;
}
