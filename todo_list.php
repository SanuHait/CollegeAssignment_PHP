<?php 

require('fuck.php');
//delete data from table
$id = $row["id"];

$sql = "DELETE FROM todo_list WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Task deleted successfully";
} else {
    echo "Error deleting task: " . $conn->error;
}
$locationPage="fuck.php";
//$msg="Record not found";
header("location: $locationPage");

?>