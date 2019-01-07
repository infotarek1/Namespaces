<?php
/**
 * Inheritance
 */
class UserData{
	public $user;
	public $userid;
	function __construct($userName, $userId)
	{
		$this->user = $userName;
		$this->userid = $userId;
	}
	public function display(){
        echo "User name is {$this->user} and User id is {$this->userid}";
	}
}

class Admin extends UserData
{
	public $level;

	public function display(){
        echo "User name is {$this->user} and User id is {$this->userid} and user level is {$this->level}";
	}
}
$user = "Mamun";
$id = "25";
$userData = new UserData($user,$id);
$userData->display();
echo "<br>";
$user = "Admin";
$id ="1";
$admin = new Admin($user,$id);
$admin->level = "Administor";
$admin->display();
?>