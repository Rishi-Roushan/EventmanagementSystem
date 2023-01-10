<?php
$email= $_POST['email'];
$pass= $_POST['pass'];

$db =mysqli_connect("localhost","root","","ems");
$sql = "SELECT * FROM register WHERE email = '{$email}' and pass ='{$pass}'";

$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);

if ($row['email'] == $email  &&  $row['pass'] == $pass) 
    {
        echo "Login Successful welcome " ,$row['uname'] ;
        header ("Location:loginpage.php");
        session_start();
        $_SESSION["uname"]=$row['uname'] ;
        $_SESSION["email"]=$row['email'] ;
    }
 else {
    echo "invalid details";
     }
    
     ?>