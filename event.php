<?php
$id= $_POST['id'];
$nop= $_POST['nop'];
 session_start();


$db =mysqli_connect("localhost","root","","ems");
$sql="insert into enrolled values('".$id."','".$nop."','". $_SESSION["email"]."') ";
$query="SELECT id FROM events WHERE id ='{$id}'";

$result = mysqli_query($db,$query);
$row = mysqli_fetch_array($result);
if ($row['id'] == $id) 
    {
        $db->query($sql);
        echo "Successfully Enrolled" ;
 
    }

 else {
    echo "Invalid Event Id" ;
     }


?>