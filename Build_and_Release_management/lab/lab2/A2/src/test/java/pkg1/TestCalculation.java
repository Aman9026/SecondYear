package pkg1;

import static org.junit.Assert.*;

import org.junit.Test;

public class TestCalculation {

	@Test
	public void test() {
		Calculation ob= new Calculation();
		assertEquals(50,ob.multiply(5, 10));
	}

}
