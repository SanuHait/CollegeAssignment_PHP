<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <?php
    print_r($_SERVER['REQUEST_METHOD']);
    if($_POST['operation']=='new_task'){?>
        <br> task name = <?php echo $_POST['tName'];?><br>
        date = <?php echo $_POST['date'];?><br>
        Description = <?php echo $_POST['description']?>
        <a href="program82.php?message=record found">Back</a><br>
    <?php
    
    }
    else{
        $locationPage="program82.php";
        $msg="Record not found";
        header("location: $locationPage?message=$msg");
    ?>

    <?php
    }
    ?>
    
</body>
</html>