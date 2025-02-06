<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    Enter first number:<input type="number" name="num1" id=""><br>
    Enter second number:<input type="number" name="num2"><br>
    <button type="submit">swap</button><br>


    </form>
    <?php
     if($_POST){

        $num1= $_POST['num1'];
        $num2= $_POST['num2'];
        echo "Before swapping number1 is: $num1 and number 2 is: $num2 <br>";
        $num1=($num1+$num2)-$num1;
        $num2=($num1+$num2)-$num2;
        echo "After swapping number1 is:$num1 and number2 is: $num2";


     }

    ?>

</body>
</html>