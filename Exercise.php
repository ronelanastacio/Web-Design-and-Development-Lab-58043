<html>
<head>
<title>Exercise: Student's Grade Evaluation</title>
<body align=center>
<h1>

<?php
//Declaration of Student's Grade
$grade = 90;

//if grade is greater than or equal to 70
	if ($grade >= 70)
	{
		echo "$grade: PASSED";
	}
//if grade is greater than or equal to 60
	else if ($grade >= 60)
	{
		echo "$grade: REMEDIAL";
	}
//grade is less than 60
	else
	{
		echo "$grade: FAILED";
	}
echo "<br>";
$grades = "69";
switch ($grades)
{
	case "90";
	{
		echo "$grades: PASSED";
		break;
	}
	case "69";
	{
		echo "$grades: REMEDIAL";
		break;
	}
	case "59";
	{
		echo "$grades: FAILED";
		break;
	}
	default;
	{
		echo "No Grade";
	}
}			
echo"<br>";
$studentgrade = 59;
	echo $studentgrade <= 60? "$studentgrade: FAILED" :"$studentgrade: PASSED";
?>
</h1>
</body>

</head>

</html>