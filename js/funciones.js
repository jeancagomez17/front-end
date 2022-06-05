function iniciar() {

    let usuarios = [
        { user: "jeancagomez94@gmail.com", pass: "jean17" },
        { user: "juangarcia@gmail.com", pass: "BigMind" },
        { user: "anggiecastellanos@gmail", pass: "jean17" },
        { user: "mishellmerchant@gmail.com", pass: "jean17" },
    ];
    let u = document.getElementById('user');
    let p = document.getElementById('pass');
    for (let i = 0; i < usuarios.length; i++) {
        if (u.value == usuarios[i].user && p.value == usuarios[i].pass) {
            window.location = "view/cargar.html";
            break
        } else if(u.value == ""  && p.value == ""){
            swal('Los campos no deben estar vacios');
            break;
        } 

        else {
            if (i == usuarios.length - 1) {
                swal("Credenciales invalidas");
                break;
            }

        }
    }
}

function validar() {
    let nombre = document.getElementById("nombre").value;
    //la condición
    if (nombre.length == 0 || /^\s+$/.test(nombre)) {
        swal('El campo de texto esta vacio!');
        return false;
    } 
}


function mostrar() {
    document.getElementById("sidebar").style.width = "200px";
    document.getElementById("menu-equipos").style.marginLeft = "200px";
    document.getElementById("container").style.marginLeft = "200px";
    document.getElementById("abrir").style.display = "none";
    document.getElementById("cerrar").style.display = "inline";
}

function ocultar() {
    document.getElementById("sidebar").style.width = "0";
    document.getElementById("menu-equipos").style.marginLeft = "0";
    document.getElementById("container").style.marginLeft = "0";
    document.getElementById("abrir").style.display = "inline";
    document.getElementById("cerrar").style.display = "none";
}


// efecto
var textWrapper = document.querySelector('.ml6 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml6 .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration: 750,
    delay: (el, i) => 50 * i
  }).add({
    targets: '.ml6',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });