<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Digital clock</h1></center>
    <?php
    header("refresh:1");
     $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
     echo "<center><h1>".$date->format(' H:i:s')."</h1></center>"; 
    ?>
</body>
</html>