
<?php
  error_reporting(E_ALL);
  ini_set( 'display_errors','1');

  session_start();


  $messaggio = $_REQUEST["mess"];
  $utente = $_SESSION["username"];

  $host = "localhost";
  $username = "root";
  $password = "";
  $db = "iscrizioni";


  $conn = new mysqli($host,$username,$password,$db);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql="INSERT INTO `iscrizioni`.`commenti` (`userid`, `commento`) VALUES ('$utente', '$messaggio')";

  $risultato = $conn->query($sql);

  header('Location: community.php');
  exit;


 ?>
