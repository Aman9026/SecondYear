interface cal
{
int division(int num);
int modules(int num);
}
public class Calc implements cal
{
public int division(int num){
return num/2;
}
public int modules(int num){
return num%2;
}
public static void main(String args[])
{
Calc c1= new Calc();
System.out.println(c1.division(2));
System.out.println(c1.modules(2));
}

}
