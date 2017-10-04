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


	h2{
		font-size: 85%;
	}

	section{
		margin-top: 4em;
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

      <!--fine headre #superiore-->
      <a name="startcontent" id="startcontent"></a>

      <div id="corpo" class="container">
        <div class="row">
          <div id="briciole_pane">
            <a href="index.php">Home</a>&nbsp;&nbsp; > &nbsp;&nbsp; <a href="costi.php">Costi</a>
          </div>
        </div>


          <header class="premessa">
            <div class="row">
              <h2 class="titoloSez col-md-12">Costi ed Iscrizione</h2>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p class="intro">Scegliere un'universit&agrave; ed un corso di laurea vuol dire anche informarsi preventivamente sulle procedure d'iscrizione e sui costi che queste comportano:
                  in questa sezione ti spieghiamo ordinatamente come rispettare tutte le date e quanto costa effettivamente essere uno studente UniTO.
                </p>
              </div>
            </div>
          </header>

        <hr />
        <section>
          <div class="row">
						<div class="col-md-12">
							<h3>Il tuo corso &egrave; ad accesso programmato?</h3>
						</div>
          </div>
          <div class="row">
            <div class=" col-md-12">
              <p class="descrizione">Per <strong>immatricolarti ad un corso ad accesso programmato</strong> devi prima iscriverti e sostenere un <strong>test di ammissione</strong>, entro le date previste.
                Superato il test puoi poi direttamente passare alla fase di immatricolazione.
                Qui di seguito ti proponiamo l'elenco dei corsi ad accesso programmato, con il relativo link alla pagina ufficiale dell'Unito,
                ed una tabella riassuntiva dei costi d'iscrizione al test, le date di scadenza, ed il numero di posti previsti.
              </p>
            </div>
          </div>

          <div class="container">
            <div style="width: 50%; height: auto;">
              <table class="tab table">
                <caption>tabella riassuntiva di date e tasse per i test di ammissione</caption>
                <tr>
                  <th>Corsi di Laurea</th>
                  <th>Tassa Iscrizine</th>
                  <th>Data Iscrizione</th>
                  <th>Data Esame</th>
                </tr>
                <tr>
                  <td><a href="https://www.unito.it/didattica/offerta-formativa/corsi-di-studio/corsi-di-studio-ad-accesso-programmato" title="link esterno alla pagina di unito">
                    Corsi di Laurea Triennale</a>
                  </td>
                  <td>&euro; 51.5</td>
                  <td>dal 15/07/2016 09:30 al 12/08/2016 12:30 (da web)</td>
                  <td>dal 09/11/2016 09:30 al 10/11/2016 15:00</td>
                </tr>
                <tr>
                  <td><a href="https://www.unito.it/didattica/offerta-formativa/corsi-di-studio/corsi-di-studio-ad-accesso-programmato" title="link esterno alla pagina di unito">
                    Corsi di Laurea Magistrale a Ciclo Unico</a>
                  </td>
                  <td>&euro; 51.5</td>
                  <td>dal 15/07/2016 09:30 al 12/08/2016 12:30 (da web)</td>
                  <td>dal 09/11/2016 09:30 al 10/11/2016 15:00</td>
                </tr>
                <tr>
                  <td><a href="https://www.unito.it/didattica/offerta-formativa/corsi-di-studio/corsi-di-studio-ad-accesso-programmato" title="link esterno alla pagina di unito">
                    Corsi di Laurea Magistrale</a>
                  </td>
                  <td>&euro; 51.5</td>
                  <td>ogni corso prevede una data specifica. Consula l'elenco.</td>
                  <td>ogni corso prevede una data specifica. Consula l'elenco.</td>
                </tr>
                <tr>
                  <td><a href="https://esse3.unito.it/Concorsi/DidaConcorsi.do?cds_id=10473&aa_off_id=2016" title="link esterno alla pagina di unito">
                    Programma MD/PhD</a>
                  </td>
                  <td>&euro; 0</td>
                  <td>dal 01/08/2016 09:30 al 01/10/2016 23:59 (da web) </td>
                  <td>dal 02/11/2016 09:30 al 11/11/2016 15:00</td>
                </tr>
                <tr>
                  <td><a href="https://esse3.unito.it/Concorsi/DidaConcorsi.do?cds_id=10781&aa_off_id=2016" title="link esterno alla pagina di unito">
                    Scuola di studi superiori: primo anno</a>
                  </td>
                  <td>&euro; 51.5</td>
                  <td>dal 21/07/2016 09:30 al 09/09/2016 12:30 (da web)</td>
                  <td>dal 27/09/2016 09:30 al 10/11/2016 15:00</td>
                </tr>
              </table>
            </div>
          </div>

          <br><br>
          <div class="row">
            <div class="col-md-12">
              <p class="descrizione">Una volta superato l'Esame dovrai:</p>
              <ul class="list">
                <li>Immatricolarti</li>
                <li>Pagare le Tasse di Iscrizione</li>
              </ul>
            </div>
          </div>

        </section>
        <hr />
        <section>
          <div class="row">
						<div class="col-md-12">
							<h3>Corsi ad Accesso Libero</h3>
						</div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="descrizione">I corsi ad accesso libero non prevedono un test di ammissione ma in molti casi bisogna comunque sostenere un <strong>test di accertamento dei requisiti minimi</strong>.
                Non appena il test &egrave; superato, si può accedere all'immatricolazione.
                Ecco l'elenco dei Dipartimenti che prevedono tale test ed il link alla pagina ufficiale.
              </p>
            </div>
          </div>
          <div class="row">
            <ul class="list list-group">
              <li class="list-group-item">Scuola di Scienze della Natura</li>
              <li class="list-group-item">Scuola di Scienze Giuridiche, Politiche ed Economico-Sociali</li>
              <li class="list-group-item">Scuola di Agraria e Medicina Veterinaria</li>
              <li class="list-group-item">Dipartimento di Scienza e Tecnologia del Farmaco</li>
            </ul>
          </div>

          <div class="row">
            <div class="col-md-12">
              <p class="descrizione">Una volta superato il test di accertamento dei requisiti minimi, dovrai procedere come  spiegato nella sezione
                Immatricolazione.
              </p>
            </div>
          </div>
        </section>
        <hr />

        <section>
          <div class="row">
            <h3 class="col-md-12">Immatricolazione</h3>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="descrizione col-md-12">Superati i test necessari, puoi procedere all'Immatricolazione</p>
            </div>
          </div>
          <div style="width:50%; height:auto;">
            <ol class="list col-md-12">
              <li>Effettua il Login sul Portale di Ateneo</li>
              <li>
                seleziona la voce "Iscrizioni", che trovi nel menù in alto a sinistra, e successivamente la voce "Immatricolazione"
                per procedere alla compilazione online della domanda. Nel corso della compilazione della domanda dovrai inserire i seguenti documenti:
                <ul>
                  <li>una fototessera;</li>
                  <li>copia di un documento d’identit&agrave; in corso di validit&agrave;;</li>
                  <li>copia del codice fiscale.</li>
                </ul>
              </li>
              <li>Stampa la domanda di immatricolazione e il MAV per il pagamento della tassa</li>
              <li>Paga la Tassa.ATTENZIONE: il pagamento va effettuato entro le ore 16.00 del 5 ottobre 2016;
                dopo tale ora infatti il pagamento avr&agrave; data di valuta del giorno seguente
              </li>
              <li> Allega domanda di immatricolazione compilata e firmata in tutte le sue parti e la ricevuta del versamento della tassa universitaria
                all'interno della sezione "Allegati Carriera" in "Iscrizioni".
              </li>
            </ol>
          </div>
        </section>
        <hr />

        <section>
          <div class="row">
						<div class="col-md-12">
							<h3>Tasse</h3>
						</div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="descrizione">Per usufruire dei Servizi Universitari, quali lezioni, esami, mense, studentati, visogna ssere in regola con il pagamento della contribuzione
                studentesca suddivisa in <strong>due rate</strong> per ogni anno accademico.I pagamenti sono effettuati con modulo MAV
                che dev'essere pagato attraverso il servizio di Internet Banking o presso gli sportelli di qualsiasi Istituto Bancario e deve essere stampato
                accedendo alla MyUniTO con le proprie credenziali, seleziona la voce "Tasse" tra i servizi in evidenza.
                <strong>ATTENZIONE</strong>: nel caso in cui l'importo non sia congruente con la propria posizione, NON STAMPARE il modulo MAV e contattare la Segreteria Studenti di appartenenza.
              </p>
            </div>
          </div>

          <div class="row">
            <h4 class="col-md-12">Rate</h4>
          </div>
          <div class="row">
            <div class="col-md-12">
                <p class="descrizione col-md-12">L'UniTO prevede il pagamento delle tasse universitarie in due rate</p>
            </div>
          </div>
          <ul class="list list-group">
            <li class="list-group-item">Prima Rata: per l'a.a. 2016-2017 &egrave; Euro 494,50</li>
            <li class="list-group-item">
              Seconda Rata: &egrave; differente a seconda dei casi
              <ul>
                <li>tempo pieno o tempo parziale</li>
                <li>condizione economico-patrimoniale quale risulta dal valore ISEE: si può infatti avere accesso ad una riduzione a seconda delle Fasce Contributive</li>
              </ul>
            </li>
          </ul>

          <div class="row">
            <h4 class="col-md-12">Fasce Contributive</h4>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="descrizione col-md-12">In relazione alla propria condizione economica (valore ISEE) ogni studente UniTO può accedere a delle agevolazioni fiscali
                ed a dei contributi.
              </p>
            </div>
          </div>

          <br><br>
          <div class="table-responsive">
            <table class="tab table">
              <caption>Studenti iscritti a corsi di studio di I e II livello, con impegno FULL-TIME.
                Studenti iscritti a corsi di studio ante DM 509/99 IN CORSO o RIPETENTI
              </caption>
              <tr>
                <th>Valore ISEE</th>
                <th>Importo Seconda Rata</th>
              </tr>
              <tr>
                <td>minore a 15.000</td>
                <td>0 euro</td>
              </tr>
              <tr>
                <td>da 15.000,01 a 50.000</td>
                <td>(ISEE*0,025567 + 15,6393) - 325 euro</td>
              </tr>
              <tr>
                <td>da 50.000,01 a 85.000</td>
                <td>(ISEE*0,034812 - 418,600348) - 325 euro</td>
              </tr>
              <tr>
                <td>> 85.000</td>
                <td> 2215,43 euro</td>
              </tr>
            </table>
          </div>
          <br><br>
          <div class="table-responsive">
            <table class="tab table">
              <caption>Studenti iscritti a corsi di studio di I e II livello, con impegno PART-TIME /
                Studenti iscritti a corsi di studio ante DM 509/99 FUORI CORSO
              </caption>
              <tr>
                <th>Valore ISEE</th>
                <th>Importo Seconda Rata</th>
              </tr>
              <tr>
                <td>minore a 15.000</td>
                <td>0 euro</td>
              </tr>
              <tr>
                <td>da 15.000,01 a 50.000</td>
                <td>(ISEE*0,025567 + 15,6393) - 325 euro</td>
              </tr>
              <tr>
                <td>da 50.000,01 a 85.000</td>
                <td>(ISEE*0,034812 - 418,600348) - 325 euro</td>
              </tr>
              <tr>
                <td>> 85.000</td>
                <td> 1580,83 euro</td>
              </tr>
            </table>
          </div>
          <br><br>

          <div class="row">
            <div class="col-xs-12">
              <p class="descrizione"><a href="https://www.unito.it/sites/default/files/reg_tasse_2016_2017.pdf" title="link esterno alla pagina di unito">Qui il Regolamento ufficiale UniTO</a></p>
            </div>
          </div>
          <br><br>
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

  <script src="js/bootstrap.min.js"></script>

  </body>
</html>
