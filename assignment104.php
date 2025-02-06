<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
crossorigin="anonymous"> 
    <title>Php - Sum of the Individual Digits</title> 
</head> 
 
<body> 
     
    <div class="container p-3"> 
        <div class="row p-1 justify-content-md-center">Php - File INFROMATION</div> 
        <div class="row justify-content-md-center"> 
            <div class="col-md-auto"> 
 
                <form action="" method="post" enctype="multipart/form-data"> 
                    <div class="p-1"> 
                    <input type="file" name="file"> 
                    </div> 
                    <div class="p-1"><input type="submit" value="Submit"></div> 
                </form> 
 
            </div> 
        </div> 
        <div class="row justify-content-md-center"> 
           
            <?php              
               if(isset($_FILES['file'])){ 
                print_r($_FILES); 
                echo "<br>Filename: " . $_FILES['file']['name']."<br>"; 
                echo "Type : " . $_FILES['file']['type'] ."<br>"; 
                echo "Size : " . $_FILES['file']['size'] ."<br>"; 
                echo "Temp name: " . $_FILES['file']['tmp_name'] ."<br>";
                echo "Error : " . $_FILES['file']['error'] . "<br>"; 
            } 
         ?>         
         <?php 
         if(isset($_FILES['file'])){ 
             $errors= array(); 
             $file_name = $_FILES['file']['name']; 
             $file_size = $_FILES['file']['size']; 
             $file_tmp = $_FILES['file']['tmp_name']; 
             $file_type = $_FILES['file']['type'];                 
             $file_ext=@strtolower(end(explode('.',$file_name)));       
             $extensions= array("jpeg","jpg","png");       
            
             if(in_array($file_ext,$extensions)=== false){ 
                 $errors[]="extension not allowed, please choose a JPEG or PNG file."; 
             }       
             // if($file_size > 2097152) { 
             //     $errors[]='File size must be excately 2 MB'; 
             // }     
             if(file_exists("upload/".$file_name)){ 
                 $errors[]='A File With The Same Name Already Exists'; 
             }   
             if(empty($errors)==true) { 
                 move_uploaded_file($file_tmp,"upload/".$file_name); 
                 echo "Success"; 
             }else{ 
                 print_r($errors); 
             } 
         } 
         ?> 
 
     </div> 
 </div> 

</body> 


</html>