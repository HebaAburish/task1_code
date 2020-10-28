<?php

include 'DBconnection.php';
session_start();

$userName=$_POST['userName'];
$password=$_POST['password'];




$query="SELECT id ,password FROM users where userName=? AND password= ? ";
$connection= OpenCon();
$statementObj = $connection->prepare($query);

$statementObj->bind_param("ss", $userName,$password);
$statementObj->execute();


$statementObj->bind_result($id,$pass);
$statementObj->store_result();

if ($statementObj->num_rows() > 0)
{
    while ($statementObj->fetch())
    {

        if($pass ==$password) {

            $_SESSION['login']['userName']=$userName;
            $_SESSION['login']['password']=$password;
            $_SESSION['login']['id'] = $id;
            header('Location:ticketForm.html');
        }
        else{
            header('Location: login.html');

        }
    }

} else{
      header('Location: login.html');
}

$statementObj->close();
CloseCon($connection);