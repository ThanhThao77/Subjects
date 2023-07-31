/*
 * Chuong trinh minh hoa ham ao
 * voi cac lop Figure
 */
 
#include<iostream>
#include<stdlib.h>

using namespace std;

// Dinh nghia lop cha Figure
class Sale
{
	protected:
		double price;
	public:
		Sale();
		Sale(double thePrice);
		double getPrice();
		virtual double bill();
		double savings (Sale &other);
};

class DiscountSale: public Sale
{
	private:
		double discount;
	public:
		DiscountSale();
		DiscountSale(double thePrice, double theDiscount);
		double getDiscount();
		void setDiscount(double newDiscount);
		double bill();
};

// Cai dat cho lop Sale
Sale::Sale()
{
	price = 0;
}

Sale::Sale(double thePrice)
{
	price = thePrice;
}

double Sale::getPrice()
{
	return price;
}

double Sale::bill()
{
	// Cong thuc cho hoa don ban le
	return 2*price;
}

double Sale::savings(Sale& other)
{
	return (bill() - other.bill());
}
// Cai dat cho lop DiscountSale
DiscountSale::DiscountSale()
{
	price = 0;
	discount = 0;
}

DiscountSale::DiscountSale(double thePrice, double theDiscount)
{
	price = thePrice;
	discount = theDiscount;
}

double DiscountSale::getDiscount()
{
	return discount;
}

void DiscountSale::setDiscount(double newDiscount)
{
	discount = newDiscount;
}

double DiscountSale::bill()
{
	double fraction = discount/100;
	return (1-fraction)*getPrice();
}

int main()
{
	Sale s1(10);
	Sale s2(20);
	
	cout << "s1.bill: " << s1.bill() << "\n";
	cout << "s2.bill: " << s2.bill() << "\n";
	cout << "s1.saving(s2): " << s1.savings(s2) << "\n";
	
	cout << "------------------------------------\n";
	DiscountSale ds1(10,2);
	DiscountSale ds2(20,2);
	
	cout << "ds1.bill: " << ds1.bill() << "\n";
	cout << "ds2.bill: " << ds2.bill() << "\n";
	cout << "ds1.saving(ds2): " << ds1.savings(ds2) << "\n";
		
	return 0;
}


