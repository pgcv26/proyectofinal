// usuarios listar desde el controlador y lo pasa al formulario 
$(document).ready(function () {
  $("#usuarios").DataTable({
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
            render: function (data, type, row) {
                    return '<button  type="button" id="eliminar" class="btn btn-danger">Eliminar</button>' +
                    '<a href="actualizarusuario.php?id=<?php echo data;[id] ?>" class = "btn btn-warning">Actualizar</a> ';
                    
            },
            visible: true,
        },
    ],
  });  
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
    $("#categoria").DataTable({
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
                    return '<button  onclick="eliminar()" type="button" class="btn btn-danger">eliminar</button>' +
                    ' <a href="actualizarcategoria.php?id=<?php echo data;[id]?" ><button type="button" class="btn btn-warning">Actualizar</button></a> ';
                        
                },
                visible: true,
            },
        ]
    });
    
  })

// usuarios listar desde el controlador y lo pasa al formulario 
$(document).ready(function () {
    $("#provedor").DataTable({
        destroy: true,
        processing: true,
        ajax: "../controler/obtener/listarprovedor.php",
        columns: [
        {data:"DirDireccion"},
        {data:"ProNombre"},
        {data:"CiuCiudad"},
        {data:"ProPaginaweb"},
        {data:"telnumero"},
        ],
        columnDefs: [
          {
              targets: 5,
              render: function (data, type, row) {
                      return '<button  type="button" id="eliminar" class="btn btn-danger">Eliminar</button>' +
                      '<a href="fromagregarproveedor.php?id=<?php echo data;[id] ?>" class = "btn btn-warning">Actualizar</a> ';
                      
              },
              visible: true,
          },
      ],
    });  
  })





















