<?php

if  (isset($_POST['submit'])) {
$name =$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$message =$_POST['message'];

$mailto="kgankim@dvs-it.co.za";
$headers ="From: ".$email;
$txt= "You have Mail from 7Chats Website".$name.".\n\n".$message;
mail($mailto,,$txt,$headers,$phone);
header("Location:index.php?mailsend")

}