<?php
use App\User;

equire_once(‘User.php’);

class UserTest extends PHPUnit_Framework_TestCase {
	
	public function setUp(){}
	public function tearDown(){}

	public function testUserName(){
		// test pour s’assurer que l’objet à un nom valide
		$user= User::creat();
		$userName = ‘id2’;
		$user = new User($userName);
		$this->assertTrue($user->getUserName() !== false);
	}
}
?>