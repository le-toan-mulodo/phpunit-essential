<?php 
class CalculatorTest extends PHPUnit_Framework_TestCase
{
	private $calculator_obj;
	public function setUp()
	{
		$this->calculator_obj = new Calculator();
	}
	
	public function testAdd_OK_Valid()
	{
		$this->assertEquals(7, $this->calculator_obj->add(3, 4));	
	}
	
	public function testSubtract_OK_Valid()
	{
		$this->assertEquals(6, $this->calculator_obj->subtract(10, 4));
	}
	
	public function testAdd_Not_Ok_Valid()
	{
		$this->assertNotEquals(6, $this->calculator_obj->add(3, 4));
	}
	
	public function testMockery()
	{
		$mock = Mockery::mock('SomeClass');
		$mock->shouldReceive('getName')
			->once()
			->with('John Doe')
			->andReturn('John Doe');
		$this->assertEquals('John Doe', $mock->getName('John Doe'));
	}
}