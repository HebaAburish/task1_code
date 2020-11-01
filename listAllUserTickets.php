<?php

include 'DBconnection.php';
session_start();

$connection= OpenCon();
$ids=array([]);
$query= "SELECT id,first_name,last_Name,user_name,email,phon_number,issue_summary,description FROM ticket";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

           array_push($ids,$row["id"]);

    }
    echo  json_encode($ids);
} else {
    echo 0;
}
$result ->close();
CloseCon($connection);