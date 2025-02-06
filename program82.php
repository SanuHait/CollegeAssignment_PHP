<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>
    <form action="program82b.php" method="post">
        Task name:<input type="text" name="tName" required><br>
        Date:<input type="date" name="date" required><br>
        Description:<input type="text" name="description" required><br>
        <button type="submit" name="operation"value="new_task">Submit</button>

    </form>
    <?php
        if(!empty($_GET['message'])){
            $message = $_GET['message'];
            echo $message;
        }
    ?>
</body>
</html>