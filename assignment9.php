<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>CV Registration Form</title> 
    <style> 
        .error { 
            color: red; 
        } 
    </style> 
</head> 
<body> 
 
<h2>CV Registration Form</h2> 
 
<form action="assignment9b.php" method="post" onsubmit="return validateForm()"> 
    <label for="fullName">Full Name:</label> 
    <input type="text" id="fullName" name="fullName" required> 
    <span class="error" id="fullNameError"></span><br> 
 
    <label for="email">Email:</label> 
    <input type="email" id="email" name="email" required> 
    <span class="error" id="emailError"></span><br> 
 
    <label for="phone">Phone:</label> 
    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required> 
    <span class="error" id="phoneError"></span><br> 
 
    <label for="address">Address:</label> 
    <textarea id="address" name="address" rows="4" required></textarea> 
    <span class="error" id="addressError"></span><br> 
 
    <label for="resume">Resume URL:</label> 
    <input type="url" id="resume" name="resume" required> 
    <span class="error" id="resumeError"></span><br> 
 
    <input type="submit" value="Submit"> 
</form> 
 
<script> 
    function validateForm() { 
        var fullName = document.getElementById("fullName").value; 
        var email = document.getElementById("email").value; 
        var phone = document.getElementById("phone").value; 
        var address = document.getElementById("address").value; 
        var resume = document.getElementById("resume").value; 
 
        var fullNameError = document.getElementById("fullNameError"); 
        var emailError = document.getElementById("emailError"); 
        var phoneError = document.getElementById("phoneError"); 
        var addressError = document.getElementById("addressError"); 
        var resumeError = document.getElementById("resumeError"); 
 
        fullNameError.innerHTML = emailError.innerHTML = phoneError.innerHTML = 
addressError.innerHTML = resumeError.innerHTML = ""; 
 
        var isValid = true; 
 
        if (fullName === "") { 
            fullNameError.innerHTML = "Full Name is required."; 
            isValid = false; 
        } 
 
        if (email === "") { 
            emailError.innerHTML = "Email is required."; 
            isValid = false; 
        } else if (!isValidEmail(email)) { 
            emailError.innerHTML = "Invalid email format."; 
            isValid = false; 
        } 
 
        if (phone === "") { 
            phoneError.innerHTML = "Phone is required."; 
            isValid = false; 
        } else if (!isValidPhone(phone)) { 
            phoneError.innerHTML = "Invalid phone number (10 digits only)."; 
            isValid = false; 
        } 
 
        if (address === "") { 
            addressError.innerHTML = "Address is required."; 
            isValid = false; 
        } 
 
        if (resume === "") { 
            resumeError.innerHTML = "Resume URL is required."; 
            isValid = false; 
        } 
 
        return isValid; 
    } 
 
    function isValidEmail(email) { 
        var emailRegex = /^\S+@\S+\.\S+$/; 
        return emailRegex.test(email); 
    } 
 
    function isValidPhone(phone) {
        var phoneRegex = /^\d{10}$/; 
        return phoneRegex.test(phone); 
    } 
</script> 

 
</body> 
</html>