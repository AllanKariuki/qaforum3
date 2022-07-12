<?php
include("db_connect.php");
$sender_id=$_GET["sender_id"];
$replier_id=$_GET["replier_id"];
$question_id=$_GET["question_id"];
$reply_msg=$_GET["reply_msg"];

$datee=date("Y/m/d");
$timee=date("h:i:sa");

$sql="INSERT INTO replies (sender_id,question_id,replier_id,reply,datee,timee) VALUES('$sender_id','$question_id','$replier_id','$reply_msg','$datee','$timee')";
$query=mysqli_query($connect,$sql);
?>