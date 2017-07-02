var main=function(){

}

function detectmob() { 
 if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
    return true;
  }
 else {
    return false;
  }
}

window.onresize = function(event) {
resizeDiv();
}


function resizeDiv() {
	vpw = $(window).width();
	vph = $(window).height();

	m=detectmob()
}


$(document).ready(main)
$(document).ready(resizeDiv)