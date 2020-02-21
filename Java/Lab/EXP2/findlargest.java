public class findlargest
{

public static void main(String args[])
{
int largest=0,num1=0,num2=0,num3=0;
num1=Integer.parseInt(args[0]);
num2=Integer.parseInt(args[1]);
num3=Integer.parseInt(args[2]);
if(num1>num2 && num1>num3)
{largest=num1;}
if(num2>num1 && num2>num3)
{largest=num2;}
if(num3>num2 && num3>num1)
{largest=num3;}
System.out.println(largest);
}
}
