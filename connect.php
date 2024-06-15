<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];

$con = mysqli_connect('localhost','root','', 'form');

if($con) {
    echo "Connected....";
$sql = "insert into data(name,email,mobile,gender)values('$name','$email','$mobile','$gender')";
$result = mysqli_query($con,$sql);

if($result) {
    echo "data inserted successfully...";
}else {
    die(mysqli_error($con));
}
}
else {
    die(mysqli_error($con));
}
}
?>