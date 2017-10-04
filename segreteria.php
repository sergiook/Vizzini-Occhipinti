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


	h4{
		margin-left: 0 !important;
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
					<div class="col-md-12">
						<div id="briciole_pane">
		          <a href="index.php">Home</a>&nbsp;&nbsp; > &nbsp;&nbsp; <a href="segreteria.php">Altre informazioni utili</a>
		        </div>
					</div>
				</div>

        <header class="premessa">
					<div class="row">
						<div class="col-md-12">
							<h2 class="titoloSez">Altre Informazioni Utili</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="intro">In questa sezione potrete trovare informazioni utili circa gli uffici principali dell'Universit&agrave;, i loro orari, referenti e collocazioni,
		            e su una serie di istituzioni vicine all'universit&agrave; che vengono in aiuto dello studente.
		          </p>
						</div>
					</div>

        </header>
        <hr />

				<div class="row">
					<div class="col-md-12">
						<h3 class="text-center">Contatti</h3>
					</div>
				</div>


				<div class="row" style="width:100%; height:auto;">
					<div class="col-md-4">
						<div class="thumbnail">
							<div class="caption">
								<h4 class="text-center">Sezione Orientamento, Tutorato e Placement
									Direzione Didattica e Servizi agli Studenti
								</h4>
								<p id="sezOrientamento" class="text-center">Vicolo Benevello 3/A - 10124 Torino    <br>
		              Telefono: (+39) 011 6704933    <br>
		              Email: <a href="mailto:orientamento@unito.it" title="indirizzo mail">orientamento@unito.it</a>
		            </p>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="thumbnail">
							<div class="caption">
								<iframe id="mappa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2817.8240100415533!2d7.689938399126368!3d45.06908103590597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886d7b50c5ff09%3A0xfe14586a915d986d!2sVicolo+Benevello%2C+3%2C+10124+Torino!5e0!3m2!1sit!2sit!4v1491340739428" allowfullscreen></iframe>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="thumbnail">
							<div class="caption">
								<h4 class="text-center">Delegati Scuole e Dipartimenti</h4>
								<ul id="listDelegati">
		              <li><strong>Delegato del Rettore</strong>:<br>
		                Prof.ssa Elisabetta Barberis;
		              </li>
		              <li><strong>Referente per l'Orientamento</strong>:<br>
		                Prof. Ezio Ferroglio;
		              </li>
		              <li><strong>Referente per il Tutorato</strong>:<br>
		                Prof.ssa Eva Desana;
		              </li>
		              <li><strong>Referente per il Placement</strong>:<br>
		                Prof. Maurizio Cisi
		              </li>
		            </ul>
							</div>
						</div>
					</div>
				</div>

        <!--fine div direzioneGen-->

        <section>
          <table id="poliUni" class="table table-responsive table-striped">
            <caption class="text-center">Sedi dei poli, responsabili ed indirizzi</caption>
            <tr>
              <th>Polo universitario</th>
              <th>Sedi ed indirizzi</th>
              <th>Orari</th>
            </tr>
            <tr>
              <td class="nomePolo">Polo di Agraria e Veterinaria</td>
              <td class="informazioniPolo">Largo Paolo Braccini, 2 - 10095 Grugliasco (TO)<br>
                Responsabile: Claudia GROSSO<br>
                Telefono: +39 0116709900<br>
                Email: <a href="mailto:segrstu.agraria@unito.it" title="mail">segrstu.agraria@unito.it</a><br>
                Email: <a href="mailto:segrstu.veterinaria@unito.it" title="mail">segrstu.veterinaria@unito.it</a>
              </td>
              <td class="informazioniPolo">Orari: da lunedì a venerdì 9.00 - 11.00<br>
                martedì, mercoledì e giovedì anche 13.30 - 15.00
              </td>
            </tr>
            <tr>
              <td class="nomePolo">Polo di Management ed Economia</td>
              <td class="informazioniPolo">C.so Unione Sovietica, 218 bis - 10134 Torino<br>
                Responsabile: Francesco SPINA<br><br>
                Telefono: +39 0116709900<br>
                Email: <a href="mailto:segreteriastudenti.economiamanagement@unito.it" title="mail">segreteriastudenti.economiamanagement@unito.it</a>
              </td>
              <td class="informazioniPolo">Orario: da lunedì a venerdì 9.00 - 11.00<br>
                martedì, mercoledì e giovedì anche 13.30 - 15.00
              </td>
            </tr>
            <tr>
              <td class="nomePolo">Polo di Psicologia</td>
              <td class="informazioniPolo">Via G. Verdi, 12 - 10124 Torino<br>
                Responsabile:  Massimo SCUGLIA<br><br>
                Telefono: +39 0116709900<br>
                Email: <a href="mailto:segrstu.psicologia@unito.it" title="mail">segrstu.psicologia@unito.it</a>
              </td>
              <td class="informazioniPolo">Orario: da lunedì a venerdì 9.00 - 11.00<br>
                martedì, mercoledì e giovedì anche 13.30 - 15.00
              </td>
            </tr>
            <tr>
              <td class="nomePolo">Polo di Scienze della Natura</td>
              <td class="informazioniPolo">Via Santa Croce, 6 - 10123 Torino<br>
                Responsabile: Maria Pina BOMBINO<br><br>
                Telefono: +39 0116709900<br>
                Email: <a href="mailto:segrstu.mfn@unito.it" title="mail">segrstu.mfn@unito.it</a>
              </td>
              <td class="informazioniPolo">Orario: da lunedì a venerdì 9.00 - 11.00<br>
                martedì, mercoledì e giovedì anche 13.30 - 15.00
              </td>
            </tr>
            <tr>
              <td class="nomePolo">Polo di Scienze Umanistiche</td>
              <td class="informazioniPolo">Via S. Ottavio 17/4 - 10124 Torino<br>
                Responsabile: Francesco CACCIATORE<br><br>
                Telefono: +39 0116709900<br>
                Email: <a href="servizistudenti.polosum@unito.it" title="mail">servizistudenti.polosum@unito.it</a>
              </td>
              <td class="informazioniPolo">Orario: da lunedì a venerdì 9.00 - 11.00<br>
                martedì, mercoledì e giovedì anche 13.30 - 15.00
              </td>
            </tr>
            <tr>
              <td class="nomePolo">Polo di Scienze Giuridiche, Politiche, Sociali</td>
              <td class="informazioniPolo">C.so Regina Margherita, 60 - 10153 Torino<br>
                Responsabile: Angela MONTRONE<br><br>
                Telefono: +39 0116709900<br>
                Email: Email: <a href="mailto:segreteriastudenti.cle@unito.it" title="mail">segreteriastudenti.cle@unito.it</a>
              </td>
              <td class="informazioniPolo">Orario: da lunedì a venerdì 9.00 - 15.00 </td>
            </tr>
            <tr>
              <td class="nomePolo">Polo delle Scienze Mediche, delle Scienze e Tecnologie del Farmaco e delle Biotecnologie</td>
              <td class="informazioniPolo">C.so Massimo d'Azeglio, 60 - 10126 Torino<br>
                Responsabile: Consolatrice MURTAS<br><br>
                Telefono: +39 0116709900<br>
                Email: Email: <a href="mailto:segrstu.chirurgia@unito.it" title="mail">segrstu.chirurgia@unito.it</a><br>
                Email: <a href="mailto:segrstu.farmacia@unito.it" title="mail">segrstu.farmacia@unito.it</a>
              </td>
              <td class="informazioniPolo">Orario: da lunedì a venerdì 9.00 - 11.00<br>
                martedì, mercoledì e giovedì anche 13.30 - 15.00
              </td>
            </tr>
            <tr>
              <td class="nomePolo">Polo dei corsi delle Classi Sanitarie</td>
              <td class="informazioniPolo">Via Rosmini, 4/A - Torino<br>
                Responsabile: Salvatore PAOLELLA<br><br>
                Telefono: +39 0116709900<br>
                Email: <a href="mailto:segrstu.sanitarie@unito.it" title="mail">segrstu.sanitarie@unito.it</a>
              </td>
              <td class="informazioniPolo">Orario: da lunedì a venerdì 9.00 - 11.00<br>
                martedì, mercoledì e giovedì anche 13.30 - 15.00
              </td>
            </tr>
            <tr>
              <td class="nomePolo">Polo delle Scienze Motorie e Sportive</td>
              <td class="informazioniPolo">C.so Trento, 13 - 10129 Torino<br>
                Responsabile: Sara BAGNATO<br><br>
                Telefono: +39 0116708267<br>
                Email: <a href="mailto:des.suism@unito.it" title="mail">des.suism@unito.it</a>
              </td>
              <td class="informazioniPolo">Orario: da lunedì a venerdì 9.00 - 11.00<br>
                martedì, mercoledì e giovedì anche 13.30 - 15.00
              </td>
            </tr>
            <tr>
              <td class="nomePolo">Polo delle Scuole di Specializzazione</td>
              <td class="informazioniPolo">C.so Massimo d'Azeglio, 60 - 10126 Torino<br>
                Responsabile: Simone Mattia GALLIO<br><br>
                Telefono: +39 0116709900<br>
                Email: <a href="mailto:segrstu.specializzazione@unito.it" title="mail">segrstu.specializzazione@unito.it</a>
              </td>
              <td class="informazioniPolo">Orario: da lunedì a venerdì 9.00 - 11.00<br>
                martedì, mercoledì e giovedì anche 13.30 - 15.00
              </td>
            </tr>
            <tr>
              <td class="nomePolo">Master Area Medica e Formazione Insegnanti Scuola Secondaria</td>
              <td class="informazioniPolo">Via Verdi 10 ter/E - 10124 Torino<br>
                Responsabile: Annamaria ANCONA<br><br>
                Telefono: +39 011 6704706-4707-4708<br>
                Email: <a href="mailto:segrstu.sis@unito.it" title="mail">segrstu.sis@unito.it</a>
              </td>
              <td class="informazioniPolo">Orario: lunedì e venerdì 10.00 - 12.00<br>
                martedì e giovedì 14.00 - 15.30
              </td>
            </tr>
          </table>
        </section>
        <hr />
        <section>
					<div class="row">
						<div class="col-md-12">
							<h3>InfoPoint</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">Uno spazio in cui &egrave; possibile avere informazioni sulle strutture e dei servizi universitari.<br>
		            E' possibile avere accesso a:
		          </p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<ul class="list">
		            <li>postazioni multimediali, per accedere ai servizi in rete di UniTO e per connettersi gratuitamente a internet (tempo massimo: 45 minuti)</li>
		            <li>sportelli telematici, per avere informazioni sul tutto cio' che riguarda la vita studentesca</li>
		            <li>informazioni per gli studenti stranieri</li>
		          </ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">Indirizzo: Palazzo degli Stemmi, Via Po 29 - 10124 Torino<br>
		            Telefono: (+39) 011 6703020-3021<br>
		            Email: <a href="mailto:infopoint@unito.it" title="mail">infopoint@unito.it</a><br>
		            Contatto Skype: infopoint.unito<br>
		            Orari: dal lunedì al venerdì 9.00-16.30
		          </p>
						</div>
					</div>
        </section>
        <hr />

        <section>
					<div class="row">
						<div class="col-md-12">
							<h3>Associazione Amici di UniTo</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">L’Associazione Amici dell’Universit&agrave; degli Studi di Torino &egrave; attiva dal 1998 e rappresenta un ideale ponte tra
		            neolaureati, laureati, Ateneo e societ&agrave; civile. Le principali attivit&agrave; vanno dall’informazione, all'aggiornamento e alla divulgazione,
		            unite a numerose iniziative per promuovere le attivit&agrave; e l’immagine dell’Universit&agrave; di Torino a livello nazionale e internazionale.<br><br>
		            Sito web: <a href="http://www.amiciunito.it" title="link esterno">www.amiciunito.it</a><br>
		            Segreteria Operativa<br>
		            C.so Sebastopoli, 37 - 10134 Torino
		            Tel. +39 011-660.4284
		          </p>
						</div>
					</div>
        </section>
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
