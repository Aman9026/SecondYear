interface test
{
int square(int a);
}
class arithmetic implements test
{
int num;
public int square(int a){ return a*a;}
int add(int a){ return a+a;}
}
public class ToTestInt
{
public static void main(String args[]){

arithmetic a1= new arithmetic();
System.out.println(a1.square(2));

}
}
