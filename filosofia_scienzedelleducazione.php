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
	.dropdown-menu>.active>a, 
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
              <li><a href="index.php">Home</a></li>
              <li class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Studi Umanistici<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="active"><a href="filosofia_scienzedelleducazione.php">Filosofia e Scienze dell'Educazione</a></li>
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
      <!--fine headre #superiore-->
      <a name="startcontent" id="startcontent"></a>

      <div id="corpo" class="container">
				<div class="row">
					<div id="briciole_pane" class="col-md-12">
	          <a href="index.php">Home</a>&nbsp;&nbsp; > &nbsp;&nbsp; <a href="#">Studi Umanistici</a> > &nbsp;&nbsp; <a href="filosofia_scienzedelleducazione.php">Filosofia e Scienze dell'Educazione</a>
	        </div>
				</div>


					<header>
						<div class="row">
							<div class="col-md-12">
								<h2 class="titoloSez">Dipartimento di Filosofia e Scienze dell'Educazione</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p class="intro">Qui di seguito vi presentiamo le facolt&agrave; del dipartimento di Filosofia e scienze dell'Educazionee, sia per quanto riguarda
			            i corsi di Laurea Triennale, che di Laurea Specialistica ed a Ciclo Unico. Le facolt&agrave; qui incluse offrono un percorso di studio variegato,
			            che offrono sia insegnamenti collaterali, quali quelle più letterari e filologici, che quelli più specifici del settore scelto.
			          </p>
							</div>
						</div>
	        </header>

        <hr />
				<div class="row">
					<section class="premessa col-md-12">
	          <h2 class="titoloSez">Laurea Triennale</h2>
	        </section>
				</div>

					<section>
						<div class="row">
							<div class="col-md-12">
								<h3><a class="homeFac" href="filosofia.php">Filosofia</a></h3>
							</div>
						</div>
						<div class="row">
						<div class="col-md-12">
							<p class="descrizione">Il Corso di Laurea triennale in Filosofia dell'Universit&agrave; di Torino mira a formire allo studente sia una formazione classica,
								relativamente ai grandi autori, alle grandi opere ed alle grandi correnti di pensiero, sia a fargli acquisire una competenza critica,
								utile per qualunque siano le sue scelte di studio o professionali successive.
							</p>
							<div class="opzioni"><a class="opzioniFac" href="#">Sbocchi professionali</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#">Costi</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="filosofia.php">Vai alla pagina completa</a>
							</div>
						</div>
						</div>
					</section>

					<section>
						<div class="row">
							<div class="col-md-12">
								<h3><a class="homeFac" href="#">Scienze dell’educazione</a></h3>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
									<p class="descrizione">Il Corso di Laurea in Scienze dell'Educazione &egrave; destinato alla preparazione di educatori; a tal fine,
										si avvale degli apporti di differenti discipline per proporre allo studente una formazione di base integrata sulle realt&agrave; educative
										che contraddistinguono i diversi ambiti e contesti sociali.
									</p>
									<div class="opzioni"><a class="opzioniFac" href="#">Sbocchi professionali</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#">Costi</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#">Vai alla pagina completa</a>
									</div>
							</div>
						</div>
					</section>


        <hr />
				<div class="row">
					<section class="premessa col-md-12">
	          <h2 class="titoloSez">Laurea magistrale a ciclo unico</h2>
	        </section>
				</div>

        <section>
					<div class="row">
						<div class="col-md-12">
							<h3><a class="homeFac" href="#">Scienze della formazione primaria</a></h3>
						</div>
					</div>
					<div class="row">
							<div class="col-md-12">
								<p class="descrizione">Scienze della Formazione Primaria &egrave; un Corso di Laurea a ciclo unico, di durata quinquennale, a numero programmato.
			            Il curricolo prepara insegnanti della Scuola dell'Infanzia e Primaria, in grado di affrontare le sfide odierne dell'educazione e di garantire
			            a tutti un'offerta formativa di qualit&agrave;.Le attivit&agrave; previste non prevedono solo le lezioni frontali ma anche laboratori  in cui si mettono
			            in relazione le competenze didattico-applicative.
			          </p>
								<div class="opzioni"><a class="opzioniFac" href="#">Sbocchi professionali</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#">Costi</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#">Vai alla pagina completa</a>
			          </div>
							</div>
					</div>

        </section>
        <hr />
				<div class="row">
					<section class="premessa col-md-12">
	          <h2 class="titoloSez">Laurea magistrale</h2>
	        </section>
				</div>

        <section>
					<div class="row">
						<div class="col-md-12">
							<h3><a class="homeFac" href="#">Comunicazione e culture dei media</a></h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">Il Corso di laurea magistrale in Comunicazione e culture dei media si propone di formare degli esperti sui diversi
								contenuti mediali e la loro organizzazione storica e sistematica. Si caratterizza per una particolare attenzione e offerta didattica sui
								linguaggi dei media vecchi e nuovi (televisione, cinema, radio, pubblicit&agrave;, grafica, musica popolare, new media di internet), sulla narrativit&agrave;,
								sulla semiotica, sulla sociologia delle comunicazioni di massa e sulla storia dei media.
							</p>
							<div class="opzioni"><a class="opzioniFac" href="#">Sbocchi professionali</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#">Costi</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#">Vai alla pagina completa</a>
							</div>
						</div>
					</div>
        </section>

        <section>
					<div class="row">
						<div class="col">
							<h3><a class="homeFac" href="#">Filosofia</a></h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">Il Corso di laurea magistrale in Filosofia si propone di fornire una preparazione avanzata sia teorica sia storico-filosofica,
		            formando capacit&agrave; che consentano di insegnare filosofia con competenza e autorevolezza, di inserirsi nella ricerca filosofica attuale, nazionale
		            e internazionale, e anche di applicare le abilit&agrave; acquisite nei molti settori in cui esse possono essere messe a frutto, dalle istituzioni culturali
		            alla comunicazione culturale, dalla consulenza filosofica (inclusa la consulenza bioetica e di etica degli affari) alle relazioni aziendali.
		          </p>
		          <div class="opzioni"><a class="opzioniFac" href="#">Sbocchi professionali</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#">Costi</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#">Vai alla pagina completa</a>
		          </div>
						</div>
					</div>
        </section>

        <section>
					<div class="row">
						<div class="col-md-12">
							<h3><a class="homeFac" href="#">Programmazione e gestione dei servizi educativi e formativi</a></h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">Il Corso di Laurea (CdL) Magistrale in Programmazione e gestione dei servizi educativi e formativi (LM-50)
		            promuove un'avanzata e qualificata formazione teorico-pratica nell'ambito delle discipline delle scienze dell'educazione e della formazione
		            inerenti ai settori dell'analisi, progettazione e intervento educativo, nonch&eacute; della programmazione e organizzazione delle risorse formative
		            e dei servizi educativi.
		          </p>
		          <div class="opzioni"><a class="opzioniFac" href="#">Sbocchi professionali</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#">Costi</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#">Vai alla pagina completa</a>
		          </div>
						</div>
					</div>
        </section>

        <section>
					<div class="row">
						<div class="col-md-12">
							<h3><a class="homeFac" href="#">Scienze dell’educazione motoria e delle attivit&agrave; adattate</a></h3>
						</div>
					</div>
					<div class="row">
							<div class="col-md-12">
								<p class="descrizione">Il corso di laurea ha l'obiettivo di rendere lo studente in grado di progettare, condurre e gestire le attivit&agrave;
			            fisico-motorie,ed avere competenze di livello avanzato per poter operare nell’ambito delle attivit&agrave; motorie, sia nella scuola
			            che nell’extra-scuola, oltre che in altri contesti professionali.
			          </p>
			          <div class="opzioni"><a class="opzioniFac" href="#">Sbocchi professionali</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#">Costi</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#">Vai alla pagina completa</a>
			          </div>
							</div>
					</div>
        </section>
        <section>
					<div class="row">
						<div class="col-xs-12">
							<h3><a class="homeFac" href="#">Scienze pedagogiche</a></h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">Il Corso di Laurea (CdL) Magistrale in Scienze Pedagogiche (LM-85) fornisce avanzata e qualificata formazione
		            nell'ambito delle scienze pedagogiche e dell'educazione, nonch&eacute; delle discipline filosofiche, storiche, psicologiche, sociologiche e
		            antropologiche finalizzate all'acquisizione di un complesso sapere e agire educativo per gestire ricerche e rielaborare modelli educativi/di
		            intervento; analizzare bisogni formativi; insegnare, previa abilitazione, nella scuola secondaria superiore, nell'ambito delle scienze umane
		            e dell'educazione.
		          </p>
		          <div class="opzioni"><a class="opzioniFac" href="#">Sbocchi professionali</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#">Costi</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#">Vai alla pagina completa</a>
		          </div>
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
