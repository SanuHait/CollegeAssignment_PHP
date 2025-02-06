<?php 
$servername = "your_server_name"; 
$username = "your_username"; 
$password = "your_password"; 
$dbname = "your_database_name"; 
// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname); 
// Check connection 
if ($conn->connect_error) { 
die("Connection failed: " . $conn->connect_error); 
} 
// Add Task 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addTask"])) { 
$taskName = $_POST["taskName"]; 
$taskDescription = $_POST["taskDescription"]; 
$dueDate = $_POST["dueDate"]; 
$sql = "INSERT INTO todo_list (task_name, task_description, due_date) VALUES ('$taskName', 
'$taskDescription', '$dueDate')"; 
if ($conn->query($sql) === TRUE) { 
echo "Task added successfully!"; 
} else { 
echo "Error: " . $sql . "<br>" . $conn->error; 
} 
} 
$sql = "SELECT * FROM todo_list"; 
$result = $conn->query($sql); 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>To-Do List</title> 
</head> 
<body> 
<h2>To-Do List</h2> 
<!-- Add Task Form --> 
<form method="post" action=""> 
<label for="taskName">Task Name:</label> 
<input type="text" name="taskName" required><br> 
<label for="taskDescription">Task Description:</label> 
<textarea name="taskDescription"></textarea><br> 
<label for="dueDate">Due Date:</label> 
<input type="date" name="dueDate"><br> 
<input type="submit" name="addTask" value="Add Task"> 
</form> 
<!-- Display Tasks --> 
<h3>Tasks:</h3> 
<table border="1"> 
<tr> 
<th>ID</th> 
<th>Task Name</th> 
<th>Task Description</th> 
<th>Due Date</th> 
<th>Status</th> 
</tr> 
<?php 
if ($result->num_rows > 0) { 
while ($row = $result->fetch_assoc()) { 
echo "<tr>"; 
echo "<td>" . $row["id"] . "</td>"; 
echo "<td>" . $row["task_name"] . "</td>"; 
echo "<td>" . $row["task_description"] . "</td>"; 
echo "<td>" . $row["due_date"] . "</td>"; 
echo "<td>" . $row["status"] . "</td>"; 
echo "</tr>"; 
} 
} else { 
echo "<tr><td colspan='5'>No tasks found.</td></tr>"; 
} 
?> 
</table> 
</body> 
</html> 
<?php 
// Close connection 
$conn->close(); 
?> 