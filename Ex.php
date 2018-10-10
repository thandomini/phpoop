<?php

/*use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;

$thando = new Person('Thando Mini');

$staff = new Staff([$thando]);

$thandotec = new Business($staff);

$thandotec->hire(new Person('Noncedo Mini'));

var_dump($thandotec->getStaffMembers());
*/
$registration = new \Acme\RegisterUser();
$authController = new \Acme\AuthController($registration);

$authController->userRegisteredSuccessfully();