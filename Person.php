<?php

class Person
{
	private $name;
	private $age;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getAge()
	{
		return $this->age * 365;
	}

	public function setAge($age)
	{
		if( $age < 18 )
		{
			throw new Exception("Person is not old enough");
		}
		$this->age = $age;
	}
}

//$john = new Person('John Doe');
//$john->setAge(33);
//var_dump($john->getAge());

// second part of the tutorial made use of the following classes
class Business
{
	protected $staff;
	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}

	public function hire(Person $person)
	{
		$this->staff->add($person);
	}

	public function getStaffMembers()
	{
		return $this->staff->members();
	}
}

class Staff
{
	protected $members = [];

	public function __construct($members = [])
	{
		$this->members = $members;
	}

	public function add(Person $person)
	{
		$this->members[] = $person;
	}

	public function members()
	{
		return $this->members;
	}
}

$thando = new Person('Thando Mini');

$staff = new Staff([$thando]);

$thandotec = new Business($staff);

$thandotec->hire(new Person('Noncedo Mini'));

var_dump($thandotec->getStaffMembers());