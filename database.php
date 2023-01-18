<?php

$conn= mysqli_connect("localhost", "root", "", "portfolio");

if(!$conn){

    // if any connection error then display error and terminate the program
    echo "Connection error...!";

}
$Name=$_POST['Name'];
$email=$_POST['email'];
$message=$_POST['Message'];


if($Name!="" && $email!=="" && $message!==""){
$sql="Insert into contact (Name,email,Message) values ('$Name','$email','$message')";
$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "error: ",mysqli_error($conn);
    exit;
}
echo "Registered Successfully";
header("location:about.php");
mysqli_close($conn);


}
?>