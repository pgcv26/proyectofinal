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
              targets: 3,
              render: function (data, type, row) {
                  return '<button  onclick="eliminar()" type="button" class="btn btn-danger">eliminar</button>' +
                  ' <a><button type="button" class="btn btn-warning">Actualizar</button></a> ';
                      
              },
              visible: true,
          },
      ]
  });
  
})

