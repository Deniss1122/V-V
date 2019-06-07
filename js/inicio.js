function iniciar(){
    var correo=document.getElementById('CampoCorreo');
    var clave=document.getElementById('CampoClave');
    var condicion=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
    if(condicion.test(correo.value)){
        /*validar la estructura de un correo electronico*/

        

    }else{
        alert("Correo Invalido");
    }
    if(clave.value.length/*longitud*/>=8 && clave.value.length<=15{
        /*validar la estructura de la contraseña: mayor o igual a 8 caracteres, menos o igual a 15, 
        que tenga al menos una minuscula, una mayuscula y un numero*/

        }else{
            alert("su contraseña no cumple con las condiciones");
        }
}