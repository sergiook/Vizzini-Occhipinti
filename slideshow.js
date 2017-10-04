//var temp = new Array("slideshow/torino2.jpg", "slideshow/campus2.jpg", "slideshow/studenti2.jpg", "slideshow/orientamente2.jpg");
var temp=new Array();

temp[0]= new Image();
temp[0].src="slideshow/torino2.jpg";

temp[1]= new Image();
temp[1].src="slideshow/campus2.jpg";

temp[2]= new Image();
temp[2].src="slideshow/studenti2.jpg";

temp[3]= new Image();
temp[3].src="slideshow/orientamente2.jpg";

var immagineCorrente = 0;

function sinistra(){
  immagineCorrente = immagineCorrente - 1;
	if (immagineCorrente < 0){
		immagineCorrente = temp.length - 1;
	}
	document.mostrata.src = temp[immagineCorrente].src;
}


function destra(){
	immagineCorrente = (immagineCorrente + 1)%temp.length;
	document.mostrata.src = temp[immagineCorrente].src;
}
