<?php 
$server='localhost';
$username='root';
$password='password';
$database='jobs';

$conn = mysqli_connect('localhost', 'root', 'password', 'jobs');

// if($conn->connect_error){
//     echo "<script>alert('Connection Failure')</script>";
// }
// else{
//     echo "<script>alert('Connection Successfull')</script>";
// }
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$error=array();
if(empty($fname)){
    $error['f'] = "This Fiels can't be Empty! Fill the Details";
}
if(empty($lname)){
    $error['l'] = "This Fiels can't be Empty! Fill the Details";
}
if(empty($email)){
    $error['e'] = "This Fiels can't be Empty! Fill the Details";
}
if(empty($phone)){
    $error['p'] = "This Fiels can't be Empty! Fill the Details";
}
if(empty($password)){
    $error['ps'] = "This Fiels can't be Empty! Fill the Details";
}
if(count($error)==0){
    $sql = "INSERT INTO `users`(`Firstname`, `Lastname`, `Email`, `Phone`, `Password`) VALUES('$fname','$lname','$email','$phone','$password')"; 
    $res = mysqli_query($conn, $sql);
    
    if($res){
    // echo "Records inserted into database!";
    echo "<script> alert('Done'); </script>";
    header("location:login.php");
    }
     else{
        echo "<script> alert('Failed to Register!'); </script>";
        header("location:login.php");
    }
    mysqli_close($conn);
}

}
session_start();

if(isset($_POST['Login'])){
$email=$_POST['email'];
$password=$_POST['password'];

$query= "SELECT 'Email', 'Password' FROM `users` WHERE 'Email'='$email' AND 'Password'='$password'";
$result= mysqli_query($conn, $query);
$count= mysqli_num_rows($result);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
if(mysqli_num_rows($result)==1){
    header("location:index.php");
}
else{
    echo "<script>alert('Invalid Email or Password');</script>";
}
mysqli_close($conn);
}

if(isset($_POST['post'])){
    $cname=$_POST['cname'];
    $job=$_POST['job'];
    $position=$_POST['position'];
    $skills=$_POST['skills'];
    $ctc=$_POST['ctc'];
    
    
    $sql = "INSERT INTO `jobs`(`Company Name`, `Job Description`, `Position`, `Skills`, `CTC`) VALUES ('$cname','$job','$position','$skills','$ctc')"; 
    $res = mysqli_query($conn, $sql);
     if($res){
     echo "<script>alert('Done');</script>";
     }
    //  else{
    //     echo "Error inserting database";
    // }
    mysqli_close($conn);
    }

    if(isset($_POST['Apply'])){
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $cname=$_POST['cname'];
        $qualification=$_POST['qualification'];
        $ctc=$_POST['ctc'];
        $sql = "INSERT INTO `candidates`(`Name`, `Phone No`, `Company Name`, `Qualification`, `CTC`) VALUES ('$name','$phone','$cname','$qualification','$ctc')"; 
        $res = mysqli_query($conn, $sql);
        if($res){
        // echo "Records inserted into database!";
        header("location:index.php");
        } 
         else{
            echo "Error inserting database";
        }
        mysqli_close($conn);
        }
