<?php
include 'ctrl_db_connection.php';

session_start();
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$userName=$_SESSION['login']['userName'];
$email=$_POST['email'];
$phoneNumber=$_POST['phoneNumber'];
$issueSummary=$_POST['issueSummary'];
$description=$_POST['description'];

$connection=openCon();

$query="INSERT INTO ticket (first_name,last_Name,user_name,email,phon_number,issue_summary,description) VALUES (?,?,?,?,?,?,?)";
$stmt=$connection->prepare($query);
$stmt->bind_param('sssssss', $firstName,$lastName,$userName,$email,$phoneNumber,$issueSummary,$description);
$stmt->execute();
$stmt->close();
CloseCon($connection);
header('Location: /task1/tickets_list_view.html');



