<?php
$name= $_POST['name'];
$email= $_POST['email'];
$uname= $_POST['uname'];
$contact= $_POST['contact'];
$pass= $_POST['pass'];

$db =mysqli_connect("localhost","root","","ems");
$sql="insert into register values('".$name."','".$email."','".$uname."','".$contact."','".$pass."') ";
$query="SELECT * FROM register WHERE email = '{$email}'";

$result = mysqli_query($db,$query);
$row = mysqli_fetch_array($result);

if ($row['email'] == $email) 
    {
  echo "Already Registered" ;
    }
 else {
    $db->query($sql);
echo "Successfully Registered" ;
     }


?>
