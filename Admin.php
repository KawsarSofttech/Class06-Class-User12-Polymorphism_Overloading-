<?php

include "User.php";
// php does not support Overloading
<?php


class Admin extends User{

	public function greet()
	{
		echo "I am from Admin<br>";
	}

	public function greet($name)
	{
		echo "I am from Admin<br>";
	}

	public function greet($name,$last name)
	{
		echo "I am from Admin<br>";
	}


}



?>