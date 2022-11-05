<html>
<head>
<title>Long Quiz 2</title>
</head>
<body align=center>
<h3> Problem 1. Create a PHP program that will perform the following mathematical operations, to produce the required output.</h3>
<?php
$Salary_rate = 600; 
$Salary = 0;
$Taxable_amount = 0;
$Net_pay = 0;

//the product of $Salary_rate multiply by 15 days 
echo "Salary_rate: $Salary_rate<br>";
$Salary = $Salary_rate * 15;
echo "<br>Salary: $Salary<br/>";
//30% of $Salary
$Taxable_amount = .30 * $Salary;
echo "<br>Taxable_amount: $Taxable_amount<br/>";
//the difference of $Salary minus $Taxable_amount
$Net_pay = $Salary - $Taxable_amount;
echo "<br>Net_pay: $Net_pay<br/>";
?>
<h3> <br>Problem 2. Create a PHP program that will add all positive integers from 1-50 using loop statement.</h3>
<?php
$integer = 50;
$i = 1;
$sum = 0;
//sum of all positive integers from 1 to 50
while($i <= $integer) 
{
$sum += $i;
$i++;
}
echo "Sum of all positive integers: $sum";
?>
<br><br>by Ronel Anastacio - WDD 58043

</body>
</html>