<?php
include 'DBconnection.php';
session_start();
$connection= OpenCon();

$query= "DELETE FROM ticket WHERE id='" . $_GET["ticket_id"] . "'";
if (mysqli_query($connection, $query))


{ header('Location: TicketsList.html');

} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
CloseCon($connection);