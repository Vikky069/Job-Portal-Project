<?php
$server='localhost';
$username='root';
$password='password';
$database='jobs';

$conn = mysqli_connect('localhost', 'root', 'password', 'jobs');

if($conn->connect_error){
    echo "Connection Error!\n";
}
// else{
//     echo "Database Connected Successfully!\n";
// }
