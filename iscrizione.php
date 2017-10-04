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

    <script type="text/javascript">
    $(document).ready(function() {


      function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
      }

      function correctCaracter(text){
        var regex = /^[a-z ,.'-]+$/i;
        return regex.test(text)
      }


      $('#iscriviti').click(function(){
        var dati_obbligatori={
          nome: $('#nome').val(),
          cognome: $('#cognome').val(),
          email: $('#email').val(),
          userId: $('#useriscrizione').val(),
          password: $('#passwiscrizione').val()
        }

        var avviso='';
        var erroreCaratteri='';

        $('.addErr').remove();

        $.each( dati_obbligatori, function( key, value ) {
          console.log(key);
          if(value==''){
            avviso=avviso + key+ " ";
          }
        });
        if(avviso){
          $('#iscrizione').append('<div style="color:red" class="addErr"><p>Errore ' + avviso + '</p></div>');
        }

        isEmail(dati_obbligatori.email);
        if(!isEmail(dati_obbligatori.email)){
          erroreCaratteri= erroreCaratteri + "email "
        };

        correctCaracter(dati_obbligatori.nome);
        if(!correctCaracter(dati_obbligatori.nome)){
          erroreCaratteri= erroreCaratteri + 'nome' + " "
        };

        correctCaracter(dati_obbligatori.cognome);
        if(!correctCaracter(dati_obbligatori.cognome)){
          erroreCaratteri= erroreCaratteri + 'cognome' + " "
        };

        correctCaracter(dati_obbligatori.userId);
        if(!correctCaracter(dati_obbligatori.userId)){
          erroreCaratteri= erroreCaratteri + 'userId' + " "
        };

        correctCaracter(dati_obbligatori.password);
        if(!correctCaracter(dati_obbligatori.password)){
          erroreCaratteri= erroreCaratteri + 'password' + " "
        };

        if(erroreCaratteri){
          $('#iscrizione').append('<div style="color:red" class="addErr"><p>Errore caratteri nei seguenti campi: ' + erroreCaratteri + '</p></div>');
        }

				if(!avviso && !erroreCaratteri){
					console.log('action');
					$('#formiscrizione').attr('action', 'doIscrizione.php');
				}//permette di chiamare la pagina php solo se non ci sono errori,
				//altrimenti ricarica pagina e non fa vedere errori!!
      });



      $('#accedi').click(function(){
        var dati_obbligatori_access={
          userAccess: $('#user').val(),
          passwordAccess: $('#psw').val()
        }

        var printErrorAccess={
          userAccess: 'User Id',
          passwordAccess: 'Password'
        }

        console.log("obj");

        var avvisoAccess='';
        var erroreCaratteriAccess='';

        $('.addErrAccess').remove();

        $.each( dati_obbligatori_access, function( key, value ) {
          if(value==''){
            avvisoAccess=avvisoAccess + printErrorAccess[key]+ " ";
          }
          else {
            correctCaracter(value);
            if(!correctCaracter(value)){
              erroreCaratteriAccess= erroreCaratteriAccess + printErrorAccess[key] + " "
            };
          }
        });

        if(avvisoAccess){
          $('#accesso').append('<div style="color:red" class="addErrAccess"><p>Errore ' + avvisoAccess + '</p></div>');
        }

        if(erroreCaratteriAccess){
          $('#accesso').append('<div style="color:red" class="addErrAccess"><p>Errore caratteri nei campi:  ' + erroreCaratteriAccess + '</p></div>');
        }

				if(!avvisoAccess && !erroreCaratteriAccess){
					console.log('action');
					$('#formaccesso').attr('action', 'doAccedi.php');
				}

      });

    });
    </script>
    <style>

      body{
        text-align: center;
        font-size:12px;
        font:Arial,Helvetica,sans-serif;
      }

      /*footer,
      header{
        width:auto;
        height:15%;
      }*/

      footer ul#informazioni{
      list-style-type:none;
      margin-top: 5%;
      }

      footer{
        background-color:#D9D9D9;

      }

      #logo{
        width: 10%;
        height: 10%;
        margin-top: 0px;
      }

      /*p{
        font-size: 10px;
      }*/

      #user, #useriscrizione{
        margin-right: 2%;
      }

      input{
        margin-top: 2%;
      }

      input[type=text]{
      border:1px solid #FFBC00;
      }


      #accesso{
				margin-top: 5%;
      }

			#iscriviti{
				margin-top: 2%;
			}

			.avatar{
			  width: 5%;
			  height: 5%;
			}

			fieldset{
				border:1px solid #FFBC00;
			}

    </style>
  </head>

  <body>
		<div class="container-fluid">
				<div class="row" style="margin:7%;">
					<h1 class="col-sm-4 col-xs-12 align-middle">orientaTO</h1>
					<div id="logoOrientato" class="col-sm-8 hidden-xs" >
						<img style="width:40%; height:auto; margin-left: 50%;" class="img-responsive img-fluid" src="sky.jpg" alt="logo skyline Torino" />
					</div>
				</div>
		</div>

    <div id="container" class="container">

      <div id="popUp">

        <div id="iscrizione">
          <h4 class="text-center">Se vuoi riceve le nostre News o partecipare alla nostra Community Iscriviti qui!</h4>

          <form id="formiscrizione" method="post" action="javascript:void(0)">
						<fieldset>
							<input id="nome" type="text" name="nome" value="Nome" onfocus="this.setAttribute('value','')">
	            <br><br>
	            <input id="cognome" type="text" name="cognome" value="Cognome" onfocus="this.setAttribute('value','')">
	            <br><br>
	            <input id="email" type="text" name="email" value="Email" onfocus="this.setAttribute('value','')">
	            <br><br>
	            <input id="useriscrizione" type="text" name="userid" value="UserId" onfocus="this.setAttribute('value','')">
	            <input id="passwiscrizione" type="password" name="password" value="Password" onfocus="this.setAttribute('value','')">
	            <br><br>
						</fieldset>
						<h4 class="text-center">Scegli il tuo avatar</h4>
						<fieldset style="padding:5%;">
							<div>
								<img class="avatar" src="icons/img1.png" /><input checked class="scelta" type="radio" name="avatar" value="img1">
								<img class="avatar" src="icons/img2.png" /><input class="scelta" type="radio" name="avatar" value="img2">
								<img class="avatar" src="icons/img3.png" /><input class="scelta" type="radio" name="avatar" value="img3">
							</div>
							<div>
								<img class="avatar" src="icons/img4.png" /><input class="scelta" type="radio" name="avatar" value="img4">
								<img class="avatar" src="icons/img5.png" /><input class="scelta" type="radio" name="avatar" value="img5">
								<img class="avatar" src="icons/img6.jpg" /><input class="scelta" type="radio" name="avatar" value="img6">
							</div>
							<div>
								<img class="avatar" src="icons/img7.png" /><input class="scelta" type="radio" name="avatar" value="img7">
								<img class="avatar" src="icons/img8.png" /><input class="scelta" type="radio" name="avatar" value="img8">
								<img class="avatar" src="icons/img9.png" /><input class="scelta" type="radio" name="avatar" value="img9">
							</div>
							<div>
								<img class="avatar" src="icons/img10.png" /><input class="scelta" type="radio" name="avatar" value="img10">
								<img class="avatar"src="icons/img11.png" /><input class="scelta" type="radio" name="avatar" value="img11">
								<img class="avatar" src="icons/img12.png" /><input class="scelta" type="radio" name="avatar" value="img12">
							</div>
						</fieldset>
            <button id="iscriviti" type="submit">Iscriviti</button>
          </form>
        </div>


        <div id="accesso">
          <h4 class="text-center">oppure se sei già Iscritto</h4>
          <form id="formaccesso" method="post" action="javascript:void(0)">
            <input id="user" type="text" name="useridaccess" value="UserId" onfocus="this.setAttribute('value','')">
            <input id="psw" type="password" name="passwordaccess" value="Password" onfocus="this.setAttribute('value','')">
						<br><br>
						<button id="accedi" type="submit">Accedi</button>
          </form>

        </div>

      </div>
      <!--fine div popUp-->
      <footer>
        <ul id="informazioni">
          <li>Rosaria Vizzini&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sergio Occhipinti</li>
          <li><a href="mailto:rosaria.vizzini@gmail.com">rosaria.vizzini@gmail.com</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="mailto:sergio.occhipinti@unito.it">sergio.occhipinti@unito.it</a></li>
          <li><a href="sitemap.html" accesskey="9" tabindex="9" title="mappa del sito">Mappa del sito</a></li>
          <li><a href="dichiarazione_di_accessibilita.html" accesskey="0" title="dichiarazione di accessibilità">Dichiarazione di Accessibilit&agrave;</a></li>
        </ul>

    		<a href="http://www.w3.org/WAI/WCAG2AAA-Conformance" title="Explanation of WCAG 2.0 Level Triple-A Conformance">
        <img id="imgfooter" src="http://www.w3.org/WAI/wcag2AAA" alt="Level Triple-A conformance,
         W3C WAI Web Content Accessibility Guidelines 2.0"></a>
      </footer>
    </div>
    <!--fine div container-->
  </body>
</html>
