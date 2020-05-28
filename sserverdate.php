<?php

session_start();
$errors=array();

//connect to database
$db=mysqli_connect('localhost','root','','registration');

//if the register button is clicked
if (isset($_POST['confirm'])) {

$uname=$_POST['uname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$nameofevent=$_POST['nameofevent'];
$bookingfrom=$_POST['bookingfrom'];
$bookingupto=$_POST['bookingupto'];

if (count($errors)==0) {
$sql = "INSERT INTO user5(username,email,phone,nameofevent,bookingfrom,bookingupto) VALUES ('$uname','$email','$phone','$nameofevent','$bookingfrom','$bookingupto')";
mysqli_query($db,$sql);


}

}
?>
