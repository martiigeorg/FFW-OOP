<?php
interface Mammmal
{
	public function talk();
	public function walk();
}
abstract class Person implements Mammmal
{
	protected $name;
	protected $age;
	protected $gender;
	public function __construct($name, $age, $gender)
	{
		$this->name=$name;
		$this->age=$age;
		$this->gender=$gender;
	}
}
abstract class Animal implements Mammmal
{
	private $name;
	private $age;
	private $gender;
	public function __construct($name, $age, $gender)
	{
		$this->name=$name;
		$this->age=$age;
		$this->gender=$gender;
	}
	public abstract function printInfoD();
}
class Dolphin extends Animal
{
	function talk()
	{
		echo "Dolphin can not talk";
		echo "<br/>";
	}
	 function walk()
	{
		echo "Dolphin can not walk";
	}
	public function printInfoD(){
		echo $this->name." ".$this->age;
		echo "<br/>";
	}
	
}
class Student extends Animal
{
	function talk()
	{
		echo "Student can talk";
		echo "<br/>";
	}
	 function walk()
	{
		echo "Student can walk";
		echo "<br/>";
	}
	public function printInfoD(){
		echo $this->name." ".$this->age;
	}
	
}


$objD=new Dolphin("Gosho", 2, "male");

$objD->talk();
$objP=new Student("Pesho", 2, "female");
$objD->walk();
$objP->talk();
$objP->walk();

?>