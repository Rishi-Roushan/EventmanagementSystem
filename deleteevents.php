<?php
$id= $_POST['id'];
 session_start();
$db =mysqli_connect("localhost","root","","ems");
$sql="delete from events WHERE id ='{$id}'";
$query="SELECT id FROM events WHERE id ='{$id}'";

$result = mysqli_query($db,$query);
$row = mysqli_fetch_array($result);
if ($row['id'] == $id) 
    {
        $db->query($sql);
        echo "Event Deleted" ;
    }

 else {
       echo "Invalid Event Id" ;
      }


?>