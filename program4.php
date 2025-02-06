<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Enter a number: <input type="number" name="num" id="">
        <button type="submit">Checked</button>
    </form>

    <?php
    if($_POST){
    $num=$_POST['num'];

     if($num%2==0){
        echo "the number $num is even";

     }
     else{
        echo "the number $num is odd";
     }
    }
    ?>
</body>
</html>