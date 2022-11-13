// usuarios listar desde el controlador y lo pasa al formulario 
$(document).ready(function () {

    function  tablausuarios(){
        var tabla=$("#usuarios").DataTable({
            destroy: true,
            processing: true,
            ajax: "../controler/obtener/listar.php",
            columns: [
                { data: "identificacion" },
                { data: "nombrecompleto" },
                { data: "UsuNombreUsuario" },
                { data: "roltipo"},
                { data: "UsuContrasena" },
                { data: "emaCorreo" },
                { data: "Telnumero" }, 
                { data: "CiuCiudad" }, 
            ],
            columnDefs: [
              {
                  targets: 8,
                  render: function (data , type, row) {
                      console.log(data);
                          return '<button  type="button" id="eliminar" class="actualizar btn btn-danger">Eliminar</button>' +
                          '<button type="button" class="actualizar btn btn-warning" data-bs-toggle="modal"data-bs-target="#actualizarusuario">actualizar</button>';
                          //'<a href="actualizarusuario.php?id=<?php echo data;[identificacion] ?>" class = "btn btn-warning">Actualizar</a> ';
                          
                  },
                  visible: true,
              },
          ],
        });  
        cargarActualizarusuarios("#usuarios tbody",tabla);
    }
    function cargarActualizarusuarios(tbody,tabla) {
        $(tbody).on("click","button.actualizar",function () {
            var registro=tabla.row($(this).parents("tr")).data();
            console.log(registro);
            var datos = new Option(registro);
            console.log(datos);
            identificacion = $("#actualizaridentificacion").val(registro.identificacion)
            nombre = $("#actualizarnombre").val(registro.nombrecompleto)
            nombre = $("#actualizarnombreusuario").val(registro.UsuNombreUsuario)
            nombre = $("#actualizarcontrasena").val(registro.UsuContrasena)
            nombre = $("#actualizarcorreo").val(registro.emaCorreo)
            nombre = $("#actualizartelefono").val(registro.Telnumero)
            nombre = $("#actualizarciudad").val(registro.Telnumero)
           

        }) 
     }


    tablausuarios(); 
  
})


// listar productos  se llama el baken desde "../controler/obtener/listaproducto.php", y se pasa los datos al formulario 
$(document).ready(function () {
    $("#productos").DataTable({
        destroy: true,
        processing: true,
        ajax: "../controler/obtener/listaproducto.php",
        columns: [
            { data: 'proNombreProducto'},
            { data: 'ProValorProducto'},
            { data: 'ProFechaVencimiento'},
            { data: 'proCantidad'},
            { data: 'CatNombre'},
            { data: 'ProNombre'},
        ],
        columnDefs: [
            {
                targets: 6,
                render: function (data, type, row) {
                    return '<button  onclick="eliminar()" type="button" class="btn btn-danger">eliminar</button>' +
                    ' <a href="fromagregarproductos.php" ><button type="button" class="btn btn-warning">Actualizar</button></a> ';
                        
                },
                visible: true,
            },
        ],
    });

})

// listar categorias  se llama el baken desde "../controler/obtener/listaproducto.php", y se pasa los datos al formulario 


$(document).ready(function() {
    function  tablacategoria() {
        var tabla=$("#categoria").DataTable({
            destroy:true,
            processing:true,
            ajax:"../controler/obtener/listacategorias.php",
            columns:[
                {data:'idCategoria'},
                {data:'CatNombre'},
            ],
            columnDefs:[
                {
                    targets: 2,
                    render: function (data, type, row) {
                        console.log(row.idCategoria);
                        return '<button  onclick="eliminar()" type="button" class="btn btn-danger">eliminar</button>' +
                        '<button type="button" class="actualizar btn btn-warning" data-bs-toggle="modal"data-bs-target="#actualizar">actualizar</button>';
                        //'<a href="actualizarcategoria.php?id='+row.idCategoria+'" ><button type="button" class="btn btn-warning">Actualizar</button></a>'; 
                        
                    },
                    visible: true,
                },
            ]
        });
        
            // se crea esta funcio para listar las categorias  estos datos se llaman desde el formulario
            // modal que se llama actualizar categorias y se llaman las cajas de texto que se encuentran en el modal
            // se LLAMA LA VARIABLE DE LA BASE DE DATOS  .val(registro.CatNombre)
        actualizarcategoria("#categoria tbody",tabla);
     }

        function actualizarcategoria(tbody,tabla) {
        $(tbody).on("click","button.actualizar",function () {
            var registro=tabla.row($(this).parents("tr")).data();
            console.log(registro);
            var datos = new Option(registro.id);
            console.log(datos);
            id = $("#idcategoria").val(registro.idCategoria)
            nombre = $("#categoriaActualizar").val(registro.CatNombre)

        }) 
 }
    tablacategoria();
           
})

// usuarios listar desde el controlador y lo pasa al formulario 
$(document).ready(function () {

    
        function tablaprovedor() {
            var tabla=$("#provedor").DataTable({
                destroy: true,
                processing: true,
                ajax: "../controler/obtener/listarprovedor.php",
                columns: [
                {data:"idProveedor"},  
                {data:"ProNombre"},
                {data:"ProPaginaweb"},
                {data:"telefono"},
                {data:"CiuCiudad"},
                ],
        
                    
                columnDefs: [
                  {
                      targets: 5,
                      render: function (data, type, row) {
                              return '<button  type="button" id="eliminar" class="btn btn-danger">Eliminar</button>' +
                              '<button type="button" class="actualizar btn btn-warning" data-bs-toggle="modal"data-bs-target="#actualizarprovedor">actualizar</button>';
                      },
                      visible: true,
                  },
              ],
            });  

            // se crea esta funcio para listar los clientes estos datos se llaman desde el formulario
            // modal que se llama actualizar provedores y se llaman las cajas de texto que se encuentran en el modal 
              cargarprovedorActualizar("#provedor tbody",tabla);
        }

    
        function cargarprovedorActualizar(tbody,tabla) {
            $(tbody).on("click","button.actualizar",function () {
                var registro=tabla.row($(this).parents("tr")).data();
                console.log(registro);
                var datos = new Option(registro);
                console.log(datos);
                id = $("#idactualizar").val(registro.idProveedor)
                nombre = $("#nombreactualizar").val(registro.ProNombre)
                paginaweb = $("#paginaactualizar").val(registro.ProPaginaweb)
                telefono = $("#telefonoactualizar").val(registro.telefono)
                ciudad = $("#actualizarciudad").val(registro.CiuCiudad)

                

            }) 
         }
        tablaprovedor();
        
        
})



















