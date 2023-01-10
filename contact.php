<?php
$name= $_POST['name'];
$email= $_POST['email'];
$contact= $_POST['contact'];
$message= $_POST['message'];

$db =mysqli_connect("localhost","root","","ems");
$sql="insert into contactus values('".$name."','".$email."','".$contact."','".$message."') ";
$db->query($sql);
echo "Submitted Successfully";

?>