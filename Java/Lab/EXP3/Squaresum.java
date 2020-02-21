public class Squaresum
{
public static void main(String args[])
{
int num[];
num = new int[10];

int sum=0;
for(int i=0;i<10;i++)
{
num[i]=Integer.parseInt(args[i]);
sum+=num[i]*num[i];
}
System.out.println(sum);
}
}
