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
                
                if($_FILES){ 
                print_r($_FILES); 
                echo "<br>Filename: " . $_FILES['file']['name']."<br>"; 
                echo "Type : " . $_FILES['file']['type'] ."<br>"; 
                echo "Size : " . $_FILES['file']['size'] ."<br>"; 
                echo "Temp name: " . $_FILES['file']['tmp_name'] ."<br>"; 
                echo "Error : " . $_FILES['file']['error'] . "<br>"; 
                }else{ 
                    echo "Upload a File";
                } 
                
                ?>            
            </div> 
        </div> 
     
    </body> 
     
     
    </html> 