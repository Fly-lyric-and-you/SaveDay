function openNavig() {
document.getElementById("myNavig").style.opacity = "1";
document.getElementById("myNavig").style.height = "100%";
}
setTimeout(openNavig, 4000);

function closeNavig() {
  document.getElementById("myNavig").style.opacity = "0";
  document.getElementById("myNavig").style.height = "0%";
}

/*---------------------------------------------------*/

function openNav() {
document.getElementById("myNav").style.width = "100%";
}


function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

/*---------------------------------------------------*/

function openNav1() {
document.getElementById("myNav1").style.width = "100%";
}


function closeNav1() {
  document.getElementById("myNav1").style.width = "0%";
}

/*---------------------------------------------------*/

function openNav2() {
document.getElementById("myNav2").style.width = "100%";
}


function closeNav2() {
  document.getElementById("myNav2").style.width = "0%";
}
/*---------------------------------------------------*/

function openNav3() {
document.getElementById("myNav3").style.width = "100%";
}


function closeNav3() {
  document.getElementById("myNav3").style.width = "0%";
}
/*---------------------------------------------------*/

function openNav4() {
document.getElementById("myNav4").style.width = "100%";
}


function closeNav4() {
  document.getElementById("myNav4").style.width = "0%";
}
/*---------------------------------------------------*/



//____________________________________________________//

var elem = document.documentElement;
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}

function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) { /* Safari */
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE11 */
    document.msExitFullscreen();
  }
}

//____________________________________________________//


 function requestFullScreen() {

  var el = document.body;

  // Supports most browsers and their versions.
  var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen 
  || el.mozRequestFullScreen || el.msRequestFullScreen;

  if (requestMethod) {

    // Native full screen.
    requestMethod.call(el);

  } else if (typeof window.ActiveXObject !== "undefined") {

    // Older IE.
    var wscript = new ActiveXObject("WScript.Shell");

    if (wscript !== null) {
      wscript.SendKeys("{F11}");
    }
  }
}


function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}






