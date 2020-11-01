<?php
include 'DBconnection.php';
session_start();
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$userName=$_SESSION['login']['userName'];
$email=$_POST['email'];
$phoneNumber=$_POST['phoneNumber'];
$issueSummary=$_POST['issueSummary'];
$description=$_POST['description'];
$id=$_SESSION['login']['ticket_id'];
$connection= OpenCon();

$query="UPDATE ticket SET ,first_name =?,last_Name=?,user_name=?,phon_number=?,email=?,issue_summary=?,description=?,assigned_emlpoyee=? WHERE id=?";
$stmt=$connection->prepare($query);
$stmt->bind_param('sssssssi', $firstName,$lastName,$userName,$email,$phoneNumber,$issueSummary,$description,$id);
$stmt->execute();
$stmt->close();
CloseCon($connection);