public class fibonacci
{
public static void main(String args[])
{
int i=0,num1=0,num2=1,num3=0;
System.out.println(num1);
System.out.println(num2);
while(i<10)
{
num3=num2+num1;
System.out.println(num3);
num1=num2;
num2=num3;
i++;
}
}
}
