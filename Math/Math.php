<?php
//
//class Math
//{
//	public static function add(...$nums)
//	{
//		return array_sum($nums);
//	}
//
//}
//
//
//echo Math::add(1,2,3); demo

//demonstrating when to use statics and when not to
/*class Person
{
	public $age = 1;

	public function haveBirthday()
	{
		$this->age += 1;
	}

	public function age()
	{
		return $this->age;
	}
}

$joe = new Person();

$joe->haveBirthday();
$joe->haveBirthday();

echo $joe->age();

$jane = new Person();
$jane->haveBirthday();

echo $jane->age();
*/

//class BankAccount
//{
//	const TAX = .09;
//}
//
//echo BankAccount::TAX;

// making use of interfaces
//************************************************************************************************

/*interface Logger
{
	public function execute($message);
}

class LogToFile implements Logger
{
	public function execute($message)
	{
		var_dump('log the message to a file: '.$message);
	}
}

class LogToDatabase implements Logger
{
	public function execute($message)
	{
		var_dump('log the message to a database'.$message);
	}
}

class UsersController
{
	protected $logger;
	public function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}

	public function show()
	{
		$user = 'Joe Doe';

		// log this information

		$this->logger->execute($user);
	}
}

$controller = new UsersController(new LogToDatabase());

$controller->show();
*/
//**********************************************************************************************

/*interface CastToJson
{
	public function toJson();
}

class User implements CastToJson
{
	public function toJson()
	{
		// TODO: Implement toJson() method.
	}
}

class Collection implements CastToJson
{
	public function toJson()
	{
		// TODO: Implement toJson() method.
	}
}
*/

/*interface Filterable
{
	public function filter();
}

class Favorited implements Filterable
{
	public function filter()
	{

	}
}

class Unwatched implements Filterable
{
	public function filter()
	{

	}
}

class Difficulty implements Filterable
{
	public function filter()
	{

	}
}
*/

//interface Provider
//{
//	public function authorize();
//}
//
//function login(Provider $provider)
//{
//	$provider->authorize();
//}
//************************************** END OF INTERFACES********************************************************

//************************************** START OF ABSTRACT CLASSES*******************************************************

interface Provider
{
	public function getAuthorizationUrl();
}

abstract class AbstractProvider
{
	protected function related()
	{

	}
}

class FacebookProvide implements Provider
{
	public function getAuthorizationUrl()
	{
		return '';
	}
}

// self ammendment, I decided to use boththe interface as well as the implemented class for this one.
class TwitterProvide extends AbstractProvider implements Provider
{
	public function getAuthorizationUrl()
	{
		return '';
	}
}