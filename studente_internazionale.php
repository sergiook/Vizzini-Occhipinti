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
		          <a href="index.php">Home</a>&nbsp;&nbsp; > &nbsp;&nbsp; <a href="studente_internazionale.php">Sei Studente Straniero?</a>
		        </div>
					</div>
				</div>

        <header class="premessa">
					<div class="row">
						<div class="col-md-12">
							<h2 class="titoloSez">Are you an international student?</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="intro">Are you an international student and would you like to study in Turin? You are in the right place.
		            Here you will find all you need to know about italian university system and enjoy your adventure in Torino.
		          </p>
						</div>
					</div>
        </header>
        <hr />

        <section>
					<div class="row">
						<div class="col-md-12">
							<h3>The Bachelor</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">The bachelor's degree (called in Italy "laurea triennale, litteraly three-year degree)is something similar
								to the european one. It has the objective of ensuring the students an adequate knowladge of general scientific or huminstic methods
								and contents as well as specific professional knowledge.It lasts just three year and it can be followed by two kind of master:
								the firs level master and the second level master.Minimum requirement for access is the high school certification.
							</p>
						</div>
					</div>
        </section>
        <section>
					<div class="row">
						<div class="col-md-12">
							<h3>Second Level Master</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">If you have a bachelr's degree you have access to the second level master (that in Italy is really different from the idea of master in Europe).
		            Master in Italy aims to provide students an advanced level of education about an highly qualified activity in specific areas. The Master's degree courses last
		            two years and to achieve the title of Master's degree the student must have acquired 120 credits. Access is by a bachelor's degree or other qualification
		            obtained abroad and recognized as valid. The Master's degree is the Master of Science of the European university system.
		          </p>
						</div>
					</div>
        </section>

        <section>
					<div class="row">
						<div class="col-md-12">
							<h3>One-cycle faculties</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">Some faculties, for example Medicine, Pharmacy, Law, are not divided in bachelor and master, but they are organised in one cycle of five years.
		            To achieve the degree, students must have acquiredr a total number of 300 or 360 CFU.
		          </p>
						</div>
					</div>
        </section>
        <hr />
        <header class="premessa">
					<div class="row">
						<div class="col-md-12">
							<h3>How to apply at the University of Torino</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">If you are an international student and you want to apply to the University of Torino, you have to read below and follow
		            the indication concerning your situatin.
		          </p>
						</div>
					</div>
        </header>
        <section>
					<div class="row">
						<div class="col-md-12">
							<h4>You are an European Student or a non European student with regular visa?</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">You have to be:</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<ul class="list">
		            <li>citizen of one of the following european countries:
		              Austria, Belgio, Bulgaria, Cipro, Croazia, Danimarca, Estonia, Finlandia, Francia, Germania, Regno Unito, Grecia, Irlanda,
		              Italia, Lettonia, Lituania, Lussemburgo, Malta, Olanda, Polonia, Portogallo, Repubblica Ceca, Romania, Slovacchia, Slovenia,
		              Spagna, Svezia, Ungheria;
		            </li>
		            <li>citizen in Norway, Iceland, Liechtenstein, Switzerland and the Republic of San Marino;</li>
		            <li>student in possession of regular visa.</li>
		          </ul>
		          <br>
		          <p class="descrizione">So you can follow the standard procedure explained <a href="costi.php">here</a> and add the following documents:</p>
		          <ul class="list">
		            <li>hight school certification or an equivalent certification with the official translation in talian, legalized, and declaration of value, emitted by the Italian diplomatic and consular representation;</li>
		            <li>bachelor's degree and the documentation of your university career (just if you want to apply for master);</li>
		            <li>certification of entrance examination and the official traslation;</li>
		            <li>copy of Codice Fiscale;</li>
		            <li>identity card;</li>
		            <li>visa.</li>
		          </ul>
						</div>
					</div>
        </section>
        <section>
					<div class="row">
						<div class="col-md-12">
							<h4>You are a student inhabitant in a non european country?</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">For the extra eurpean student there are a limited number of plce for each courses,reserved every year to foreign people.<br>
		            You must fill out the <a href="https://www.uniquest.unito.it/index.php/822932?lang=it" title="link esterno">online application</a> and present your pre-enrollment application at the diplomatic or consular representation,
		            within the period determined by the Ministry of Education, University and Research (MIUR)(usually between April and June).
		            In case of positive evaluation of your online application, you will be declared suitability for enrollment so that you can apply for a visa for studies
		            necessary for entry in Italy.
		            The effective enrollment at the university courses takes place only after completing the procedures and passed the test admission interviews (if there is one).
		            <strong>ATTENTION</strong>:the prior acceptance of the University does not replace the pre-enrollment which takes place exclusively through diplomatic or consular representation.
		          </p>
						</div>
					</div>
        </section>
        <section>
					<div class="row">
						<div class="col-md-12">
							<h4>Language Certification</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">If you are a foreign student, the University of Torino proposes there an italian language course, totally free but compulsory.
		            For more details about course and how to apply, please visit the <a href="https://www.unito.it/internazionalita/studenti-e-ospiti-internazionali/studenti-internazionali/iscrizione-studenti-0" title="link esterno alla pagina unito">
		            specific page</a> or read the <a href="#language">section below</a>.
		          </p>
						</div>
					</div>
        </section>
        <hr />

        <header class="premessa">
					<div class="row">
						<div class="col-md-12">
							<h3><a id="language">Italian language courses</a></h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">If you want to learn italian language, the university of Torino provides a summer program course (lasting 3 to 5 weeks)
		            for International students. After an assessment test, students will be divided into small groups according to three levels (elementary, intermediate and advanced).
		            Teachers are professional mother-tongue and students can obtain course credits (European levels A2, B1, and B2).
		            Take a look!
		          </p>
						</div>
					</div>
        </header>
        <section>
					<div class="row">
						<div class="col-md-12">
							<ul class="list">
		            <li><a href="http://www.ipa.unito.it/" title="link esterno">IPA TORINO</a></li>
		            <li><a href="http://international.polito.it/it/informazioni_pratiche/imparare_l_italiano" title="link esterno">Politecnico courses</a></li>
		            <li><a href="http://www.interculturatorino.it/" title="link esterno">Intercultural Centre of Torino</a></li>
		          </ul>
						</div>
					</div>
        </section>
        <section>
					<div class="row">
						<div class="col-md-12">
							<h3>Language Tandem</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">If you are looking for a more free situation rather than the language courses, there are a lot of pssibility to learn or improve
		            your italian, for example the language tandem. A language tandem is just a meeting in a bar or in a pub with someone who likes you want to improve another languages.
		            Here we will show some possibilities for you.
		          </p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<ul class="list">
								<li><a href="http://www.aegeetorino.com/find-your-tandem" title="link esterno">AEGEE TORINO</a></li>
								<li><a href="http://it.openlanguageexchange.com/scambio-di-lingua-in_Torino.html" title="link esterno">open language exchange</a></li>
							</ul>
						</div>
					</div>
        </section>
        <hr />

        <header class="premessa">
					<div class="row">
						<div class="col-md-12">
							<h3>Students Organisations</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione">At the University of Torino and at the Politecnico, Students Organisations are the way for students to partecipates to the university
		            organisation policy: to advance proposals to the University bodies or just to have informations. Student associations provide spokeswoman
		            for each course and for students of foreign countries.<br> Here you can find the list of the official students Organisation and their contacts.
		          </p>
						</div>
					</div>

          <br><br>
        </header>
        <section>
					<div class="row">
						<div class="col-xs-12">
							<h4>Iranian Students’ Association of Polytechnic University of Turin</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione"><a href="http://isaput.blogspot.it/" title="link esterno">ISAPUT</a><br>
		            <a href="mailto:iranianstudents@studenti.polito.it" title="mail">iranianstudents@studenti.polito.it</a><br>
		          </p>
						</div>
					</div>

          <br>

					<div class="row">
						<div class="col-md-12">
							<h4>Association of Chinese Students of the Politecnico</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione"><a href="https://didattica.polito.it/associazioni/associazioni_CSSA.html" title="link esterno">CSSA.Polito </a><br>
		            <a href="mailto:CSSA@studenti.polito.it" title="mail">CSSA@studenti.polito.it</a>
		          </p>
						</div>
					</div>

          <br>

					<div class="row">
						<div class="col-md-12">
							<h4>Association des Etudiants Camerounais de Turin</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione"><a href="http://www.aect-cameroun.it/" title="link esterno">AECT</a><br>
		            <a href="mailto:aect@studenti.polito.it" title="mail">aect@studenti.polito.it</a>
		          </p>
						</div>
					</div>

          <br>

					<div class="row">
						<div class="col-md-12">
							<h4>Organiztion of Pakistani Students</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione"><a href="https://opstorino.wikispaces.com/" title="link esterno">O.P.S.</a><br>
		            <a href="OPS@studenti.polito.it" title="mail">OPS@studenti.polito.it</a>
		          </p>
						</div>
					</div>

          <br>

					<div class="row">
						<div class="col-md-12">
							<h4>Marocco, Sofarae Assalam</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione"><a href="mailto:SOFARAE_ASSALAM@studenti.polito.it" title="mail">SOFARAE_ASSALAM@studenti.polito.it</a>
		          </p>
						</div>
					</div>

          <br>

					<div class="row">
						<div class="col-md-12">
							<h4>Brasile, War&agrave;</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="descrizione"><a href=" http://www.wara.it/" title="link esterno">WARA</a><br>
		            <a href="mailto:OPS@studenti.polito.it">OPS@studenti.polito.it</a>
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
