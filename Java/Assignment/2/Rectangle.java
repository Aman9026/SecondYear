public class Rectangle
{
    private double length;
    private double width;
    private double x1, x2, x3, x4, y1, y2, y3, y4;

    Rectangle()
    {
        length = 1.0;
        width = 1.0;
    }

    Rectangle(double length, double width)
    {
        try
        {
            if((length>0.0 && length<20.0) && (width>0.0 && width<20.0))
            {
                this.length = length;
                this.width = width;
            }
            else
            {
                throw new Excep("Select a smaller length and width.");
            }
        }
        catch (Excep exception)
        {
            System.out.println(exception.getMessage());
        }
    }

    Rectangle(double x1, double y1, double x2, double y2, double x3, double y3, double x4, double y4)
    {
        try
        {
            if(((x1>0.0 && x1<20.0) && (y1>0.0 && y1<20.0)) && ((x2>0.0 && x2<20.0) && (y2>0.0 && y2<20.0)) && ((x3>0.0 && x3<20.0) && (y3>0.0 && y3<20.0)) && ((x4>0.0 && x4<20.0) && (y4>0.0 && y4<20.0))){    
           set(x1, y1,x2, y2, x3, y3,x4,y4);
            }
            else
            {
                throw new Excep("Selected coordinated can't be accepted.");
            }
        }
        catch (Excep exception)
        {
            System.out.println(exception.getMessage());
        }
    }

    double getLength()
    {
        return length;
    }

    double getWidth()
    {
        return width;
    }

    void setLength(double length)
    {
        this.length = length;
    }

    void setWidth(double width)
    {
        this.width = width;
    }

    boolean verifyRec()
    {
        x2 -= x1; x3 -= x1; x4 -= x1; y2 -= y1; y3 -= y1; y4 -= y1;
    if(
        (x2 + x3 == x4 && y2 + y3 == y4 && x2 * x3 == -y2 * y3) ||
        (x2 + x4 == x3 && y2 + y4 == y3 && x2 * x4 == -y2 * y4) ||
        (x3 + x4 == x2 && y3 + y4 == y2 && x3 * x4 == -y3 * y4)){return true;}
return false;
    }

    void set(double x1, double y1, double x2, double y2, double x3, double y3, double x4, double y4)
    {
        if(this.verifyRec())
        {
            this.x1 = x1;
            this.y1 = y1;
            this.x2 = x2;
            this.y2 = y2;
            this.x3 = x3;
            this.y3 = y3;
            this.x4 = x4;
            this.y4 = y4;
 System.out.println("rect created");
        }
        else
        {
            System.out.println("not a rect");
        }
    }

    double getArea()
    {
        double area;
        area = length * width;
        return  area;
    }

    double getPerimeter()
    {
        double perimeter;
        perimeter = (2*(length + width));
        return perimeter;
    }

    void displayStatistics()
    {
        System.out.println("Width : " + getWidth() +"\nLength : " + getLength() +"\nPerimeter : " + getPerimeter() +"\nArea : " + getArea());
    }


    public static void main(String[] args)
    {
        Rectangle R1 = new Rectangle(24,7);
        System.out.println("Measures of the rectangle : ");
        R1.displayStatistics();
        R1.setLength(10);
        R1.setWidth(20);
        System.out.println("\nMeasures of the rectangle : ");
        
        R1.displayStatistics();

        Rectangle R2 = new Rectangle(1, 1, 3, 1, 1, 3, 3, 3);
    }
}
class Excep extends Exception
{
    public Excep(String s)
    {
        super(s);
    }
}

