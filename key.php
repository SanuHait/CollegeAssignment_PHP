<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array key </title>
    <style>
        div{
          border: 2px solid black;  
            height: 200px;
            width: 500px;
        }
        
    </style>
</head>
<body>
    <center><div><br>
    <?php 
    $inputarr=array("apple","mango","lemoan","pineapple");
    ?>
    
    <form action="" class="form" method="post">
        Find key: <input type="text" name="search" id=""><br><br>
        <button type="submit">submit</button>
    </form>
    <?php
    print_r($inputarr);
    ?>
    <br>
    <?php
    if($_POST){
        $search=$_POST['search'];
        print_r(array_keys($inputarr,$search));
    }
    ?>
    </div></center>
</body>
</html>