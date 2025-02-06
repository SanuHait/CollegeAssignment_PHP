<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Enter a number:<input type="number" name="num" id=""><br>
        <button type="submit">submit</button>
    </form>
    <?php 
    if($_POST){
       

        $number=$_POST['num'];
        if($number!=null){
        $orginal=$number;
        $reversed=0;
        while(floor($number))
        {
            $r=$number % 10;
            $reversed=$reversed*10+$r;
            $number/=10;

        }
        if($orginal==$reversed)
        {
            echo "$orginal is palindrome number";
        }
        else{
            echo "$orginal is not palindrome number";
        }
        }

    }
    ?>
</body>
</html>