class superclass
{ 
    public void print_accessable() 
    { 
        System.out.println("accessable"); 
    } 
    private void print_unaccessable() 
    { 
        System.out.println("unaccessable"); 
    } 
} 
  
class subclass extends superclass 
{ 
    public void print_subclass() 
    { 
        System.out.println("subclass"); 
    } 
} 
// Driver class 
public class superclassmember 
{ 
    public static void main(String[] args) 
    { 
        subclass g = new subclass(); 
        g.print_accessable(); 
       // g.print_unaccessable(); 
        g.print_subclass(); 
    } 
}
