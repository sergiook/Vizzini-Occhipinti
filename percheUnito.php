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
		          <a href="index.php">Home</a>&nbsp;&nbsp; > &nbsp;&nbsp; <a href="percheUnito.php">Perch&eacute; scegliere Unito</a>
		        </div>
					</div>
				</div>

        <div class="row">
        	<div class="col-md-12">
        		<h2 class="titoloSez">Perch&eacute; scegliere UniTO</h2>
        	</div>
        </div>

				<div class="row">
				  <div class="col-md-6">
				    <div class="thumbnail">
				      <img class="img-responsive img-fluid" src="ricerca.jpg" alt="ricerca">
				      <div class="caption">
				        <h3>Perch&eacute; &egrave; un ateneo d'eccellenza</h3>
				        <p>UniTO si colloca al 3° posto tra i grandi Atenei italiani per la qualit&agrave; della ricerca secondo le valutazioni nazionali
			            <a href="http://politichediateneounito.it/vqr/" title="link esterno"><abbr title="Agenzia Nazionale di Valutazione del sistema universitario e della ricerca">ANVUR</abbr></a> (Agenzia Nazionale di Valutazione del sistema universitario e della ricerca) per il periodo 2011-2014, con eccellenti risultati
			            nelle diverse aree disciplinari.</p>
				      </div>
				    </div>
				  </div>

					<div class="col-md-6">
				    <div class="thumbnail">
				      <img class="img-responsive img-fluid" src="ateneo.jpg" alt="ateneo">
				      <div class="caption">
				        <h3>Perch&eacute; &egrave; un grande ateneo</h3>
				        <p>UniTO &egrave; uno tra i più antichi e prestigiosi atenei in Italia.<br><br>
			            70.500 iscritti<br>
			            5,7% stranieri<br>
			            61% donne<br>
			            1.400 iscritti a Master<br>
			            1.200 dottorandi</p>
				      </div>
				    </div>
				  </div>
				</div>

        <!--fine grande ateneo-->

				<div class="row">
				  <div class="col-md-6">
				    <div class="thumbnail">
				      <img class="img-responsive img-fluid" src="offerformat.jpg" alt="offerta formativa">
				      <div class="caption">
				        <h3>Per l'ampia offerta formativa</h3>
				        <p>Numerosi percorsi di studio per costruire il futuro professionale dei propri studenti.<br><br>
			            66 corsi di Laurea triennale<br>
			            75 corsi di Laurea magistrale<br>
			            9 corsi a ciclo unico<br>
			            97 master<br>
			            24 corsi di dottorato di ricerca</p>
				      </div>
				    </div>
				  </div>

					<div class="col-md-6">
				    <div class="thumbnail">
				      <img class="img-responsive img-fluid" src="salastudio.jpg" alt="foto sala studio">
				      <div class="caption">
				        <h3>Perch&eacute; garantisce il diritto allo studio</h3>
				        <p>UniTo si impegna a garantire l'accesso allo studio a tutti tramite borse di studio, esoneri dalle tasse, agevolazioni per alloggi e mense testimoniano.</p>
				      </div>
				    </div>
				  </div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="thumbnail">
							<img class="img-responsive img-fluid" src="colloquio.jpg" alt="colloquio lavoro">
							<div class="caption">
								<h3>Prepara le basi per il tuo lavoro futuro</h3>
								<p>Trova contatti con il mondo del lavoro tramite <a href="https://www.unito.it/servizi/lo-studio/job-placement" title="link esterno">job placement</a>,
			            <a href="https://www.unito.it/servizi/lo-studio/job-placement/tirocini-e-stage" title="link esterno alla pagina di unito">tirocini e stage.</a>
			            <br>UniTO trasferisce, inoltre, conoscenza e cultura a imprese e territori tramite l'incubatore di impresa
			            <a href="http://www.2i3t.it/" title="link esterno">2i3t</a>.</p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="thumbnail">
							<img class="img-responsive img-fluid" src="internazional.jpg" alt="immagine del mondo riflessa sulle mani">
							<div class="caption">
								<h3>Favorisce l'internazionalizzazione</h3>
								<p>Promuove azioni di mobilit&agrave; per consentire agli studenti di realizzare un periodo di studio e/o di
			            formazione presso numerosi Paesi stranieri.<br><br>
			            <a href="https://www.unito.it/internazionalita/studiare-e-lavorare-allestero/mobilita-studenti/erasmus-mundus" title="link esterno alla pagina di unito">Programma Erasmus Mundus</a><br>
			            <a href="https://www.unito.it/internazionalita/studiare-e-lavorare-allestero/mobilita-studenti/mobilita-allestero-doppio-titolo" title="link esterno alla pagina di unito">Mobilita' all'estero per doppio titolo</a><br>
			            <a href="https://www.unito.it/internazionalita/universita-italo-francese" title="link esterno alla pagina di unito">Universit&agrave; Italo-Francese</a></p>
							</div>
						</div>
					</div>
				</div>
        <!--fine diritto studio-->

				<div class="row">
					<div class="col-md-6">
						<div class="thumbnail">
							<img class="img-responsive img-fluid" src="libri.jpg" alt="due file di libri antichi">
							<div class="caption">
								<h3>Offre un grande sistema bibliotecario</h3>
								<p>Il sistema bibliotecario di UniTO conta 32 biblioteche e offre la possibilit&agrave; di consultare circa 3 milioni di volumi e
			            più di 120.000 risorse on-line (e-journals, e-books, piattaforme e banche dati bibliografiche e fattuali, documenti, reports).</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="thumbnail">
							<img class="img-responsive img-fluid" src="innovazione.jpg" alt="lampadina composta da ingranaggi">
							<div class="caption">
								<h3>Investe in ricerca e innovazione</h3>
								<p>4 Scuole di Dottorato e 27 Dipartimenti impegnati in ricerca di alto livello, dalla ricerca di base alla ricerca applicata e traslazionale.
			            Una connessione tra ricerca accademica e trasferimento tecnologico tramite i diversi
			            <a href="https://www.unito.it/ricerca/progetti-iniziative/ricerca-nazionale-regionale/piemonte/poli" title="link esterno alla pagina di unito">Poli di innovazione</a> disolocati sul territorio.</p>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="thumbnail">
							<img class="img-responsive img-fluid" src="torino.jpg" alt="Torino al tramonto">
							<div class="caption">
								<h3>Per vivere Torino</h3>
								<p>Perch&egrave; Torino non offre solo una buona Universit&agrave;, ma anche musei, eventi internazionali, impianti sportivi e divertimento.</p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="thumbnail">

							<div class="caption">
								<h3>Orientamento 2016/2017: guarda il video</h3>
								<video controls="controls" id="videoOr" style="width:90%; height:auto;">
			            <source src="Orientamento.mp4" type="video/mp4" />
			            <track src="sottotitoli.vtt" kind="subtitles" srclang="it" label="Italiano" />
			          </video>
							</div>
						</div>
					</div>
				</div>

      </div>
      <!--fine corpo-->


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
