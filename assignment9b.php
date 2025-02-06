<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") { 
     // Server-side validation 
     $fullName = $_POST["fullName"]; 
     $email = $_POST["email"]; 
     $phone = $_POST["phone"]; 
     $address = $_POST["address"]; 
     $resume = $_POST["resume"]; 
  
     $errors = []; 
  
     if (empty($fullName)) { 
         $errors[] = "Full Name is required."; 
     } 
  
     if (empty($email)) { 
         $errors[] = "Email is required."; 
     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
         $errors[] = "Invalid email format."; 
     } 
  
     if (empty($phone)) { 
         $errors[] = "Phone is required."; 
     } elseif (!preg_match("/^\d{10}$/", $phone)) { 
         $errors[] = "Invalid phone number (10 digits only)."; 
     } 
  
     if (empty($address)) { 
         $errors[] = "Address is required."; 
     } 
  
     if (empty($resume)) { 
         $errors[] = "Resume URL is required."; 
     } 
  
     // Display errors or success message 
     if (!empty($errors)) { 
         echo "<h2>Error</h2>"; 
         foreach ($errors as $error) { 
             echo "<p>$error</p>"; 
         }
        } else { 
            echo "<h2>Registration Successful</h2>"; 
            echo "<p><strong>Full Name:</strong> $fullName</p>"; 
            echo "<p><strong>Email:</strong> $email</p>"; 
            echo "<p><strong>Phone:</strong> $phone</p>"; 
            echo "<p><strong>Address:</strong> $address</p>"; 
            echo "<p><strong>Resume URL:</strong> $resume</p>"; 
            } 
            } else { 
            // Handle invalid access 
            echo "Invalid access."; 
            } 
            ?> 
</body>
</html>