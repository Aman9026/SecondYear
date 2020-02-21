class urgent extends call
{ 
  
public void ComPay(int time)
{
int rate=55;
int price= time*rate;
System.out.println("Price: " + price);
}
} 
  
class lightning extends call
{ 
    public void ComPay(int time)
{
int rate=50;
int price= time*rate;
System.out.println("Price: " + price);
}
}
class ordinary extends call
{ 
    public void ComPay(int time)
{
int rate=35;
int price= time*rate;
System.out.println("Price: " + price);
}
} 


// Driver class 
public class call 
{ 

public int time=10;

    public static void main(String[] args) 
    { 
        ordinary g1 = new ordinary(); 
        
	urgent g2 = new urgent();
	
	lightning g3 = new lightning();
	
	g1.ComPay(15);
	g2.ComPay(15);
	g3.ComPay(15);
    } 
}
