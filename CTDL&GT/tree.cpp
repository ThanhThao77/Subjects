// Nguyen Manh Hien
// hiennm@tlu.edu.vn

#include <iostream>
#include <string>

using namespace std;

// Kieu cua cac nut tren cay (chua thong tin ve mot sinh vien).
struct Node
{
    int sbd;      // So bao danh
    string hoTen; // Ho ten sinh vien
    Node * left;  // Con tro toi nut con trai
    Node * right; // Con tro toi nut con phai
    
    // Ham tao.
    Node(int s, string h, Node * l, Node * r)
    {
        sbd = s;
        hoTen = h;
        left = l;
        right = r;
    }
};

// Lop cay nhi phan tim kiem.
class BSTree
{
public:
    // Ham tao (ban dau cay rong).
    BSTree()
    {
        root = NULL;
    }
    
    // Ham huy (xoa het cac nut tren cay).
    ~BSTree()
    {
        makeEmpty();
    }
    
    // Kiem tra cay co rong hay khong.
    bool isEmpty()
    {
        return (root == NULL);
    }

    // Xoa het cac nut tren cay.
    void makeEmpty()
    {
        makeEmpty(root);
    }
    
    // Chen mot sinh vien moi vao cay.
    void insert(int sbd, string hoTen)
    {
        insert(sbd, hoTen, root);
    }
    
    // Tim sinh vien theo so bao danh.
    Node * search(int sbd)
    {
        return search(sbd, root);
    }
    void thutugiua(){
        giua(root);
    }
    void thutusau(){
        sau(root);
    }
    void thututruoc(){
        truoc(root);
    }
    void findMin(){
        Node* v = findMin(root);
        cout<<v->sbd<<"\t"<<v->hoTen<<endl;
    }
    void findMax(){
        Node* v = findMax(root);    
        cout<<v->sbd<<"\t"<<v->hoTen;
    }
    void remove(int x){
        remove(x,root);
    }
private:
    Node * root; // Con tro toi nut goc cua cay
    
    // Xoa rong cay (viet theo kieu de quy).
    void makeEmpty(Node * & t)
    {
        if (t == NULL)       // Cay da rong roi thi thoat ra
            return;
        
        makeEmpty(t->left);  // Xoa rong cay con trai
        makeEmpty(t->right); // Xoa rong cay con phai
        delete t;            // Xoa nut goc
        t = NULL;            // Khong con nut goc de tro den, phai cho t thanh NULL
    }
    
    // Chen mot sinh vien moi vao cay (viet theo kieu de quy).
    void insert(int sbd, string hoTen, Node * & t)
    {
        if (t == NULL) // Cay dang rong thi nut moi se thanh nut goc
            t = new Node(sbd, hoTen, NULL, NULL);
        else if (sbd < t->sbd)
            insert(sbd, hoTen, t->left);
        else if (sbd > t->sbd)
            insert(sbd, hoTen, t->right);
        else
            ; // So bao danh da ton tai, khong lam gi ca
    }
    
    // Tim sinh vien theo so bao danh (viet theo kieu de quy).
    Node * search(int sbd, Node * t)
    {
        if (t == NULL)
            return NULL;
        
        if (sbd < t->sbd)
            return search(sbd, t->left);
        else if (sbd > t->sbd)
            return search(sbd, t->right);
        else
            return t;
    }   
    Node * findMin(Node* & t){
        if(t== NULL){
            return NULL;                
        }
        else if(t->left == NULL)
            return t;
        return findMin(t->left);
    }
    Node * findMax(Node* & t){
        if(t==NULL){
            return NULL;
        }
        else{
            while(t->right!= NULL){
                t= t->right;
            }
            return t;
        }   
    }
    void remove(int x,Node* & t){
        if(t==NULL){
            return ;
        }
        else if(x<t->sbd){
            remove(x,t->left);
        }
        else if(x>t->sbd){
            remove(x,t->right);
        }
        else if(t->left && t->right){
            Node* v=findMin(t->right);
            t->sbd = v->sbd;
            t->hoTen = v->hoTen;
            remove(t->sbd,t->right);
        }
        else{
            Node* old = t;
            t = (t->left!= NULL) ? t->left:t->right;
            delete old;
        }   
    }
    void giua(Node* t){
        if(t!=NULL){
            giua(t->left);
            cout<<t->sbd<<"\t"<<t->hoTen<<endl;
            giua(t->right);
        }
    }
    void truoc(Node* t){
        if(t!=NULL){
            cout<<t->sbd<<"\t"<<t->hoTen<<endl;
            truoc(t->left);
            truoc(t->right);
        }
    }
    void sau(Node* t){
        if(t!=NULL){
            sau(t->left);
            sau(t->right);
            cout<<t->sbd<<"\t"<<t->hoTen<<endl;
        }
    }
    
};

int main()
{
    BSTree bst;
    
    // Chen mot so sinh vien moi vao cay.
    bst.insert(5, "Tuan");
    bst.insert(6, "Lan");
    bst.insert(3, "Cong");
    bst.insert(8, "Huong");
    bst.insert(7, "Binh");
    bst.insert(4, "Hai");
    bst.insert(2, "Son");
    cout<<"Cay duyet theo thu tu giua la: "<<endl;
    bst.thutugiua();
//  cout<<"Cay duyet theo thu tu truoc la: "<<endl;
//  bst.thututruoc();

    //cout<<endl;
	//cout<<"Min la: "<<endl;
   //bst.findMin();
	//cout<<"Max la: "<<endl;
    //bst.findMax();
    int x;
    cout<<"\nNhap so bao danh can xoa: ";
    cin>>x;
    bst.remove(x);
    bst.thutugiua();
   
   
    //bst.thutugiua();
    //cout<<"Cay duyet theo thu tu sau la: "<<endl;
    //bst.thutusau();   
    // Tim hai sinh vien co so bao danh 4 va 9.
//  Node * n1 = bst.search(4);
    //Node * n2 = bst.search(9);
    
    // In ket qua tim kiem
//  if (n1 != NULL)
//      cout << "Sinh vien voi SBD=4 la " << n1->hoTen << endl;
//  if (n2 == NULL)
//      cout << "Khong tim thay sinh vien voi SBD=9" << endl;
    
    // Lam rong cay.
//  bst.makeEmpty();
//  if (bst.isEmpty())
//      cout << "Cay da bi xoa rong" << endl;
    
    return 0;
}
