<?php
// php does not support Overloading
include "Admin.php";
$admin = new Admin();
$admin->greet();
$admin->greet("Shirin");
$admin->greet("Shirin","Farhad");
$User = new User();
$User->greet();


 ?>
