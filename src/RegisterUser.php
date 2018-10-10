<?php namespace Acme;

class RegisterUser
{
	public function execute(aray $data, ResponseToUserRegistration $listener)
	{
		var_dump('Registering the user');

		$listener->userRegisteredSuccessfully();
	}


}