<?php

include 'DBconnection.php';
session_start();

$connection= OpenCon();

$query= "SELECT id,first_name,last_Name,user_name,email,phon_number,issue_summary,description FROM ticket";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_Name"]. "<br>";
    }
} else {
    echo "0 results";
}
$result ->close();
CloseCon($connection);