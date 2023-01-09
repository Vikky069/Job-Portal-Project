<?php
include 'connect.php' 

session_start();
if(isset($_POST['Login'])){
$email=$_POST['email'];
$password=$_POST['password'];

$query= "SELECT *FROM users WHERE 'Email'='$email' AND 'Password'='$password'";
$result= mysqli_query($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
if($row==1){
    header("location:index.php");
}
}
?>