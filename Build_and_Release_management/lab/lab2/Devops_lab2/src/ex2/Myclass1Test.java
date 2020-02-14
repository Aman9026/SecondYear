package ex2;

import static org.junit.jupiter.api.Assertions.*;

import org.junit.jupiter.api.Test;

class Myclass1Test {

	@Test
	void test() {
		
		Myclass1 ob = new Myclass1();
		assertEquals(19,ob.sum(3,7,9));
	}

}
