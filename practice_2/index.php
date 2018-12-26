<?php
include 'code.php';
include 'database.php';

$obj1 = new \code\A;
print_r($obj1);
echo "</br>";
$obj2 = new \database\A;
print_r($obj2);

echo "</br></br>";
$fun1 = \database\do_something();

echo "</br>";
$fun2 = \code\do_something();

?>