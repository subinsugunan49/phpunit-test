<?php 
use PHPUnit\Framework\TestCase;
/**
 * First Unit Test with phpunit 
 */
class FirstTest extends TestCase
{
	
	/**  
		* Test Case 1 Wth assertTrue
 		* assertTrueexpecting the value true,
 		*/
	
	public function testMultiplicationTwoNumber()
	{
		$this->assertTrue(true); 
	}
	/**

	*/
	public function testmultiplication_two_number()
	{
		$a = 5;
 		$b = 6;
 		$c = 5 * 6;

		$this->assertEquals($c, 30); 
	}
	/**
	 *Removing the test action prefix from function Name adding@test
	  @test 

	*/
    public function multiplication_two_number()
	{
		$a = 5;
 		$b = 6;
 		$c = 5 * 6;

		$this->assertEquals($c, 30);  //variable ,excpecting
	}

	
}
?>