<?php namespace Acme;

class AuthController implements ResponseToUserRegistration
{

	protected $registration;

	// consgtructor injection (when referenced in multiple places within the code)
	public function __construct(RegisterUser $registration)
	{
		$this->registration = $registration;
	}

	// method injection (when referenced say in a single/controller method)
	public function register(RegisterUser $registration)
	{
		$this->$registration->execute([], $this);
	}

	public function userRegisteredSuccessfully()
	{
		var_dump('created successfully redirect somewhere');
	}

	public function userRegisteredFailed()
	{
		var_dump('created unsuccessfully redirect to the registration form');

	}
}