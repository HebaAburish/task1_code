<?php



function OpenCon()
{
    $dbUserName = "task1";
    $dbPassword="task1";
    $dbServer="localhost";
    $dbName="users";
    $conn = new  mysqli($dbServer, $dbUserName, $dbPassword, $dbName)or die("Connect failed: %s\n". $conn -> error);

    return $conn;
}

function CloseCon($conn)
{
    $conn -> close();}
