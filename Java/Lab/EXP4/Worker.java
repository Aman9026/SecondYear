class DailyWorker extends Worker
{ 
  
public void ComPay(int hours)
{
int wage= hours*salaryrate;
System.out.println("Wage: " + wage);
}
} 
  
class SalariedWorker extends Worker
{ 
    public void ComPay()
{
int wage= 40*salaryrate;
System.out.println("Wage: " + wage);
}
} 



// Driver class 
public class Worker 
{ 
public String Name;
public int salaryrate=55;

    public static void main(String[] args) 
    { 
        SalariedWorker g1 = new SalariedWorker(); 
        g1.Name="Aman";
	DailyWorker g2 = new DailyWorker();
	g2.Name="Animesh";
	g1.ComPay();
	g2.ComPay(41);
    } 
}
