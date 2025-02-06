<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="unit" id="" require>
        <button type="submit">submit</button>
    </form>
 
    <?php 
    if($_POST){
        $unit=$_POST['unit'];
        $bill;
        if($unit<=50){
          $bill=(float)$unit*3.50;   
          echo "Total bill is=$bill";  
        }
        elseif($unit>50 && $unit<=150){
            $bill=(float)50*3.50+(($unit-50)*4.00);   
            echo "Total bill is=$bill";
            
        }
        elseif($unit>150 && $unit<=250 ){
            $bill=(float)50*3.50+100*4+(($unit-150)*5.20);   
            echo "Total bill is=$bill";

        }
        else{
            $bill=(float)50*3.50+100*4+100*5.20+($unit-250)*6.50;   
            echo "Total bill is=$bill";
        }

    }


    ?>
</body>
</html>