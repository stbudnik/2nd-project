<?php

$uname = filter_var($_POST['uname'], FILTER_SANITIZE_EMAIL);
$pwd = filter_var($_POST['pwd'], FILTER_SANITIZE_STRING);

//echo "username: " . $uname . "<br>";
//echo "password: " . $pwd;

include 'api.php';

if (login_check($uname, $pwd))
    header("Location: School.php");
else // uname or pwd error
{
    echo "<script language=\"JavaScript\">\n";
    echo "alert('Username or Password are incorrect!');";
    echo "window.location='../index.html'";
    echo "</script>";
}