<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Chess board </h1>
    <table  border="1px" height="500px" width="500px">
        <?php
        for($row=1;$row<=8;$row++){

        ?>
        <tr >
        <?php
        for($col=1;$col<=8;$col++){

        ?>
        <td bgcolor="<?php echo ($row+$col)%2==0? "#ffffff" : "#000000"; ?>"></td>
        <?php } ?>
            
        </tr>
        <?php  } ?>
    </table>
</body>
</html>