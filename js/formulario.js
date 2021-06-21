const formulario= document.getElementById('formulario');
const inputs= document.querySelectorAll('#formulario input');

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{8,16}$/, // 8 a 16 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
}

const campos = {
    nombre: false,
    apellido: false,
    correo: false,
    password: false,
}


const validarForm = (e) => {
 //  console.log(e.target.name);  //obtiene los campos
  switch(e.target.name){
      case "nombre":
       //comprobar que lo que escriba el usuario coincida con los parametros de las expresiones regulares 
       validarCampo(expresiones.nombre, e.target, 'nombre');
      break;

      case "apellido":
        validarCampo(expresiones.apellido, e.target, 'apellido');
      break;

      case "correo":
        validarCampo(expresiones.correo, e.target, 'correo');
      break;

      case "password":
        validarCampo(expresiones.password, e.target, 'password');
        validarPassword2();
      break;

      case "password2": 
        validarPassword2();
        break;

  }
}


const validarCampo = (expresion, input, campo) => {

    if(expresion.test(input.value)){ //devuelve true or false para ver si se cumple con le expresion regular
        document.getElementById(`grupo_${campo}`).classList.remove('form-group-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.add('form-group-correcto');
        document.querySelector(`#grupo_${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo_${campo} i`).classList.add('fa-check');
        document.querySelector(`#grupo_${campo} .form_input_error`).classList.remove('form_input_error-activo'); //borra mensaje error
        campos[campo]=true; //si la expresion es valida
    }else{
        document.getElementById(`grupo_${campo}`).classList.add('form-group-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.remove('form-group-correcto');
        document.querySelector(`#grupo_${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo_${campo} i`).classList.remove('fa-check');
        document.querySelector(`#grupo_${campo} .form_input_error`).classList.add('form_input_error-activo'); //muestra mensaje error
        campos[campo]=false; //si la expresion es invalida
    }

}

const validarPassword2= () =>{
    const inputPassword1=document.getElementById('password');
    const inputPassword2=document.getElementById('password2');

    if(inputPassword1.value !== inputPassword2.value){
        document.getElementById(`grupo_password2`).classList.add('form-group-incorrecto');
        document.getElementById(`grupo_password2`).classList.remove('form-group-correcto');
        document.querySelector(`#grupo_password2 i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo_password2 i`).classList.remove('fa-check');
        document.querySelector(`#grupo_password2 .form_input_error`).classList.add('form_input_error-activo'); //muestra mensaje error
        campos['password']=false; //si la expresion es invalida
    } else{
        document.getElementById(`grupo_password2`).classList.remove('form-group-incorrecto');
        document.getElementById(`grupo_password2`).classList.add('form-group-correcto');
        document.querySelector(`#grupo_password2 i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo_password2 i`).classList.add('fa-check');
        document.querySelector(`#grupo_password2 .form_input_error`).classList.remove('form_input_error-activo'); //borra mensaje error
        campos['password']=true; //si la expresion es valida
    }
}

inputs.forEach((input) => {
 input.addEventListener('keyup',validarForm ); //por cada input y cuando suelte la letra se ejecuta el codigo
 input.addEventListener('blur',validarForm );

});



formulario.addEventListener('submit', (e) => {

    e.preventDefault(); //evita que mande los datos, se puede quitar, si quiero mandar los datos a otra pagina, entonces quito esto
    const terminos=document.getElementById('terminos');
    //comprobar que todos los campos incluyendo terminos, se encuentren completos y correctos
    
    if(campos.nombre && campos.apellido && campos.correo && campos.password && terminos.checked){
        formulario.reset();

    document.getElementById('form-group-exitoso').classList.add('form-group-exitoso-activo');
    setTimeout(() => {
      document.getElementById('form-group-exitoso').classList.remove('form-group-exitoso-activo');
     }, 4000);  //DESPUES DE 4 SEG SE BORRA EL MENSAJE DE LLENADO EXITOSO

      document.querySelectorAll('.form-group-correcto').forEach((icono) =>{  //SE REMUEVEN LOS ICONOS DE CORRECTO
        icono.classList.remove('form-group-correcto')
        });  

} //FIN IF
else{
        document.getElementById('mensaje_error').classList.add('mensaje_error-activo');
        setTimeout(() => {
            document.getElementById('mensaje_error').classList.remove('mensaje_error-activo');
           }, 4000);  //DESPUES DE 4 SEG SE BORRA EL MENSAJE DE ERROR 
}
});


