<?php
class Calculator
{
	public function __construct()
	{
		echo "construct";
	}
	
	public function add($a, $b)
	{
		return $a + $b;
	}
	
	public function subtract($a, $b)
	{
		return $a - $b;
	}
}