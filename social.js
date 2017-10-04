function twitter(){
  var share_url="https://twitter.com/intent/tweet?text=orientaTO&hashtags=orientaTO,orientamento,Torino&url=";
  var url_corrente=window.location.href;
  window.open(share_url+url_corrente);
}

function facebook(){
var share_url="https://www.facebook.com/sharer/sharer.php?u=";
var url_corrente=window.location.href;
window.open(share_url+url_corrente);
}
