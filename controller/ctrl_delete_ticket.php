<?php
include 'ctrl_db_connection.php';
session_start();
$connection= OpenCon();

$query= "DELETE FROM ticket WHERE id='" . $_GET["ticket_id"] . "'";
if (mysqli_query($connection, $query))


{ header('Location: /task1/tickets_list_view.html');

} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
CloseCon($connection);