<?php

if(isset($_POST['submit'])) {
    $name= $_POST['name'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $city= $_POST['city'];

    $con = mysqli_connect('localhost','root','','stud');

    $sql = "insert into student(name,email,mobile,city)values('$name','$email','$mobile','$city')";
    
    mysqli_query($con,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="#" method=post>
    <h1>REGISTRATION FORM</h1>
    Name: <input type="text" name="name" ><br>
    Email: <input type="text" name="email" ><br>
    Mobile: <input type="text" name="mobile" ><br>
    City: <input type="text" name="city" ><br>
    <input type=submit name="submit" value=show>
    </form>
</body>
</html>