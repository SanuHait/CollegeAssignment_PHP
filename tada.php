<?php
// Create the MySQL table
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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

$conn->close();

// To-do list application

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST["action"])) {
        $action = $_POST["action"];

        switch ($action) {
            case "insert":
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
                break;

            case "delete":
                $id = $_POST["id"];

                $sql = "DELETE FROM todo_list WHERE id = $id";

                if ($conn->query($sql) === TRUE) {
                    echo "Task deleted successfully";
                } else {
                    echo "Error deleting task: " . $conn->error;
                }
                break;

            case "update":
                $id = $_POST["id"];
                $task_des = $_POST["task_des"];
                $task = $_POST["task"];
                $status = $_POST["status"];
                $date = $_POST["date"];

                $sql = "UPDATE todo_list SET task_des = '$task_des', task = '$task', status = '$status', date = '$date' WHERE id = $id";

                if ($conn->query($sql) === TRUE) {
                    echo "Task updated successfully";
                } else {
                    echo "Error updating task: " . $conn->error;
                }
                break;
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        h1, h2 {
            color: #333;
            margin-bottom: 10px;
        }
        form {
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .actions {
            text-align: center;
        }
        .actions form {
            display: inline-block;
            margin: 0 10px;
        }
    </style>

    <h2>Add New Task</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="hidden" name="action" value="insert">
        Task Description: <input type="text" name="task_des"><br>
        Task: <input type="text" name="task"><br>
        Status: <input type="text" name="status"><br>
        Date: <input type="date" name="date"><br>
        <input type="submit" name="submit" value="Add Task">
    </form>

    <h2>View All Tasks</h2>
    <?php
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM todo_list";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Task Description</th><th>Task</th><th>Status</th><th>Date</th><th>Actions</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["task_des"]. "</td><td>" . $row["task"]. "</td><td>" . $row["status"]. "</td><td>" . $row["date"]. "</td><td>
                    <form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>
                        <input type='hidden' name='action' value='delete'>
                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                        <input type='submit' name='delete' value='Delete'>
                    </form>
                </td></tr>";
            }
            echo "</table>";
        } else {
            echo "No tasks found.";
        }

        $conn->close();
    ?>
</body>
</html>

