

import java.util.*;

public class publication
{
     String title;
     float price;

	void display()
    {
        System.out.println("Title : " + title);
        System.out.println("Price : " + price);
    }

    publication(String title, float price)
    {
        this.title = title;
        this.price = price;
    }
    public static void main(String[] args)
    {
        System.out.println("Enter the data for book or tape: \n NAME\n PRICE \n PAGE COUNT/PLAYING TIME\n");
	Scanner sc = new Scanner(System.in);
	String name=sc.nextLine();
	int price=sc.nextInt();
	int pgcntORpltime= sc.nextInt(); 

        book b1 = new book(name, price, pgcntORpltime);
        b1.display();
       // b1.getSales();
       // b1.displaySales();
    }
}

/*class sales extends publication
{
    double saleAmount;

    public sales(String title, float price)
    {
        super(title,price);
    }

    void getSales()
    {
        Scanner sc1 = new Scanner(System.in);
        System.out.print("Enter the sale amount: ");
        saleAmount = sc1.nextDouble();

    }

    void displaySales()
    {
        System.out.println("The Sale Amount: " + saleAmount);
    }
}*/

class book extends publication
{
    int pageCount;

    book(String title, float price, int pageCount)
    {
        super(title,price);
        this.pageCount = pageCount;
    }

    void display()
    {
        System.out.println("Title : " + title);
        System.out.println("Price : " + price);
        System.out.println("PageCount : " + pageCount);
    }
}

class tape extends publication
{
    float playingTime;

    tape(String title, float price, float playingTime )
    {
        super(title,price);
        this.playingTime  = playingTime ;
    }

    void display()
    {
        System.out.println("Title : " + title);
        System.out.println("Price : " + price);
        System.out.println("Playing Time (in minutes) : " + playingTime );
    }
}



