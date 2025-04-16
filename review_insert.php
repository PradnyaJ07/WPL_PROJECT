<?php
$server="localhost";
$db="interior_design";
$user="root";
$password="";
$conn=mysqli_connect($server,$user,$password,$db);
if($conn->connect_error)
{
    die("Connection failed".$conn->connect_error);
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $sql_query="INSERT INTO reviews(name,email,phone,message) VALUES('$name','$email','$phone','$message')";
    if(!$conn->query($sql_query))
        echo"Error:".$conn->error;
    else    
        header("Location: review.html");
}
$conn->close();
?>
