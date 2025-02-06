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
        Enter second number:<input type="number" name="num2" id=""><br>
        Enter third number:<input type="number" name="num3" id=""><br>
        <button type="submit">MAX</button>
    </form>
    <?php 
    if($_POST){
        $num1=&$_POST['num1'];
        $num2=&$_POST['num2'];
        $num3=&$_POST['num3'];
        $max;
        $max=$num1;
        if($max<$num2){
            $max=$num2;
        }
        if($max<$num3){
            $max=$num3;
        }
        echo "Max number is $max";
    }
    ?>
</body>
</html>