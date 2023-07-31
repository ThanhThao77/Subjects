/*
 * Chuong trinh minh hoa ham ao
 * voi cac lop A B C D E
 */
 
#include<iostream>
#include<stdlib.h>

using namespace std;

// Dinh nghia lop cha A
class A
{	
	public:
		void show();		
		virtual void print()=0;		
};

// Dinh nghia lop con B ke thua tu lop A
class B: public A
{		
	public:
		void print();
		
};

// Dinh nghia lop con C ke thua tu lop A
class C: public A
{
	public:
		void print();		
};

// Dinh nghia lop con D ke thua tu lop A
class D: public A
{
	public:
		void print();		
};

// Dinh nghia lop con D ke thua tu lop A
class E: public B
{
	public:
		void print();		
};

//void show (A *a)
//{
//	a->print();
//}

int main()
{	
	B b;
	C c;
	D d;
	E e;
	//show(&b);
	c.show();
	system("pause");
	return 0;
}

void A::show()
{
	print();
}

void B::print()
{
	cout << "Ham print cua lop B\n";
}

void C::print()
{
	cout << "Ham print cua lop C\n";
}

void D::print()
{
	cout << "Ham print cua lop D\n";
}

void E::print()
{
	cout << "Ham print cua lop E\n";
}
