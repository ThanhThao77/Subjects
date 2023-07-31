/*
 * Chuong trinh minh hoa cay pha he: Person, Student, Faculty, Staff ..
 */
 
#include<iostream>
#include<string>

using namespace std;

class Person
{
	private:
		string name;
	public:
		virtual void print()=0;
		void show();
};

class Student: public Person
{
	private:
		string id;
	public:
		virtual void print() = 0;
};

class Undergrad: public Student
{
	private:
	public:
		void print();
};

class GradStudent: public Student
{
	public:
		void print();
};

void Person::show()
{
	cout << "Goi ham show() -> ";
	print();
}

void Undergrad::print()
{
	cout << "Goi ham print() cua lop Undergrad \n";
}

void GradStudent::print()
{
	cout << "Goi ham print() cua lop GradStudent \n";
}
int main()
{
	//Person aPerson;
	//Student aStudent;
		
	Undergrad aUGS;
	GradStudent aGS;
	
	aUGS.show();
	aGS.show();
	return 0;
}


