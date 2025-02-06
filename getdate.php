<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    header("refresh:1");
    $date=getdate();
    foreach($date as $key=>$val){
        echo $key."=".$val."<br>";

    }
    echo "<h1>Today's date:" .$date['mday']. "/".$date['mon']."/".$date['year']."</h1>";
    ?>
</body>
</html>