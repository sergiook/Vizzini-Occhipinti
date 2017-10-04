<?php

  error_reporting(E_ALL);
  ini_set( 'display_errors','1');

  session_start();

  $userid =$_REQUEST["useridaccess"];
  $password =$_REQUEST["passwordaccess"];

  echo $userid;



  $host = "localhost";
  $username = "root";
  $password = "";
  $db = "iscrizioni";


  $conn = new mysqli($host,$username,$password,$db);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql ="SELECT `userid`,`password` FROM `iscrizioni`.`iscrizionitab` WHERE `userid` ='$userid'";

  $result = $conn->query($sql);
  if(!$result){
    die("Query sugli utenti fallita!");
  }
  if($result){
    $row = $result->fetch_assoc();
    $usr=$row['userid'];
    $psw=$row['password'];
    if($usr==$userid){
      $_SESSION["username"]=$usr;
      header('Location: index.php');
      exit;
    }
  }
  header('Location:iscrizione.php');
  exit;

?>
