<?php
session_start();
include_once "connection.php";
if(!($_SESSION['token']=='yes')){
    header("Location:login.php");
}
elseif($_SESSION['type']=='admin'){
    header("Location:panel.php");
}
elseif($_SESSION['type']=='student'){
    header("Location:homepage.php");
}