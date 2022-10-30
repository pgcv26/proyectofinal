   //listar con campo selec tabla roles desde "../controler/obtener/listarroles.php",{})
$(document).ready(function () {
 
      listaroles();

      function listaroles() {
                var selectRoles = $('#roltipo')
                $.get("../controler/obtener/listarroles.php",{})
                .done(function(data){
                    console.log(data);
                        var obj = $.parseJSON(data);
                        selectRoles.append('<option value="-1" selected disabled>Seleccione el Rol</option>')
                        $.each(obj, function (key, value){
                        selectRoles.append('<option value="'+obj[key].IdRol+'">'+obj[key].RolTipo+'</option>')
                });

                     });
            
            }  
  });

    //listar con campo selec tabla ciudad desde("../controler/obtener/listarciudad.php", {})
  $(document).ready(function () {
    listarciudad();
  
    function listarciudad() {
        var selectciudad = $('#ciudad');
        $.get("../controler/obtener/listarciudad.php", {})
            .done(function (data){
                console.log(data);
                var obj = $.parseJSON(data);
  
                selectciudad.append('<option value="-1" selected disabled>Seleccione ciudad')
                $.each(obj, function (key, value){
                    selectciudad.append('<option value="'+obj[key].idCiudad+'">'+obj[key].CiuCiudad+'</option>')
                })
  
            });
    }
  });


   //listar con campo selec tabla categoria  desde ("../controler/obtener/listacategorias.php", {})
  $(document).ready(function () {

    listaCategoria();

    function listaCategoria() {
        var selectcategoria = $('#catNombre');
        $.get("../controler/obtener/listacategorias.php", {})
            .done(function (data){
                var obj = $.parseJSON(data);
                

                selectcategoria.append('<option value="-1" selected disabled>Seleccione categoría</option>')
                $.each(obj, function (key, value){
                    selectcategoria.append('<option value="'+obj[key].idCategoria+'">'+obj[key].CatNombre+'</option>')
                })

            });
    }
});