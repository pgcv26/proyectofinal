// se llama al boton del formulario del login '#ingresar' para realizar la funcion 
//esta bariable siempre se llama con almuadillas 
$('#ingresar').click(function() {

    // se asignan bariables a los campos llamados desde el formulario '#usuario' y '#contrasena'
    var usuario = $('#usuario').val();
    var contrasena = $('#contrasena').val();

    // si el capo usuario se encuentra basio aroja un alerta 
    if (usuario=="") {
        alert('Ingrese Usuario');
        // focus es para redireccionarlo a la caja si no ingresas datos 
        $('#usuario').focus();

    // si el campo contraseña se encuentra basio aroja un alerta 
    }else if(contrasena==""){
        alert('Ingrese Contraseña');
        // focus es para redireccionarlo a la caja si no ingresas datos 
        $('#contrasena').focus();
    }else{
        // si los capos estan diligenciados entra a validar en el controlador con ajax
        var url = '../database/usuario.php'
        $.post(url,{usuario:usuario,contrasena:contrasena},function (datos) {
            // llama a la alerta desde el formulario y esto se valida con el controlador 
        $('#respuesta').html(datos);
        //alert(datos);
        });
        
    }
    
});