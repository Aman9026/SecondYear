import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.IOException;

class A extends Thread
{
	public void run()
{

 File f1=new File("Doc1.txt"); //Creation of File Descriptor for input file
     
  String[] words=null;  //Intialize the word Array
      FileReader fr = new FileReader(f1);  //Creation of File Reader object
      BufferedReader br = new BufferedReader(fr); //Creation of BufferedReader object
      String s;     
      String input="Java";   // Input word to be searched
int count=0;   //Intialize the word to zero
      while((s=br.readLine())!=null)   //Reading Content from the file
      {
         words=s.split(" ");  //Split the word using space
          for (String word : words) 
          {
                 if (word.equals(input))   //Search for the given word
                 {
                   count++;    //If Present increase the count by one
                 }
          }
      }
      if(count!=0)  //Check for count not equal to zero
      {
         System.out.println("The given word is present for "+count+ " Times in the file");
      }
 else
      {
         System.out.println("The given word is not present in the file");
      }
      
         fr.close();



}

}

class B extends Thread
{
	public void run() 
{


 File f2=new File("Doc2.txt");
  String[] words2=null;  //Intialize the word Array
      FileReader fr2 = new FileReader(f2);  //Creation of File Reader object
      BufferedReader br2 = new BufferedReader(fr2); //Creation of BufferedReader object
      String s2;     
      String input2="Cpp";   // Input word to be searched
int count2=0;   //Intialize the word to zero
      while((s2=br2.readLine())!=null)   //Reading Content from the file
      {
         words2=s2.split(" ");  //Split the word using space
          for (String word2 : words2) 
          {
                 if (word2.equals(input2))   //Search for the given word
                 {
                   count2++;    //If Present increase the count by one
                 }
          }
      }
      if(count2!=0)  //Check for count not equal to zero
      {
         System.out.println("The given word is present for "+count2+ " Times in the file");
      }
 else
      {
         System.out.println("The given word is not present in the file");
      }
      
         fr2.close();



}

}

class C extends Thread
{
	public void run(){




}

}

public class file 
{
   public static void main(String[] args) throws IOException 
   {
	A t1=new A();
	B t2=new B();
	t1.start();
	t2.start();


   }


}
