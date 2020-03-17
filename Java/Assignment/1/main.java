
import java.util.*;
abstract class Animal
{
    String name;
    int age;
    String animalType;

    Animal(String name, int age)
    {
        this.name = name;
        this.age = age;
    }

    public String getName()
    {
        return name;
    }

    int getAge()
    {
        return age;
    }

    void talk()
    {
        System.out.println("My name is : " + name);
        System.out.println("I am " + age + "years old");
    }
}

class Tiger extends Animal
{
	String animalType;

    Tiger(String name,int age, String animalType)
    {
        super(name, age);
        this.animalType = animalType;
    }

    @Override
    void talk()
	{
        System.out.println("My name is : " + name);
        System.out.println("I am " + age + "years old");
        System.out.println("I am a : " + animalType);
	}
}
class Lion extends Animal
{
    String animalType;

    Lion(String name,int age, String animalType)
    {
        super(name, age);
        this.animalType = animalType;
    }

    @Override
void talk()
	{
        System.out.println("My name is : " + name);
        System.out.println("I am " + age + "years old");
        System.out.println("I am a : " + animalType);
	}

}
class Zoo
{
static Animal[] zooanimals = new Animal[10];
static int numOfAnimals;


void addAnimal(Animal newAnimal)
{
zooanimals[numOfAnimals]=newAnimal;
numOfAnimals++;
}
void displayAnimals()
{
for(int i=1;i<Zoo.numOfAnimals;i++)
{
System.out.println("My name is: " + (Zoo.zooanimals[i]).name);
}

}
void displayAnimalsNameAge()
{
for(int i=1;i<numOfAnimals;i++)
{
System.out.println("My name is: " + (zooanimals[i]).name + "\nMy age is: " + (zooanimals[i]).age + "\n \n");
}

}
void feedingTime()
{
for(int i=0;i<numOfAnimals;i++)
{
zooanimals[numOfAnimals].talk();
}

}



}
public class main
{
    public static void main(String[] args)
    {
	Zoo z1= new Zoo();
        Tiger t1 = new Tiger("Simba", 5, "TIGER");
	z1.addAnimal(t1);
for(int i=0;i<3;i++){
 Scanner in = new Scanner ( System.in );
        System.out.println ( "1) Add an Animal \n2) Display all the animals 2\n3) Option 3 Display Name and Age of Animal of a selected Type" );
    System.out.print ( "Selection: " );

switch ( in.nextInt() ) {
      case 1:
        System.out.println ( "You picked option 1" );
        System.out.println ( "What type of animal you want to create? \n PRESS 1 for TIGER \n PRESS 2 for LION" );
 Scanner in0 = new Scanner ( System.in );
if( in0.nextInt()==1)
{	
System.out.println ( "Enter his name and age: " );
Scanner in1 = new Scanner ( System.in );
Tiger t2= new Tiger(in1.nextLine(),in1.nextInt(),"TIGER");
z1.addAnimal(t2);
}
else if( in0.nextInt()==2)
{
System.out.println ( "Enter his name and age: " );
Scanner in1 = new Scanner ( System.in );
Lion l1= new Lion(in1.nextLine(),in1.nextInt(),"LION");
z1.addAnimal(l1);
}
	break;
      case 2:
        System.out.println ( "You picked option 2" );
	z1.displayAnimals();
        break;
      case 3:
        System.out.println ( "You picked option 3" );
	z1.displayAnimalsNameAge();
        break;
      default:
        System.err.println ( "Unrecognized option" );
        break;
    }


}
    }


}
