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
      <!--fine header #superiore-->
      <a name="startcontent" id="startcontent"></a>
			<div id="corpo" class="container">
				<div class="row">
					<div id="briciole_pane" class="col-md-12">
	          <a href="index.php">Home</a>&nbsp;&nbsp; > &nbsp;&nbsp; <a href="#">Studi Umanistici</a> > &nbsp;&nbsp; <a href="#">Filosofia e Scienze dell'Educazione</a> > &nbsp;&nbsp; <a href="filosofia.html">Filosofia</a>
	        </div>
				</div>

        <header class="premessa">
					<div class="row">
						<div class="col-md-12">
							<h2 class="titoloSez"><a id="top">Filosofia</a></h2>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<img id="philo" class="img-responsive img-fluid" src="filo.jpg" alt="immagine tempio greco con scritta in greco" style="margin-left:43%;" />
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<h3>Laurea Triennale</h3>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">Il corso di laurea triennale in Filosofia si propone di dare agli studenti una panoramica generale
		            del pensiero filosofico, dall'antichit&agrave; ad ora, nella prospettiva di approfondire con gli studi specialistici il percorso che più interessa.
		            Il corso di laurea aspira a fornire agli studenti una padronanza del pensiero filosofico occidentale secondo le linee di una rigorosa criticit&agrave;
		            filologica e bibliografica. Mira inoltre a coonferire agli studenti gli strumenti per l'analisi dei problemi più diversi oltre che
		            all'uso delle modalit&agrave; argomentative, nella prospettiva di un giudizio critico sulle discipline oggetto di studio.
		            Alla fine del corso, i laureati in filosofia avranno sviluppato la capacit&agrave; di elaborare e analizzare discorsi, argomentazioni e pensieri,
		            oltre ad avere acquisito essenziali abilit&agrave; informatiche e competenze di base in due lingue straniere.
		          </p>
							<div class="opzioni"><a class="opzioniFac" href="#requisiti">requisiti di ammissione</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#professioni">profili professionali</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#formativo">percorso formativo</a>
						</div>
					</div>
          </div>
        </header>
        <hr />
        <section>
					<div class="row">
						<div class="col-md-12">
							<h3><a id="requisiti"></a>Requisiti di ammissione</h3>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">Il Corso di studi in Filosofia &egrave; ad accesso non programmato. Per essere ammessi al Corso di studi occorre essere in possesso
								di un diploma di scuola secondaria superiore di durata quinquennale o di altro titolo di studio conseguito all'estero,
								riconosciuto idoneo ai sensi delle leggi vigenti.
								Per poter frequentare lo studente dovr&agrave; essere in possesso di un’adeguata preparazione iniziale. In particolare dovr&agrave; aver maturato
								abilit&agrave; analitiche (abilit&agrave; di ragionamento logico), conoscenze relative alla storia e alla cultura occidentali che si possono acquisire
								negli studi secondari superiori e dovr&agrave; essere in grado di comprendere testi propedeutici allo studio della filosofia e delle scienze umane.
								Egli dovr&agrave;, inoltre, saper cogliere gli elementi strutturali di argomentazioni filosofiche e dei procedimenti che, da asserzioni di determinate
								premesse, portano a trarre determinate conclusioni.<br>
								ATTENZIONE: sebbene il corso non sia a numero progrmmato, sar&agrave; comunque necessario sostenere il Test di accertamento dei requisiti minimi (Tarm).
								La prova si svolger&agrave;  mediante strumento informatico, e preveder&agrave; la somministrazione di test a risposta multipla attraverso la rete Internet,
								sulla base di un vasto repertorio di domande conformi alle esigenze del Corso di studi. La prima parte conterr&agrave; domande di lingua italiana, grammatica, ortografia, sintassi. La seconda parte
								preveder&agrave; domande di cultura lessicale e di comprensione dei testi. Gli studenti insufficienti nella prima parte del test saranno avviati
								al recupero on-line dei debiti di italiano. Gli studenti insufficienti nella seconda parte del test saranno avviati a una settimana
								di lezioni di recupero di propriet&agrave; lessicali specifiche e comprensione del testo.
								Una volta soddisfatti tutti i requisiti richiesti dall'Universit&agrave;, si può procede con l'<a href="costi.html">immatricolazione</a> ed al pagamento delle
								<a href="costi.php">tasse</a>, senza i quali non si &egrave; studenti regolari.
							</p>
							<div class="opzioni"><a class="opzioniFac" href="#top">top</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#requisiti">requisiti di ammissione</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#professioni">profili professionali</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#formativo">percorso formativo</a>
							</div>
						</div>
					</div>
        </section>
        <hr />
        <section>
					<div class="row">
						<div class="col-md-12">
							<h3><a id="professioni">Profili professionali</a></h3>
						</div>
					</div>
          <div class="row">
          	<div class="col-md-12">
							<p class="descrizione">I laureati di questo corso potranno vantare competenze a capacit&agrave; trasversali adattabili in diversi ambiti profesionali: ad esempio
								avranno i requisiti per assumere compiti e funzioni nella Pubblica Amministrazione, in enti pubblici e privati, potranno trovare impiego
								nell'editoria, con particolare riferimento all'ambito umanistico, e nell'ambiente pubblicitario, nel campo della promozione culturale,
								della comunicazione pubblica e nell'insegnamento nella scuola secondaria.
								Il corso prepara inoltre a proseguire gli studi in lauree magistrali di ambito filosofico e di scienze storiche, politiche, religiose.
							</p>
          	</div>
          </div>

          <ul class="listaDescrizione list-group" style="width:50%; height:auto;">
            <li class="list-group-item"><a href="http://www.atlantedelleprofessioni.it/" title="link esterno">Atlante delle professioni</a></li>
            <li class="list-group-item"><a href="http://www.orizzontescuola.it/il-2017-sara-lanno-dei-concorsi-nella-scuola/" title="link esterno">Concorsi per insegnare</a></li>
            <li class="list-group-item"><a href="http://www.lavoricreativi.com/" title="link esterno">Lavori Creativi</a></li>
          </ul>
					<div class="row">
						<div class="col-md-12">
							<div class="opzioni"><a class="opzioniFac" href="#top">top</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#requisiti">requisiti di ammissione</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#professioni">profili professionali</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#formativo">percorso formativo</a>
							</div>
						</div>
					</div>

        </section>
        <hr />
        <section>
					<div class="row">
						<div class="col-md-12">
							<h3><a id="formativo">Percorso formativo</a></h3>
						</div>
					</div>
          <div class="row">
          	<div class="col-md-12">
							<p class="descrizione">Il curriculum di filosofia prevede lo studio di discipline filosofiche, storiche e teoriche. Rende possibile lo studio integrativo
		            delle discipline letterarie e linguistiche, psicologiche, storiche, etno-antropologiche e sociologiche, di materie scientifiche
		            complementari e della storia della scienza. La filosofia si confronta con la storiografia e la teoria politica, con la teologia
		            e gli studi religiosi. Riflette sull'arte, sul linguaggio e sulla comunicazione. Indaga i fondamenti logici del ragionamento
		            e ha importanti punti di contatto con le scienze fisico-matematiche, le discipline bio-mediche egli sviluppi delle scienze cognitive
		            contemporanee.
		          </p>
          	</div>
          </div>

          <br><br>

					<div class="row">
						<div class="col-md-12">
							<h4>Aree di apprendimento</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione"><strong>Area di apprendimento 1:</strong> storico-filosfico – storico-scientifico- storico-culturale<br>
								Insegnamenti volti ad acquisire conoscenze e competenze nei diversi ambiti della ricerca filosofica e della storia della cultura:
								storico-filosofico, teoretico, logico-filosofico-scientifico, estetico, etico-morale, storico- scientifico, storico-istituzionale,
								storico-artistico. Apprendimenti accertati attraverso: esami dei singoli insegnamenti, prove intermedie, test, attivit&agrave;, laboratori di
								lettura e scrittura volti ad applicare le conoscenze e le competenze acquisite.
							</p>
						</div>
					</div>
          <br>

					<div class="row">
						<div class="col-md-12">
							<p class="descrizione"><strong>Area di apprendimento 2:</strong> metodologico, teorico-tematico<br>
		            Insegnamenti volti ad acquisire conoscenze e competenze nei diversi ambiti della ricerca filosofica e della storia della cultura:
		            storico-filosofico, teoretico, logico-filosofico-scientifico, estetico, etico-morale, storico- scientifico, storico-istituzionale,
		            storico-artistico. Apprendimenti accertati attraverso: esami dei singoli insegnamenti, prove intermedie, test, attivit&agrave;, laboratori di
		            lettura e scrittura volti ad applicare le conoscenze e le competenze acquisite.
		          </p>
						</div>
					</div>

          <br>

					<div class="row">
						<div class="col-md-12">
							<p class="descrizione"><strong>Area di apprendimento 3:</strong> discipline affini alla filosofia<br>
		            Insegnamenti volti a suscitare e potenziare progressivamente la capacit&agrave; di comprendere i nessi teorici e i collegamenti storici tra la
		            filosofia e discipline diverse (letterature, discipline storiche, artistiche, scientifiche, psicologiche, pedagogiche demo-antropologiche, ecc.).
		            Attivit&agrave; che mettano lo studente in grado di applicare metodi interpretativi ed espositivi acquisiti nell'ambito della formazione filosofica a
		            testi complessi e contenuti culturali di argomento non strettamente filosofico, di scomporre, analizzare, sintetizzare, formalizzare un'argomentazione
		            complessa indipendentemente dallo specifico contenuto culturale. Insegnamenti e laboratori didattici orientati all'acquisizione e al corretto
		            uso dei computer e delle reti e alla conoscenza dei metodi di rappresentazione digitale dell'informazione e di elaborazione automatica dei dati
		            nel campo della ricerca umanistica.Apprendimenti accertati attraverso: esami dei singoli insegnamenti, prove intermedie, test, attivit&agrave;,
		            laboratori di lettura e scrittura volti ad applicare le conoscenze e le competenze acquisite.
		          </p>
						</div>
					</div>

          <br>

					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">Visita il <a href="http://filosofia.campusnet.unito.it/do/home.pl/View?doc=/pagine/informazioni_filosofia.html#percorso" title="link esterno alla pagina unito">sito ufficila</a> per prendere visione dell'offerta didattica della Laurea Triennale in Filosofia dell'Unito,
		            e trovare tutti gli aggiornamenti che ogni anno vengono apportati al piano didattico.
		          </p>
		          <div class="opzioni"><a class="opzioniFac" href="#top">top</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#requisiti">requisiti di ammissione</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#professioni">profili professionali</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a class="opzioniFac" href="#formativo">percorso formativo</a>
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
