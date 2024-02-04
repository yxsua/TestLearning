const formularioSesion = document.getElementById('formulario_sesion');
const inputsSesion = document.querySelectorAll('#formulario_sesion input');

const camposSesion = {
  noControlSesion: false,
  contrasenasesion: false
}

const validarSesion = (e) => {
  switch(e.target.name){
    case "noControlsesion":
      if(e.target.value != ''){camposSesion['noControlSesion'] = true;}
      else{camposSesion['noControlSesion'] = false;}
    break;
    case "contrasenasesion":
      if(e.target.value != ''){camposSesion['contrasenasesion'] = true;}
      else{camposSesion['contrasenasesion'] = false;}  
    break;
  }
}

inputsSesion.forEach((input) => {
  input.addEventListener('keyup', validarSesion);
  input.addEventListener('blur', validarSesion);
})

formularioSesion.addEventListener('submit', (e) =>{
  //Previen el envío del formulario
  e.preventDefault();
  //Encapsulamiento de datos del formulario
  let datosSesion = new FormData(formularioSesion);
  //Petición del tipo del dato de envíos
  peticionSesion = {
    method:'POST',
    body:datosSesion,
  }
  //Hará una petición para enviar los datos a un documento PHP

  if(camposSesion.noControlSesion && camposSesion.contrasenasesion){
    fetch('CRUD/validacionSesion.php',peticionSesion)
    .then(respuesta => respuesta.json())
    .then(respuesta => {


      if(respuesta === false){

        Swal.fire({
          title: 'Error!',
          text: 'El usuario y/o contraseña no son correctos.',
          icon: 'error',
          allowOutsideClick: false,
          allowEscapeKey: false,
          allowEnterKey: false,
          stopKeydownPropagation: false,
          showConfirmButton: true
        });

      }else{
        formularioSesion.reset();
        window.location.href = respuesta;
      }

    }).catch(error => console.log('ERROR: ', error));
  }

});