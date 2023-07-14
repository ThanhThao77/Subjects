#include <iostream>
#include <vector>
using namespace std;

template <typename T>
class BinaryHeap
{
public:
    BinaryHeap(int capacity = 10) //khoi tao dong rong
    {
        CurrentSize = 0;
        arr.resize(capacity);
    }
    BinaryHeap(vector<T> &vt) //dung dong
    {
        CurrentSize = vt.size();
        arr.resize(vt.size() + 10);
        for (int i = 0; i < CurrentSize; i++)
            arr[i + 1] = vt[i];
        BuildHeap();
    }
    int isEmpty() // ham tra ve rong
    {
        return CurrentSize == 0;
    }
    T findMin() // tim phan tu nho nhat(o goc)
    {
        return arr[1];
    }
    void insert(T a) //chen x vao goc
    {
        if (CurrentSize == arr.size() - 1)
            arr.resize(2 * CurrentSize);
        int hole = ++CurrentSize;
        while (hole > 1 && a < arr[hole / 2])
        {
            arr[hole] = arr[hole / 2];
            hole = hole / 2;
        }
        arr[hole] = a;
    }
    void deleteMin() //xoa phan tu nho nhat o goc
    {
        arr[1] = arr[CurrentSize];
        CurrentSize--;
        percolateDown(1);
    }

private:
    int CurrentSize; //so phan tu hien co
    vector<T> arr; //vector chua cac phan tu
    void BuildHeap() //Giúp dung dong
    {
        for (int i = CurrentSize / 2; i > 0; i--)
            percolateDown(i);
    }
    void percolateDown(int hole) //giup xoa min va dung dong(tham thau xuoi)
    {
        T temp = arr[hole];
        int child;
        while (hole * 2 <= CurrentSize)
        {
            child = hole * 2;
            if (child < CurrentSize && arr[child] > arr[child + 1])
                child++;
            if (temp > arr[child])
            {
                arr[hole] = arr[child];
                hole = child;
            }
            else
                break;
        }
        arr[hole] = temp;
    }
};
int main()
{
    BinaryHeap<int> a;
    int n,x;
    cout<<"N = ";cin>>n;
    for(int i=1;i<=n;i++)
    {
    	cout<<"a["<<i<<"] = ";cin>>x;
    	a.insert(x);
	}
//    a.insert(3);
//    a.insert(5);
//    a.insert(2);
//    a.insert(4);
//    a.insert(1);
	cout<<"BinHeap:";
    while (!a.isEmpty())
    {
        cout << " " << a.findMin();
        a.deleteMin();
    }
}
