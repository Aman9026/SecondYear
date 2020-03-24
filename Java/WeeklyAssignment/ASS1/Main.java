import java.io.File;
import java.util.Scanner;
import java.lang.*;


class SearchWord extends Thread{
    File  Obj;
    String word;
    Boolean present=false;
    SearchWord(String word, String fileName){
        this.word = word;
        Obj = new File(fileName);    
    }

    public void run(){
        try{
        Scanner sc = new Scanner(Obj);
        while (sc.hasNextLine()) {
        String data = sc.nextLine();
        String sp[] = data.split(" ");
        for(int i=0; i<sp.length ; i++ ){
            if(sp[i].contains(word))
                present = true;
        }
        if(present)
            break;
        } 
if(present){
        System.out.println("The word "+word+" is present");}
else {System.out.println("The word "+word+" is not present ");}
 
    }catch(Exception e){
            System.out.println(e.getMessage());
        }
    }
}

public class Main {
    public static void main(String args[]){
        
        SearchWord t1 = new SearchWord("Java","Doc1.txt");
        SearchWord t2 = new SearchWord("Cpp","Doc2.txt");
        t1.start();
        t2.start();
       
    }
}
