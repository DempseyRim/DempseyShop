const tarjeta = document.querySelector('#tarjeta'),
 btnAbrirForm = document.querySelector('#btn-abrir-formulario');
 formulario= document.querySelector('#formulario-tarjeta'),
 numeroTarjet=document.querySelector('#tarjeta .numero'),
 nombreTarjet=document.querySelector('#tarjeta .nombre'),
 logoMarca=document.querySelector('#logo-marca'),
 firma=document.querySelector('#tarjeta .firma p'),
 mesExpiracion=document.querySelector('#tarjeta #expiracion .mes'),
 yearExpiracion=document.querySelector('#tarjeta #expiracion .year'),
 ccv=document.querySelector('#tarjeta .ccv'),
 cp=document.querySelector('#tarjeta .cp'),
 telefono=document.querySelector('#tarjeta .telefono p');
 link=document.querySelector('#tarjeta .link-banco');

/** volteamos la tarjeta para mostrar el frente */
const mostrarFrente = () =>{
    /**detectar la clase de active */
    if(tarjeta.classList.contains('active')){
        tarjeta.classList.remove('active');
    }
}




 /* Girar tarjeta  */
tarjeta.addEventListener('click', () =>{ /* voltea la tarjeta */
    tarjeta.classList.toggle('active');
});

//* boton de abrir formulario
btnAbrirForm.addEventListener('click', () =>{ /* gira el iconp 45deg */
    btnAbrirForm.classList.toggle('active');
    formulario.classList.toggle('active');
});

/* Selectbox generados dinamicamente MESES  */
for(let i=1; i<=12; i++){
    //*console.log(i);

    let opcion = document.createElement('option');
    opcion.value=i;/*valores 1-12 */
    opcion.innerText=i; /*texto dentro de la opcion */
    formulario.selectMes.appendChild(opcion); /*accediento al mes por medio de su id */
}


/* Selectbox generados dinamicamente ANIOS  */
const yearActual = new Date().getFullYear();
for(let i=yearActual; i<=yearActual+8; i++){
    let opcion = document.createElement('option');
    opcion.value=i;/*anio actual + 8  */
    opcion.innerText=i; /*texto dentro de la opcion */
    formulario.selectYear.appendChild(opcion); /*accediento al anio por medio de su id */
}



/* input del numero de tarjeta */

/* VALIDACIONES */
formulario.inputNumero.addEventListener('keyup', (e) => {/*al levantar la tecla se ejecuta este evento */
   /* console.log(e.target.value); /** cada que presiono una tecla, lo va leyendo */
    let valorInput= e.target.value; /**guardamos el valor */

    formulario.inputNumero.value = valorInput /** guardando el numero del mismo lugar donde lo estoy tomando */
    .replace(/\s/g, '') /**eliminamos espacios en blanco, nos reemplaza el espacio por nada */
    .replace(/\D/g, '' ) /*busca en todos los digitos las letras, que los reemplace por nada */
    .replace(/([0-9]{4})/g, '$1 ') /** busca los numeros del 0-9 y agrupalos cada 4 caracteres, agrega el espacioado cada 4 numeros */
    .trim() /**elimina el ultimo espaciado */
    
    /*FIN VALIDACIONES */

    /** Reemplazando datos en la tarjeta */
    numeroTarjet.textContent=valorInput; 
    
    if(valorInput==''){
        numeroTarjet.textContent='#### #### #### ####'; /** SI ESTA VACIO ENTONCES ME LO PONE POR DEFECTO */
        logoMarca.innerHTML=''; /** si esta vacio el campo entonces borra el logo */
        telefono.innerHTML='';
        link.innerHTML='www.tubanco.com';
    }


    /**DETECTANDO SI ES VISA O MASTERCARD */

    if(valorInput[0]==4){// VISA
        logoMarca.innerHTML=''; /** primero elimina el logo y despues vuelve a agregarlo */
        const imagen = document.createElement('img');
        imagen.src='IMG/Tarjeta/visa.png'; 
        logoMarca.appendChild(imagen);

      /*  telefono */ 
      telefono.textContent='303 967 1098  -  Visa resto del mundo por cobrar';

      // LINK 
        link.textContent="https://www.visa.com.mx";

    } else if(valorInput[0]==5){ //MASTERCARD
        logoMarca.innerHTML=''; /** primero elimina el logo y despues vuelve a agregarlo */
        const imagen = document.createElement('img');
        imagen.src='IMG/Tarjeta/mastercard.png'; 
        logoMarca.appendChild(imagen);

      /*  telefono */
        telefono.textContent='(5411) 4340-5656  -  MasterCard resto del mundo por cobrar';

        //LINK
        link.textContent="https://www.mastercard.com.mx";

    }

    /** si el usuario escribe en la tarjeta MUESTRA EL FRENTE, pero si el usuario esta escribiendo el CCV entonces se voltea la tarjeta */
        mostrarFrente();

    //

}); 


/* input  nombre de tarjeta */
formulario.inputNombre.addEventListener('keyup', (e) =>{
    let valorInput=e.target.value;

    formulario.inputNombre.value=valorInput.replace(/[0-9]/g, ''); /** si escribes numeros, los reemplaza por nada */
    nombreTarjet.textContent=valorInput; // escribe el nombre en parte frontal de la tarjeta
    firma.textContent=valorInput; /** escribe la firma en la parte trasera */

    if(valorInput==''){
        nombreTarjet.textContent='Juan Perez'; /** SI ESTA VACIO ENTONCES ME LO PONE POR DEFECTO */
    }

    mostrarFrente();
});


// select del mes
formulario.selectMes.addEventListener('change', (e) =>{
    mesExpiracion.textContent=e.target.value; // muestra en la tarjeta el mes que selecciona 
    mostrarFrente();
});

// select del year
formulario.selectYear.addEventListener('change', (e) =>{
    yearExpiracion.textContent=e.target.value.slice(2); // muestra en la tarjeta el anio que selecciona, con el slice solo muestra los ultimos 2 digitos
    mostrarFrente();
});

//ccv
formulario.inputCCV.addEventListener('keyup', ()=>{

    if(!tarjeta.classList.contains('active')){ /** sino tiene la clase de active */
        tarjeta.classList.toggle('active'); /** accedemos a la tarjeta y que nos muestre la lista de clases */
    }

    /** validacion */
    formulario.inputCCV.value = formulario.inputCCV.value
    .replace(/\s/g, '') /**eliminamos espacios en blanco, nos reemplaza el espacio por nada */
    .replace(/\D/g, '' ); /*busca en todos los digitos las letras, que los reemplace por nada */

    /** se ponen los numeros que ingresamos en la parte de ccv de la tarjeta */
    ccv.textContent = formulario.inputCCV.value;

});

//cp
formulario.inputCP.addEventListener('keyup', ()=>{
    /** validacion */
    formulario.inputCP.value = formulario.inputCP.value
    .replace(/\s/g, '') /**eliminamos espacios en blanco, nos reemplaza el espacio por nada */
    .replace(/\D/g, '' ); /*busca en todos los digitos las letras, que los reemplace por nada */

});
