<?php
include 'DBconnection.php';
session_start();
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$userName=$_POST['userName'];
$email=$_POST['email'];
$phoneNumber=$_POST['phoneNumber'];
$issueSummary=$_POST['issueSummary'];
$description=$_POST['description'];
$assigned_emlpoyee=$_POST['assignedEmployee'];
$id=$_POST['id'];
$connection= OpenCon();

$query="UPDATE ticket SET first_name =?,last_Name=?,user_name=?,phon_number=?,email=?,issue_summary=?,description=?,assigned_emlpoyee=? WHERE id=?";
$stmt=$connection->prepare($query);
$stmt->bind_param('ssssssssi', $firstName,$lastName,$userName,$phoneNumber,$email,$issueSummary,$description,$assigned_emlpoyee,$id);
$stmt->execute();
$stmt->close();
CloseCon($connection);
header('Location: TicketsList.html');