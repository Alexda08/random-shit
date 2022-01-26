/*RELLOTGE*/
function mourellotge() {


    var momentActual = new Date()
    var hora = momentActual.getHours()
    var minut = momentActual.getMinutes()
    var segon = momentActual.getSeconds()
    var str_segon = new String(segon)
    if (str_segon.length == 1)
        segon = "0" + segon

    str_minut = new String(minut)
    if (str_minut.length == 1)
        minut = "0" + minut

    str_hora = new String(hora)
    if (str_hora.length == 1)
        hora = "0" + hora

    var horaImprimible = hora + " : " + minut + " : " + segon

    document.rellotge.rellotge.value = horaImprimible

    setTimeout("mourellotge()", 1000)
}
/*ALEX*/
//registrar

function register() {

  var pass1 = document.getElementById('passwordtextbox').value;
  var pass2 = document.getElementById('passwordtextbox2').value;
  var lenght = pass2.length;


if (lenght >= 6) {
  if (pass1 === pass2) {
    if ($consulta['user'] === $usuari) {
      alert("registrat correctament")
    }
  }else {
    alert("Les contrasenyas no coincideixen")
  }
}else {
  alert("La contrasenya ha de tenir 6 o mes caracters")
  }
}

/*inici sesio*/


function inicisesio() {
/*
    var user = document.getElementById("user").value;

    var pass = document.getElementById("password").value;


    if (user == (usertext || 'alex') && pass == (passtext || '1234')) {
        window.open("calculadora.html");
    } else {

        alert('Paràmetres incorrectes');
  }
  */
}


function reset() {
    document.getElementById("user").value = "";
    document.getElementById("password").value = "";
    document.getElementById("usertextbox").value = "";
    document.getElementById("passwordtextbox").value = "";
    document.getElementById("passwordtextbox2").value = "";
}

/*CALCULADORA*/

var operacio = "";
var operant1 = "";
var operant2 = "";

function calc() {

    var num0 = document.getElementById("zero");
    var num1 = document.getElementById("un");
    var num2 = document.getElementById("dos");
    var num3 = document.getElementById("tres");
    var num4 = document.getElementById("quatre");
    var num5 = document.getElementById("cinc");
    var num6 = document.getElementById("sis");
    var num7 = document.getElementById("set");
    var num8 = document.getElementById("vuit");
    var num9 = document.getElementById("nou");
    var restablir = document.getElementById("borrar");
    var suma = document.getElementById("sumar");
    var resta = document.getElementById("restar");
    var multiplica = document.getElementById("multiplicar");
    var dividi = document.getElementById("dividir");
    var resoldre = document.getElementById("igual");


    num0.onclick = function(e){
      document.getElementById("pantalla").innerHTML = pantalla.textContent + "0";
    }

    num1.onclick = function(e){
      document.getElementById("pantalla").innerHTML = pantalla.textContent + "1";
    }

    num2.onclick = function(e){
      document.getElementById("pantalla").innerHTML = pantalla.textContent + "2";
    }

    num3.onclick = function(e){
      document.getElementById("pantalla").innerHTML = pantalla.textContent + "3";
    }

    num4.onclick = function(e){
      document.getElementById("pantalla").innerHTML = pantalla.textContent + "4";
    }

    num5.onclick = function(e){
      document.getElementById("pantalla").innerHTML = pantalla.textContent + "5";
    }

    num6.onclick = function(e){
      document.getElementById("pantalla").innerHTML = pantalla.textContent + "6";
    }

    num7.onclick = function(e){
      document.getElementById("pantalla").innerHTML = pantalla.textContent + "7";
    }

    num8.onclick = function(e){
      document.getElementById("pantalla").innerHTML = pantalla.textContent + "8";
    }

    num9.onclick = function(e){
      document.getElementById("pantalla").innerHTML = pantalla.textContent + "9";
    }

    restablir.onclick = function(e){
      document.getElementById("pantalla").innerHTML = "";
    }

    suma.onclick = function(e){
      operant1 = pantalla.textContent;
      operacio = "+";
      document.getElementById("pantalla").innerHTML = operant1 + " + ";
    }

    resta.onclick = function(e){
      operant1 = pantalla.textContent;
      operacio = "-";
      document.getElementById("pantalla").innerHTML = operant1 + " - ";
    }

    multiplica.onclick = function(e){
      operant1 = pantalla.textContent;
      operacio = "*";
      document.getElementById("pantalla").innerHTML = operant1 + " x ";
    }

    dividi.onclick = function(e){
      operant1 = pantalla.textContent;
      operacio = "/";
      document.getElementById("pantalla").innerHTML = operant1 + " / ";
    }

    resoldre.onclick = function(e){
      solucio();
    }

}

function solucio(){

    var resultat = "";
    var moment = "";
    var moment2 = "";

    switch (operacio) {
      case "*":

      document.getElementById("inv").innerHTML = pantalla.textContent;
      moment = inv.textContent;
      moment2 = moment.split(" x ");
      operant2 = moment2[1];

      resultat = parseFloat(operant1) * parseFloat(operant2);
      document.getElementById("pantalla").innerHTML = pantalla.textContent +  " = " + resultat;
        break;

      case "+":

      document.getElementById("inv").innerHTML = pantalla.textContent;
      moment = inv.textContent;
      moment2 = moment.split(" + ");
      operant2 = moment2[1];

      resultat = parseFloat(operant1) + parseFloat(operant2);
      document.getElementById("pantalla").innerHTML = pantalla.textContent + " = " + resultat;
        break;

      case "-":

      document.getElementById("inv").innerHTML = pantalla.textContent;
      moment = inv.textContent;
      moment2 = moment.split(" - ");
      operant2 = moment2[1];

      resultat = parseFloat(operant1) - parseFloat(operant2);
      document.getElementById("pantalla").innerHTML = pantalla.textContent + " = " + resultat;
        break;

      case "/":

      document.getElementById("inv").innerHTML = pantalla.textContent;
      moment = inv.textContent;
      moment2 = moment.split(" / ");
      operant2 = moment2[1];

      resultat = parseFloat(operant1) / parseFloat(operant2);
      document.getElementById("pantalla").innerHTML = pantalla.textContent + " = " + resultat;
        break;
    }




}
