<?php

  error_reporting(E_ALL);
  ini_set( 'display_errors','1');

  session_start();

  $nome =$_REQUEST["nome"];
  $cognome =$_REQUEST["cognome"];
  $email =$_REQUEST["email"];
  $userid =$_REQUEST["userid"];
  $avatar=$_REQUEST["avatar"];
  $password =$_REQUEST["password"];


  echo $nome;
  echo "<script>console.log($userid)</script>";
  echo "<script>console.log($avatar)</script>";


  $host = "localhost";
  $username = "root";
  $password = "";
  $db = "iscrizioni";


  $conn = new mysqli($host,$username,$password,$db);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $query="SELECT `userid` FROM `iscrizioni`.`iscrizionitab` WHERE `userid`='$userid'";

  $risultato = $conn->query($query);


  $numrows=$risultato->num_rows; // http://php.net/manual/en/mysqli-result.num-rows.php

  if($numrows==0){

    $sql ="INSERT INTO `iscrizioni`.`iscrizionitab` (`nome`, `cognome`, `email`, `userid`, `password`, `image`) VALUES ('$nome', '$cognome', '$email', '$userid', '$password', '$avatar')";

    $result = $conn->query($sql);

    $_SESSION["username"]=$userid;

    header('Location: index.php');
    exit;
  }
  header('Location:iscrizione.php');
  exit;





?>
