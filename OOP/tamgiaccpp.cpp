#include <iostream>
#include <cmath>
using namespace std;

template <class T>
class tamgiac
{
	private:
		T a, b, c;
	public:
		tamgiac(T _a, T _b, T _c);
		void output();
		bool Check();
		float dientich();
		T chuvi();
};

template <class T>
tamgiac<T> :: tamgiac(T _a, T _b, T _c)
{
	a = _a;
	b = _b;
	c = _c;
}

template <class T>
bool tamgiac<T> :: Check()
{
	if (a >= b+c || b >= a+c || c >= a+b)
		return false;
	return true;
}

template <class T>
void tamgiac<T> :: output()
{
	if (Check())
	{
		cout << "\nDay la 3 canh cua tam giac";
		cout << "\nDo dai 3 canh cua tam giac la: " << a << "\t" << b << "\t" << c;	
	}
}

template <class T>
float tamgiac<T> :: dientich()
{
	float p = chuvi() / 2.0;
	if (Check())
	{
		return (float)sqrt(p*(p-a) * (p-b) * (p-c));
	}
}

template <class T>
T tamgiac<T> :: chuvi()
{
	if (Check())
	{
		return a + b + c;
	}
}
int main()
{
	tamgiac<int> tamgiac1(1,2,4);
	if(tamgiac1.Check ())
	{
	tamgiac1.output() ;
	cout<<"\nDien tich cua tam giac = "<<tamgiac1.dientich();
	cout<<"\nChu vi cua tam giac = "<<tamgiac1.chuvi();
	}else cout<<"3 canh khong phai la tam giac ";
	
	cout<<"\n\n";
	tamgiac<float> tamgiac2(3.5, 4.7 , 5.5);
	if(tamgiac2.Check ())
	{
	tamgiac2.output() ;
	cout<<"\nDien tich cua tam giac = "<<tamgiac2.dientich();
	cout<<"\nChu vi cua tam giac = "<<tamgiac2.chuvi();
	}else cout<<"3 canh khong phai la tam giac ";
	
return 0;
}

