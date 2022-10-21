<html>
<head><title>My Looping Statements</title></head>
<body>

<?php

echo "While Loop <br>";
// while loop
$fuel = 10;
while($fuel>1)
	{
	/*echo "There's enough fuel";
	break;*/
	echo "There's enough fuel <br>";
	--$fuel;
	} 

echo "<br><br>Do While Loop <br>";
//do while loop

$count = 1;

do
	{
		echo "$count times 12 is ".$count*12 . "<br>";
	}
		while (++$count <=12);
echo "<br><br>";

echo "For Loop <br>";			
//for loop
for ($fuel=10;$fuel>=1;--$fuel)
	{
		echo "There's enough fuel <br>";
	}
echo "<br>";
			
echo "<br> Foreach Loop <br>";			
//Foreach loop
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value)
	{
		echo "$value <br>";
	}
echo "<br><br>";

echo "Break Statement <br>";			
//break statement
	for ($x = 0; $x < 10; $x++)
	{
if ($x == 4)
	{
		break;
	}
		echo "The number is: $x <br>";
	}
echo "<br><br>";
			
echo "Continue Statement <br>";			
//continue statement
for ($x = 0; $x < 10; $x++)
	{
if ($x == 4)
	{
		continue;
	}
		echo "The number is: $x <br>";
	}
echo "<br><br>";

echo "Application 1 <br>";			
//Application 1
for ($x = 0; $x < 11; $x++) 
	{
if ($x == 11) 
	{
		break;
	}
		echo "Hello $x <br>";
	}

echo "<br>";

echo "Application 2 <br>";
//Application 2
//Create a PHP program that displays integer lessthan 10 but not less than 3
$int = 3;

while($int < 10) 
	{
		echo " $int <br>";
		$int++;
	}
?>
</body>
</html>