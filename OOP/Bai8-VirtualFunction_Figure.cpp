/*
 * Chuong trinh minh hoa ham ao
 * voi cac lop Figure
 */
 
#include<iostream>
#include<stdlib.h>

using namespace std;

// Dinh nghia lop cha Figure
class Figure
{
	protected:
		string name;
	public:
		Figure();
		virtual void draw();
		void center();
};

// Dinh nghia lop con Rectangle
class Rectangle: public Figure
{	
	private:		
		int width, height;
	public:
		Rectangle();
		//void draw();
		
};

// Dinh nghia lop con Circle
class Circle: public Figure
{
	private:
		int radius;
	public:
		Circle();
		//void draw();		
};

int main()
{
	Figure aFigure;
	Rectangle aRectangle;
	
	aFigure.draw();
	aRectangle.draw();
	
//	aFigure.center();
//	cout << "----------------------\n";
//	aRectangle.center();
	
	system("pause");
	return 0;
}

Figure::Figure()
{
	name = "Figure";
}
// Cai dat ham draw cho lop Figure
void Figure::draw()
{
	cout << "Ham draw cua lop " << name << "\n";
}

// Cai dat ham center cho lop Figure
void Figure::center()
{
	cout << "Ham center cua lop Figure\n";
	
	// Goi ham draw
	draw();
}

Rectangle::Rectangle()
{
	name = "Rectangle";
}

// Cai dat ham draw cho lop Rectangle
//void Rectangle::draw()
//{
//	//cout << "Ham draw cua lop Rectangle\n";
//	cout << "Ham draw cua lop " << name << "\n";
//}

Circle::Circle()
{
	name = "Circle";
}

// Cai dat ham draw cho lop Circle
//void Circle::draw()
//{
//	cout << "Ham draw cua lop " << name << "\n";
//}
