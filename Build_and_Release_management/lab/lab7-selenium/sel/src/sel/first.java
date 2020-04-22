package sel;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class first{
	
	public static void main (String args[]) {
		
		System.setProperty("webdriver.chrome.driver","/home/aman/Downloads/chromedriver");
		WebDriver driver = new ChromeDriver();
		
		driver.navigate().to("https://tinder.com/app/recs");
		//String btn = drive.find_element(By.XPATH, '//button[./span[@aria-label="like"]]');
	//	driver.findElement(By.name("q")).sendKeys("UPES");
		driver.findElement(By.name("like")).submit();
		//driver.close();
	}
	
}