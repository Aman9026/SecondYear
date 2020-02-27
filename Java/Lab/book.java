public class book
{
int quantity=0;
public void purchase(int q)
{
book1 b1=new book1();
stock[quantity]=b1;
quantity++;
System.out.println("No. of books available:"+quantity);
}

public void sell(int q,book ob1)
{

quantity--;
System.out.println("No. of books available:"+quantity);
}



public static void main(String args[])
{

book b=new book();
//b1.sell(1);
book1[] stock;
stock= new book1[10];

b.purchase(1);
b.purchase(1);
b.purchase(1);

}


}

class book1 extends book
{
int bookid=5545;




}

