public class Marksandgrades
{
public int studentno,marks;


public static void main(String args[])
{

Marksandgrades obj[]= new Marksandgrades[10];
Marksandgrades temp= new Marksandgrades();

for(int i=0;i<10;i++)
{
Marksandgrades objtemp = new Marksandgrades();
obj[i]=objtemp;
obj[i].studentno= i+1;
obj[i].marks=Integer.parseInt(args[i]);
}
for(int j=0;j<10;j++)
{
for(int i=j+1;i<10;i++)
{

if (obj[j].marks > obj[i].marks) 
                {
temp=obj[j];
obj[j]=obj[i];
obj[i]=temp;
}

}
}
for (int j = 0; j < 10; j++) 
{
if(obj[j].marks<=50 && obj[j].marks>=40){System.out.println(obj[j].marks+" PASS");}
else if(obj[j].marks<=75 && obj[j].marks>=51){System.out.println(obj[j].marks+" MERIT");}
else if(obj[j].marks>=76){System.out.println(obj[j].marks+" DISTINCTION");}

}

}
}
