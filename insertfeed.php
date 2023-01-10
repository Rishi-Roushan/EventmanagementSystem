<?php
$email= $_POST['email'];
$desc= $_POST['desc'];

$db =mysqli_connect("localhost","root","","ems");
$sql="insert into feedbacks (email,desp) values('".$email."','".$desc."') ";
$db->query($sql);
echo "submitted successfully";


?>
