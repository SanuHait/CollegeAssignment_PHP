<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<form action="" method="post">
<h1>Calculator</h1><br>
First Number:<input name="n1" value="" placeholder="Enter the first number"><br><br>
Second Number:<input name="n2" value="" placeholder="Enter the second number"><br><br>
<select name="oprnd">
    <option value="1">+</option>
    <option value="2">-</option>  
    <option value="3">*</option>
    <option value="4">/</option>
</select>
<button type="submit">Result</button>
</form>

<?php

if($_POST){
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$oprnd=$_POST['oprnd'];
    $ans='';
	if($oprnd=="1"){
		$ans=$num1+$num2;
    }
	else if($oprnd=="2"){
		$ans=$num1-$num2;
    }
	else if($oprnd=="3"){
		$ans=$num1*$num2;
    }
	else if($oprnd=="4"){
		$ans=$num1/$num2;
    }
    echo "The result is: $ans";
}
?>
</body>
</html>