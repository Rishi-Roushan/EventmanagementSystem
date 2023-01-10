<?php
$id= $_POST['id'];
$img_dir= $_POST['img_dir'];
$event= $_POST['event'];
$venue= $_POST['venue'];
$date= $_POST['date'];
$time= $_POST['time'];
$detail= $_POST['detail'];

 session_start();


$db =mysqli_connect("localhost","root","","ems");
$sql="insert into events values('".$id."','".$img_dir."','". $event."','". $venue."','". $date."','". $time."','". $detail."') ";
$query="SELECT id FROM events WHERE id ='{$id}'";

$result = mysqli_query($db,$query);
$row = mysqli_fetch_array($result);
if ($row['id'] == $id) 
    {

        echo "Invalid Event Id" ;
    }

 else {
    $db->query($sql);
    echo "Event Created" ;

     }


?>
