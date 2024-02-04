const formulario = document.getElementById('formulario_registro');
const inputs = document.querySelectorAll('#formulario_registro input');
const select = document.getElementById('grupo');
const select2 = document.getElementById('semestre');


//EXPRESIONES REGULARES
const expresiones = {
  nombre: /^[a-zA-ZÀ-ÿ\s]{20,40}/, //Letras y espacios, pueden llevar acentos.
  password: /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/,
  noControl: /[^\W]\d{13}/
};

const campos = {
  nombre: false,
  contrasena: false,
  noControl: false,
  grupo: false
}

if(select.value !== 0 && select2.value !== 0){
  campos['grupo'] = true;
}


const validarCampo = (expresion, input, campo) => {
  if(expresion.test(input.value)){
    document.getElementById(campo).classList.remove('error');
    document.getElementById(campo).classList.add('verdad');
    document.getElementById(`error${campo}`).classList.remove('error');
    campos[campo] = true;
  }else{
    document.getElementById(campo).classList.remove('verdad');
    document.getElementById(campo).classList.add('error');
    document.getElementById(`error${campo}`).classList.add('error')
    campos[campo] = false;
  }
}

const validarRegistro = (e) => {
  switch(e.target.name){
    case "nombre":
      validarCampo(expresiones.nombre, e.target, e.target.name);
    break;
    case "contrasena":
      validarCampo(expresiones.password, e.target, e.target.name);
    break;
    case "noControl":
      if(e.target.value > 0){
        validarCampo(expresiones.noControl, e.target, e.target.name);
      }else{
        document.getElementById('noControl').classList.remove('verdad');
        document.getElementById('noControl').classList.add('error');
        document.getElementById(`errornoControl`).classList.add('error')
        campos['noControl'] = false;
      }
    break;
  }
}

//Por cada uno de los inputs ejecutar una función
inputs.forEach((input) => {
  //Manda a lamar la función de validación al levantar una tecla o al dar click fuera del input
  input.addEventListener('keyup', validarRegistro);
  input.addEventListener('blur', validarRegistro);
});

formulario.addEventListener('submit', (e) =>{
  //Previen el envío del formulario
  e.preventDefault();
  //Encapsulamiento de datos del formulario
  let datos = new FormData(formulario);
  //Petición del tipo del dato de envíos
  peticion = {
    method:'POST',
    body:datos,
  }

  //Hará una petición para enviar los datos a un documento PHP

  if(campos.nombre && campos.contrasena && campos.noControl && campos.grupo){
    fetch('CRUD/registro.php',peticion)
    .then(respuesta => respuesta.json())
    .then(respuesta => {
      
      document.querySelectorAll('#formulario_registro input').forEach((campo) => {
        campo.classList.remove('verdad');
      });
      formulario.reset();

      if(respuesta == false){
        Swal.fire({
          title: 'Error!',
          text: 'Este usuario ya existe.',
          icon: 'error',
          timer: 3000,
          timerProgressBar: true,
          allowOutsideClick: false,
          allowEscapeKey: false,
          allowEnterKey: false,
          stopKeydownPropagation: false,
          showConfirmButton: false
        });

      }else{

        Swal.fire({
          title: 'Registro exitoso!',
          text: 'Ahora puedes iniciar sesión.',
          icon: 'success',
          timer: 3000,
          timerProgressBar: true,
          allowOutsideClick: false,
          allowEscapeKey: false,
          allowEnterKey: false,
          stopKeydownPropagation: false,
          showConfirmButton: false
        });
        setTimeout(() => {
          location.reload();
        }, 3000);

      }

    }).catch(error => console.log('ERROR: ', error));

  }

});