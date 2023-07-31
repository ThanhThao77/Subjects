/*
 * Chuong trinh minh hoa ham ao
 * voi cac lop Pet, Dog
 */
 
#include<iostream>
#include<stdlib.h>

using namespace std;

// Dinh nghia lop cha Figure
class Pet
{	
	public:
		string name;
		virtual void print();
};

class Dog: public Pet
{	
	public:
		string breed;
		virtual void print();
};

void Pet::print()
{
	cout<<"Name: " << name << "\n";
}

void Dog::print()
{
	cout<<"Name: " << name << "\n";
	cout<<"Breed: " << breed << "\n";
}

int main()
{	
//	Pet vpet;
//	Dog vdog;
//	
//	vpet.name = "Grand";
//	//vpet.print();
//	
//	vdog.name = "Tiny";
//	vdog.breed = "Great Dane";
//	
//	//vpet = vdog;	
//	
//	//vdog = static_cast<Dog> (vpet);
//	vpet = static_cast<Pet> (vdog);
//	
//	vpet.print();
		
	Pet* ppet;
	Dog* pdog = new Dog;
	
	ppet->name = "Grand";
	
	//pdog->name = "Tiny";
	//pdog->breed = "Great Dane";
	
	//ppet = pdog;
	
	pdog = dynamic_cast<Dog*> (ppet);
	pdog->print();
	
	//cout << ppet->breed;
	//ppet->print();
	return 0;
}


