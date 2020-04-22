package sel;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class Web_Command {

public static void main (String args[]) {
		
		System.setProperty("webdriver.chrome.driver","/home/aman/Downloads/chromedriver");
		WebDriver driver = new ChromeDriver();
		String url="http://www.google.com/";
	
		driver.get(url);
		String title = driver.getTitle();
		int titlelength = driver.getTitle().length();

		System.out.println("Title: "+ title);
		System.out.println("Title's length: "+ titlelength);
		
		String actualurl = driver.getCurrentUrl();
		
		if(actualurl.equals("https://www.google.com/?gws_rd=ssl"))
			{System.out.println("Verification Successful: Correct url is opened");}
		else
			{System.out.println("Verification Failed: Correct url is not opened");}
		
		String pgr = driver.getPageSource();
		int pgsrclen= pgr.length();
		System.out.println("Page Source's length: "+ pgsrclen);
		
		driver.close();
		
}
}
