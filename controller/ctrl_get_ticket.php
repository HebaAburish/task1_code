<?php
include 'Ticket.php';
include 'ctrl_db_connection.php';
session_start();

$connection= OpenCon();
$query= "SELECT id,first_name,last_Name,user_name,email,phon_number,issue_summary,description,assigned_emlpoyee FROM ticket where id='" . $_GET["ticket_id"] . "'";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $ticket= new Ticket();
        $ticket->id=$row["id"];
        $ticket->firstName=$row["first_name"];
        $ticket->lastName=$row["last_Name"];
        $ticket->userName=$row["user_name"];
        $ticket->email=$row["email"];
        $ticket->phoneNumber=$row["phon_number"];
        $ticket->issueSummary=$row["issue_summary"];
        $ticket->description=$row["description"];
        $ticket->assigned_emlpoyee=$row["assigned_emlpoyee"];
        echo  json_encode($ticket);
    }


} else {
    echo 0;
}
$result ->close();
CloseCon($connection);