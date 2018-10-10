<?php namespace Acme;

interface ResponseToUserRegistration
{
	public function userRegisteredSuccessfully();
	public function userRegisteredFailed();
}