<?php
		//error_reporting(E_ALL);
		//ini_set( 'display_errors','1');

		session_start();
?>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" media="screen" href="mystyle2.3.css" />

	<script src="js/jquery-1.10.1.js"></script>

	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<meta name="author" content="Rosaria Vizzini, Sergio Occhipinti">
	<meta name="description" content="Sito di orientamento universitario">
	<meta name="keywords" content="unito, Torino, Politecnico, orientamento universitario, università">
	<script type="text/javascript" src="social.js"></script>
	<script type="text/javascript" src="ricerca.js"></script>
	<script type="text/javascript" src="slideshow.js"></script>

	<title>orientaTO - Homepage</title>


	<style>

	.navbar-toggle,
	.navbar-toggle .icon-bar{
		border: 1px solid white;
	}

	.navbar-light,
	.dropdown-menu {
	 background-color: #FFBC00;
	 border-color: #FFBC00;
	}

	#myNavbar li a{
		color: white;
	}

	#myNavbar li a:hover,
	#myNavbar li a:active,
	#myNavbar li a:focus,
	.navbar-light .navbar-nav>.active>a{
		background-color: #56621F;
	}


	.icons{
		width: 2.5%;
		height: 2.5%;
		float: left;
		margin-right: 1%;
	}

	h2{
		font-size: 85%;
	}

	.intestazione{
		margin-bottom: 2%;
	}

	.commentoutente{
		border:1px solid #FFBC00;
		background-color: #F7F7F7;
		width: 60%;
	}

	.testo{
		margin: 3%;
	}

	section{
		margin-top: 4em;
	}

	textarea{
	}

	#pubblica{
		display: block;
	}

		</style>
  </head>
  <body>
		<div id="container">
    <header>
      <nav class="navbar navbar-light">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">OrientaTO</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Studi Umanistici<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="filosofia_scienzedelleducazione.php">Filosofia e Scienze dell'Educazione</a></li>
                  <li><a href="#">Lingua e Letteratura Straniera</a></li>
                  <li><a href="#">Psicologia</a></li>
                  <li><a href="#">Studi Storici</a></li>
                  <li><a href="#">Studi Umanistici</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Diritto e Societ&agrave; <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Economia e Statistica</a></li>
                  <li><a href="#">Cultura, Politica e Societ&agrave;</a></li>
                  <li><a href="#">Giurisprudenza</a></li>
                  <li><a href="#">Geografia e Scienze Territoriali</a></li>
                  <li><a href="#">Management</a></li>
                  <li><a href="#">Scienze Economiche e Sociali</a></li>
                  <li><a href="#">Matematica e Statistica</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sanitaria<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Neuroscienze</a></li>
                  <li><a href="#">Oncologia</a></li>
                  <li><a href="#">Scienze e Tecniche del Farmaco</a></li>
                  <li><a href="#">Scienze Chirurgiche</a></li>
                  <li><a href="#">Scienze della Sanit&agrave; Pubblica e pediatrica</a></li>
                  <li><a href="#">Scienze Mediche</a></li>
                  <li><a href="#">Scienze Veterinarie</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Area Scientifica<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Biotecnologie</a></li>
                  <li><a href="#">Scienze Cliniche e Biologiche</a></li>
                  <li><a href="#">Chimica</a></li>
                  <li><a href="#">Fisica</a></li>
                  <li><a href="#">Matematica</a></li>
                  <li><a href="#">Informatica</a></li>
                  <li><a href="#">Scienze della Terra</a></li>
                  <li><a href="#">Scienze della Vita</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Altre Scuole <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Politecnico</a></li>
                  <li><a href="#">Universit&agrave; di Studi Gastronomici</a></li>
                  <li><a href="#">IED, IAAD</a></li>
                  <li><a href="#">Alta Formazione Artistica, Musicale e Coreutica</a></li>
                  <li><a href="#">Scuole Specilistiche</a></li>
                  <li><a href="#">ESCP Europe</a></li>
                  <li><a href="#">IUSTO Rebaudengo</a></li>
                  <li><a href="#">ITS</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form navbar-left">
              <div class="input-group">
                <input type="text" class="form-control" id="cerca" placeholder="Cerca nel sito">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit" onclick="ricerca()">
                    <i class="glyphicon glyphicon-search"></i>
                  </button>
                </div>
              </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="javascript:void(0);" onclick="window.location.href = 'index2.html'"><span class="glyphicon glyphicon-user"></span> Non sei <b><?php echo $_SESSION["username"]; ?></b> ?</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">ita <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">inglese</a></li>
                  <li><a href="#">francese</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        <!--fine nav menuOrizzontale-->

				<div class="container-fluid">
	          <div class="row">
	            <h1 class="col-sm-4 col-xs-12 align-middle">orientaTO</h1>
	            <div id="logoOrientato" class="col-sm-8 hidden-xs" >
	              <img id="logo" class="img-responsive img-fluid" src="sky.jpg" alt="logo skyline Torino" />
	            </div>
	          </div>
				</div>

      </header>
      <!--fine header #superiore-->
      <a name="startcontent" id="startcontent"></a>

      <div id="corpo" class="container">
				<div class="row">
					<div id="briciole_pane" class="col-md-12">
	          <a href="index.php">Home</a>&nbsp;&nbsp; > &nbsp;&nbsp; <a href="community.php">Community</a>
	        </div>
				</div>

					<header class="premessa">
						<div class="row">
							<div class="col-md-12">
								<h2 class="titoloSez">Community</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="intro">Se hai bisogno di aiuto, o semplicemente ti serve un consiglio, scrivi alla Community di OrientaTO. Tanti altri studenti come te sapranno darti le giuste risposte.
			          </p>
							</div>
						</div>
	        </header>
        <hr />

				<div id="risultati">

					<?php

					$host = "localhost";
					$username = "root";
					$password = "";
					$db = "iscrizioni";

					$images= array ('img1'=>'img1.png', 'img2'=>'img2.png', 'img3'=>'img3.png', 'img4'=>'img4.png', 'img5'=>'img5.png', 'img6'=>'img6.jpg', 'img7'=>'img7.png', 'img8'=>'img8.png', 'img9'=>'img9.png', 'img10'=>'img10.png', 'img11'=>'img11.png', 'img12'=>'img12.png');


					$conn = new mysqli($host,$username,$password,$db);

					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}

					$sql ="SELECT `commenti`.`userid`,`commenti`.`commento`,`iscrizionitab`.`image` FROM `iscrizioni`.`commenti` LEFT JOIN `iscrizioni`.`iscrizionitab` ON `commenti`.`userid`= `iscrizionitab`.`userid` ORDER BY `commenti`.`id`"; //LEFT JOIN https://www.w3schools.com/sql/sql_join_left.asp

					$result = $conn->query($sql);

					while ($row = $result->fetch_assoc()) {
						$usr=$row['userid'];
						$comment=$row['commento'];
						$img=$row['image'];

						echo "<div class='row'>";
						echo "<section class='comment col-md-12'>";
						echo "<div class=\"intestazione\">";
						echo "<img class='icons' src='icons/$images[$img]' />";
						echo "<h2><strong>$usr</strong></h2>";
						echo "</div>";
						echo "<div class=\"commentoutente\">";
						echo "<p class=\"testo\">$comment</p>";
						echo "</div>";
						echo "</section>";
						echo "</div>";

					}

					?>

				</div>
				</div>

				<div class="container">

					<form id="form_commenti" method="post" action="doCommenti.php" class="row"> <!--    action="javascript:void(0)"    -->
						<div class="col-md-12">
							<textarea id="messaggio" name="mess" cols="20" rows="5" onfocus="this.innerHTML=''">Scrivi il tuo messaggio</textarea>
							<button id="pubblica" type="submit">Commenta</button>
						</div>

					</form>

				</div>



      <!--fine div corpo-->
			<div class="container">
        <footer>
          <div class="row">
            <ul id="informazioni" class="col-md-4 col-xs-12">
              <li>Rosaria Vizzini&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sergio Occhipinti</li>
              <li><a href="mailto:rosaria.vizzini@gmail.com">rosaria.vizzini@gmail.com</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="mailto:sergio.occhipinti@unito.it">sergio.occhipinti@unito.it</a></li>
              <li><a href="sitemap.html" accesskey="9" tabindex="9" title="mappa del sito">Mappa del sito</a></li>
              <li><a href="dichiarazione_di_accessibilita.html" accesskey="0" title="dichiarazione di accessibilità">Dichiarazione di Accessibilit&agrave;</a></li>
            </ul>
            <div id="social" class="col-md-4 col-xs-12" style="text-align:center;">
              <div id="share"><p>Condividi</p></div>
              <a onclick="facebook()" href="#"><img src="fb2.png" id="fb" alt="logo facebook" onmouseover="this.src='fb.png'" onmouseout="this.src='fb2.png'" /></a>
              <a onclick="twitter()" href="#"><img src="twitter2.png" id="twitter" alt="logo twitter" onmouseover="this.src='twitter.png'" onmouseout="this.src='twitter2.png'" /></a>
            </div>
            <div class="col-md-4 col-xs-12" style="margin-top:8%;">
          		<a href="http://www.w3.org/WAI/WCAG2AAA-Conformance" title="Explanation of WCAG 2.0 Level Triple-A Conformance">
              <img style="display:block; margin:auto;width:20%; height:auto;" src="http://www.w3.org/WAI/wcag2AAA" alt="Level Triple-A conformance,
               W3C WAI Web Content Accessibility Guidelines 2.0"></a>
            </div>
         </div>
      </footer>
    </div>

    </div>
    <!--fine div container-->

		<script src="js/bootstrap.min.js"></script>

  </body>
</html>
