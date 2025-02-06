<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Document</title> 
</head> 
<body> 
<?php 
$current_dir =__DIR__ ; 
$dir = opendir($current_dir); 
echo "<p>Upload directory is $current_dir</p/>"; 
echo '<p>Directory Listing:</p>'; 
echo '<ul>'; 
while($file = readdir($dir)) 
{ 
echo "<li>".$file."</li>"; 
} 
echo '</ul>'; 
closedir($dir); 
?> 
</body> 
</html> 