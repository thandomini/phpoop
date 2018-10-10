<?php

namespace Acme\Users;

class Person
{
	private $name;
	private $age;

	/**
	 * Person constructor.
	 * @param $name
	 */
	public function __construct($name)
	{
		$this->name = $name;
	}

	/**
	 * @return int
	 */
	public function getAge()
	{
		return $this->age;
	}

	/**
	 * @param $age
	 */
	public function setAge($age)
	{
		if( $age < 18 )
		{
			throw new Exception("Person is not old enough");
		}
		$this->age = $age;
	}
}