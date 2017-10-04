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
	<script type="text/javascript" src="form.js"></script>


	<title>orientaTO - Homepage</title>


	<style>
  .interattivo{
    display: none;
  }

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
            <a href="index.php">Home</a>&nbsp;&nbsp; > &nbsp;&nbsp; <a href="form.php">Domande</a>
          </div>
        </div>

        <header class="premessa">
					<div class="row">
						<div class="col-md-12">
							<h2 class="titoloSez">Richiesta Informazioni</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">Nel sito non hai trovato l'informazione che cercavi? o vuoi porci una domanda specifica,
		            segnalarci delle imperfezioni o errori, o semplicemente darci il tuo contributo? Compila il form che troverai in basso, in cambio
		            ti chiediamo di darci alcune brevi informazioni su di te per migliorare la qualit&agrave; del sito
		          </p>
						</div>
					</div>
          <br>
        </header>
        <hr />

        <h2>Scrivici</h2>
        <form onsubmit="controllo()" action="javascript:void(0)" method="post">
          <fieldset>
            <legend>Dati Generali</legend>
            <br>
            <label for="nome">Nome*:</label><br>
            <input type="text" id="nome" size="20"><br>
            <label for="cognome">Cognome*:</label><br>
            <input type="text" id="cognome" size="20"><br>
            <label for="email">E-mail*:</label><br>
            <input type="text" id="email" size="20"><br>
            <label for="nascita">Data di nascita:</label><br>
            <input type="text" id="nascita" size="20"><br>
            <label for="luogo">Luogo di nascita:</label><br>
            <input type="text" id="luogo" size="20"><br><br><br>
          </fieldset>
          <fieldset>
            <legend>Chi sei?</legend>
            <br>
            Da dove vieni?<br>
            <label class="scelta" for="Torino">Torino o provincia</label>
            <input class="scelta" type="radio" name="provenienza" id="Torino" value="Torino" onclick="check('Torino','radio')"><br>
              <div id="radio" class="interattivo">
                <label for="citta_uno">Indica il nome della tua città:</label>
                <input type="text" id="citta_uno" size="20"><br>
              </div>
            <label class="scelta" for="Piemonte"> Piemonte</label>
            <input class="scelta" type="radio" name="provenienza" id="Piemonte" value="Piemonte" onclick="check('Piemonte','radio_due')"><br>
              <div id="radio_due" class="interattivo">
                <label for="citta_due">Indica il nome della tua città:</label>
                <input type="text" id="citta_due" size="20"><br>
              </div>
            <label class="scelta" for="Italia">Sono italiano ma non vivo nella regione Piemonte</label>
            <input class="scelta" type="radio" name="provenienza" id="Italia" value="ita" onclick="check('Italia','radio_tre')"><br>
              <div id="radio_tre" class="interattivo">
                <label for="citta_tre">Indica il nome della tua città:</label>
                <input type="text" id="citta_tre" size="20"><br>
              </div>
            <label class="scelta" for="estero">Non sono italiano</label>
            <input class="scelta" type="radio" name="provenienza" id="estero" value="estero" onclick="check('estero','radio_quattro')">
              <div id="radio_quattro" class="interattivo">
                <label for="citta_quattro">Indica il nome della tua città:</label>
                <input type="text" id="citta_quattro" size="20"><br>
              </div>
            <br><br><br>
            Sei uno studente?<br>
            <label for="si">Si</label>
            <input type="radio" name="studente" id="si" value="si"><br>
            <label for="no">No, non sono ancora iscritto</label>
            <input type="radio" name="studente" id="no" value="no"><br><br><br>
            Perch&eacute; hai visitato questa pagina?<br>
            <label for="errore">Ci sono finito per errore</label>
            <input type="checkbox" name="visita" id="errore" value="errore"><br>
            <label for="infofac">cercavo informazione sulle facolt&agrave; Torino</label>
            <input type="checkbox" name="visita" id="infofac" value="infofac" checked><br>
            <label for="infounito">cercavo informazione su Unito</label>
            <input type="checkbox" name="visita" id="infounito" value="infounito"><br>
            <label for="infopoli">cercavo informazione sul Politecnico</label>
            <input type="checkbox" name="visita" id="infopoli" value="infopoli"><br>
            <label for="cambiofac">cercavo informazione su come cambiare facolt&agrave;</label>
            <input type="checkbox" name="visita" id="cambiofac" value="cambiofac"><br>
            <label for="infoiscriz">cercavo informazione su come iscrivermi</label>
            <input type="checkbox" name="visita" id="infoiscriz" value="infoiscriz"><br>
            <label for="infointernaz">cercavo informazione per studenti internazionali</label>
            <input type="checkbox" name="visita" id="infointernaz" value="infointernaz"><br><br><br>
            Hai trovato utili le informazioni che hai trovato nel sito?<br>
            <label for="nessuna">No</label>
            <input type="radio" name="utilitàinfo" id="nessuna" value="no"><br>
            <label for="sì">Si</label>
            <input type="radio" name="utilitàinfo" id="sì" value="si"><br><br><br>
            Se sì, ci hai impiegato molto tempo a trovare l'informazione che cercavi?<br>
            <label for="poco">No, meno di 2 minuti</label>
            <input type="radio" name="tempo" id="poco" value="poco"><br>
            <label for="abbastanza">Circa più di 2 minuti, ma l'ho trovata</label>
            <input type="radio" name="tempo" id="abbastanza" value="abbastanza"><br>
            <label for="molto">Ci ho impiegato molto tempo</label>
            <input type="radio" name="tempo" id="molto" value="molto"><br><br><br>
            Cosa ti ha attirato del nostro sito?<br>
            <label for="grafica">la grafica ed i colori</label>
            <input type="checkbox" name="attirare" id="grafica" value="grafica"><br>
            <label for="disposizione">la disposizione degli argomenti</label>
            <input type="checkbox" name="attirare" id="disposizione" value="grafica" checked><br>
            <label for="ricerca">i motori di ricerca</label>
            <input type="checkbox" name="attirare" id="ricerca" value="grafica"><br>
            <label for="facile">la sua essenzialit&agrave;, che rende l'informazione più facilmente reperibile</label>
            <input type="checkbox" name="attirare" id="facile" value="grafica"><br>
            <label for="trattazione">il modo con cui sono disposti e trattati gli argomenti</label>
            <input type="checkbox" name="attirare" id="trattazione" value="grafica"><br><br><br>
          </fieldset>
          <fieldset>
            <legend>Messaggio</legend>
            <br>
            <label for="richiesta">Richiesta relativa a:</label>
            <select id="richiesta" size="4" multiple>
              <option value="segreteria" selected>Segreteria</option>
              <option value="costi">Costi e tasse</option>
              <option value="borse di studio">Borse di studio e riduzione tasse</option>
              <option value="immatricolazione">Immatricolazione e documenti d'iscrizione</option>
              <option value="scambio">Progetti di scambio proprosti dalle universit&agrave; di Torino</option>
              <option value="studenteinternaz">Informazioni per studenti internazionali</option>
              <option value="segnalazioni">Segnalazioni</option>
            </select>
            <br><br><br>
            <label for="messaggio">Messaggio:</label><br><br>
            <textarea id="messaggio" cols="40" rows="10" accesskey="9" tabindex="9" onfocus="this.innerHTML=''" onblur="this.innerHTML='Scrivi il tuo messaggio'">Scrivi il tuo messaggio</textarea><br><br>
            <input type="submit" value="Invia"><br><br><br>
          </fieldset>
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
