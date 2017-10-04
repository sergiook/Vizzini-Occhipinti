function ricerca(){
  console.log('ciao');
  var testo_utente=document.getElementById('cerca').value;
  //var testo_utente='filosofia';
  var trova={
  'filosofia.html':['filosofia','laurea','laurea triennale','triennale','studi umanistici','scienze umane','umanismo','studi filosofici'],
  'costi.html':['tasse','costi','rate','pagamento','modalità pagamento','iscrizione'],
  'dichiarazione_di_accessibilita.html':['dichiarazione di accessibilità', 'accessibilità', 'accesskey'],
  'filosofia_scienzedelleducazione.html':['dipartimento di filosofia e scienze dell\'Educazione', 'filosofia e scienze dell\'educazione','facoltà filosofia','facoltà scienze dell\'educazione'],
  'form.html':['domanda','messaggio','messaggi','scrivi messaggio','problema','problemi','pareri','form'],
  'index2.html':['home'],
  'percheUnito.html':['reputazione', 'reputazione unito', 'qualità università','perché scegliere unito'],
  'segreteria.html':['segreteria', 'uffici', 'uffico', 'sedi', 'orari','info','informazioni'],
  'sitemap.html':['mappa', 'indice', 'mappa del sito', 'mappa sito','map'],
  'studente_internazionale.html':['studente internazionale', 'international student', 'apply','international','visa','language certification','language']
  }

  
  var lunghezza_chiave=Object.keys(trova).length;

  var lista_chiavi= Object.keys(trova);//forma array delle chiavi oggetto
  var trovato;

  for(i=0;i<lunghezza_chiave;i++ ){
    var chiave = lista_chiavi[i]
    var lista_parole = trova[lista_chiavi[i]];//forma un array con lista delle parole di ogni array di trova
    for(x=0; x<lista_parole.length; x++){
      console.log(x,lista_parole,lista_parole[x]);
      if (lista_parole[x]==testo_utente){
        trovato=chiave
      }
    }
  }

  if (trovato){
    var x=window.location.href.split('/');//restituisce array con elementi separati da /
    x.pop();//toglie ultimo elemento array
    var y=x.join('/');//riunisce elementi array x in una stringa tramite /
    window.open(y+'/'+ trovato);
  } else {
    alert ("Non è stato trovato nessun risultato per " +'"' + testo_utente+'"');
  }
}
