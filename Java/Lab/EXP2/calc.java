public class calc
{
	public static void main(String args[])
	{
		int num1=Integer.parseInt(args[0]),num2=Integer.parseInt(args[2]),answer=0;
String operation = args[1];
			if(operation.equals("+"))
			{
				answer=num1+num2;
			}
			else if(operation.equals("-"))
			{
				answer=num1-num2;
			}
			else if(operation.equals("*"))
			{	//provide the input as java calc 2 '*' 3 The asterisk symbol is considered wild card character by the shell
				answer=num1*num2;
			}
			else if(operation.equals("/"))
			{
				answer=num1/num2;
			}
		System.out.println(answer);
	}
}
