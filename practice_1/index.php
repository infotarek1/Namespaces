<?php
namespace ID142001;
function tarek(){
	echo "Tarek is called by his teacher";
}
class Person{
	
	function getName(){
		echo "tanvir";
	}
}

namespace ID142002;
function tarek(){
	echo "Tarek is called by his father";
}
class Person{
	
	function getName(){
		echo "tarek";
	}
}


\ID142001\tarek();
echo "</br>";
\ID142002\tarek();

echo "</br></br>";

$obj1 = new \ID142002\Person;
print_r($obj1);
echo "</br>";
$obj1->getName();

echo "</br></br>";

$obj2 = new \ID142001\Person;
print_r($obj2);
echo "</br>";
$obj2->getName();

echo "</br></br>";

use \ID142001\Person as p1;
use \ID142002\Person as p2;

$obj1 = new p1;
$obj2 = new p2;
print_r($obj1);
echo "</br>";
print_r($obj2);


?>