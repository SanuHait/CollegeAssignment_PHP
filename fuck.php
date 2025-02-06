<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
<h2>Add New Task</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="hidden" name="action" value="insert">
        Task Description: <input type="text" name="task_des"><br>
        Task: <input type="text" name="task"><br>
        Status: <input type="text" name="status"><br>
        Date: <input type="date" name="date"><br>
        <input type="submit" name="submit" value="Add Task">
    </form>
    <?php 
//create database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test3";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
    echo "Connected successfully";
}
//create table
$sql = "CREATE TABLE IF NOT EXISTS todo_list (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    task_des TEXT NOT NULL,
    task TEXT NOT NULL,
    status VARCHAR(200) NOT NULL,
    date DATE NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
//display table
$sql = "SELECT * FROM todo_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Task Description</th><th>Task</th><th>Status</th><th>Date</th><th>Actions</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" .$row["task_des"]."</td><td>".$row["task"]."</td><td>".$row["status"]."</td><td>".$row["date"]."</td><td> 
        <a href='todo_list.php?action=delete&id=".$row["id"]."' value='".$row["id"]."'>Delete</a></td></tr>
        ";
    }
}

//insert table
if(isset($_POST['submit']))
{
    $action = $_POST["action"];
    if($action=='insert')
    {
        $task_des = $_POST["task_des"];
        $task = $_POST["task"];
        $status = $_POST["status"];
        $date = $_POST["date"];

        $sql = "INSERT INTO todo_list (task_des, task, status, date) VALUES ('$task_des', '$task', '$status', '$date')";

        if ($conn->query($sql) === TRUE) {
            echo "New task added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
}

    ?>
    
</body>
</html>