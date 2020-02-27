interface ar
{
final double pi=3.14;
double getarea(double r);
}
class circle implements ar
{

public double getarea(double r){
double area=2*pi*r;
return area;}
}
public class AreaCalc 
{
public static void main(String args[])
{
circle c1= new circle();
System.out.println(c1.getarea(1));
}

}
