

import java.util.Scanner;

class Account
{
    String customerName;
    double accountNumber;
    String type;
    double balance;

    void input()
    {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter the customer's name: ");
        customerName = sc.nextLine();
        System.out.print("Enter the current balance: ");
        balance = sc.nextInt();
    }

    void deposit()
    {
        int amount;
        Scanner sc2 = new Scanner(System.in);
        System.out.print("Enter the amount to be deposited: ");
        amount = sc2.nextInt();
        balance += amount;
    }

    void display()
    {
        System.out.println("\nCustomer Name: " + customerName+ "\nAccount Number: " + accountNumber+"\nAccount Type: " + type+"\n Current Balance : " + balance);
    }
}

class sav_acct extends Account
{
    int interest;
    sav_acct()
    {
        type = "Savings";
        accountNumber += 105100;
    }
    int compoundInterest()
    {
        int time,rate;
        rate = 10;
        Scanner sc3 = new Scanner(System.in);
        System.out.print("Enter time(in years) since deposited: ");
        time = sc3.nextInt();
        interest = (int) ((balance * (Math.pow(1 + rate / 100, time))) - balance);
        return interest;
    }

    void updateBalance()
    {
        balance += compoundInterest();
    }

    void withdrawl()
    {
        int amount;
        Scanner sc4 = new Scanner(System.in);
        System.out.print("Enter amount to withdraw : ");
        amount = sc4.nextInt();
        if (balance>amount)
        {
            balance -= amount;
        }
        else
        {
            System.out.println("Error. Contact Your Branch.");
        }
    }
}

class cur_acct extends Account
{
     int chequeBook;
     int penalty;

    cur_acct()
    {
        type = "Current";
        accountNumber += 106200;
    }

    boolean minimumBalance()
    {
        if (balance <= 2000)
        {
            int serviceCharge = 125;
            balance = balance - serviceCharge;
            System.out.println("Service Charge deducted from account due to low balance");
return false;     
   }
        else
        {
            System.out.println("No Extra Charge");
        }
        return true;
    }

    void withdrawl()
    {
        int amount;
        Scanner sc5 = new Scanner(System.in);
        System.out.print("Enter amount to withdraw : ");
        amount = sc5.nextInt();
        if(minimumBalance()== true)
        {
            if (balance >= amount)
            {
                balance -= amount;
            }
        }
        else
        {
            System.out.println("ERROR. Contact your Branch.");
        }
    }
}

public class Bank
{
    public static void main(String[] args)
    {
        cur_acct a1 = new cur_acct();
        a1.input();
        a1.display();
        a1.deposit();
        a1.display();
        a1.withdrawl();
        a1.display();
System.out.println("\n \n");
        sav_acct a2 = new sav_acct();
        a2.input();
        a2.display();
        a2.withdrawl();
        a2.display();
    }
}
