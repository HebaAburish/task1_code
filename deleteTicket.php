<?php
include 'DBconnection.php';
session_start();
$_GET["ticket_id"]=4;
$connection= OpenCon();

$query= "DELETE FROM ticket WHERE id='" . $_GET["ticket_id"] . "'";
if (mysqli_query($connection, $query)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
CloseCon($connection);