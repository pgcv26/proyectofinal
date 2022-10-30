<?php
session_start()
?>
<body>
<?php require ('./layout/headercliente.php')?>
    <!--slaider para imagenes -->
<?php require ('../layout/clientesliderimagenes.php')?>

<?php require ('./layout/productoscliente.php')?>

    <!--tabla para productos datagry-->

    <article class=" data-grid">
        <div class="table-responsive">
          <table class="table table-ligth table-hover ">
            <thead>
              <tr>
                <th scope="col">Item</th>
                <th scope="col">Descripcion producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Descuento</th>
                <th scope="col">Valor producto</th>
                <th scope="col">Monto total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>**</td>
                <td>**</td>
                <td>**</td>
                <td>**</td>
                <td>**</td>
    
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>**</td>
                <td>**</td>
                <td>**</td>
                <td>**</td>
                <td>**</td>
    
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>**</td>
                <td>**</td>
                <td>**</td>
                <td>**</td>
                <td>**</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>**</td>
                <td>**</td>
                <td>**</td>
                <td>**</td>
                <td>**</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>**</td>
                <td>**</td>
                <td>**</td>
                <td>**</td>
                <td>**</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>**</td>
                <td>**</td>
                <td>**</td>
                <td>**</td>
                <td>**</td>
              </tr>
    
    
            </tbody>
    
          </table>
        </div>
    
      </article>

      <?php require ('./layout/footer.php')?> 

</body>