class cricketpl extends player
{ 
    public int runs;
} 
  
class footballpl extends player
{ 
    public int goals;
} 

class hockeypl extends player
{ 
    public int goals;
} 

class chesspl extends player
{ 
  public int elo;  
} 
  

// Driver class 
public class player 
{ 
public String Name;
public int pl_id;
public void getname()
{
System.out.println("Chess Player: " + Name);
}
    public static void main(String[] args) 
    { 
        player g1 = new player(); 
        g1.Name="Aman";
	chesspl g2 = new chesspl();
	g2.Name="Animesh";
	g2.getname();
    } 
}
