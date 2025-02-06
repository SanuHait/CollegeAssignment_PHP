<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Curd operation</h1>
    <form action="curd_operation.php" method="post">
        <input type="text" name="name" placeholder="Enter name"><br><br>
        <input type="text" name="email" placeholder="Enter email"><br><br>
        <input type="text" name="phone" placeholder="Enter phone"><br><br>
        <input type="submit" name="submit" value="submit">
        <?php 
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="test2";
         $conn=new mysqli($servername,$username,$password,$dbname);
         if($conn->connect_error){
                die("Connection Faild:".$conn_error);
         }
         else {
            echo "Connected Successfully";
        
         } 
        $sqlquery="SELECT * FROM infor";
        $result=$conn->query($sqlquery);
        if($result->num_rows>0){
            ?>
        <table><tr><th>Id</th><th>name</th><th>phone</th><th>email</th></tr>
        <?php
         while($row=$result->fetch_assoc()){
             echo "<tr><td>".$row["id"]."</td> "."<td> ".$row["name"]."</td> " ."<td>".$row["phone"]." </td>"."<td>".$row["email"]."</td></tr>";
         }
        echo"</table>";
         }
         else{
             echo "no records found";
         }
        ?>
</body>
</html>