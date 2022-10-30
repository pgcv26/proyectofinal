<?php



?>


<body>
        
<?php include_once 'database/database.php';
        $conexion = new conexion();
 ?>
        <?php require ('./vista/layout/headerpaginaprincipal.php')?>
    
        <?php require ('./vista/layout/principalsliderimagenes.php')?>

       
  
          <!--imagenes que aparecen en la parte de abaja del slaider con su descripcion y precio-->
  
          <main class="main">
              <div class="producto">
                  <h2 class="main-titulo">Productos</h2>
                  <section class="container-producto">
                      <div class="product">
                          <img src="vista/imagenes/pastadoriadescripcion-min.jpg" alt="" class="product-img">
                          <div class="product_descripcion">
                              <h3 class="product_title">Pasta doria</h3>
                              <span class="product_precio"> Cop $ 2.300</span>
                          </div>
                         <a href="login.html"><button class="btn btn-outline-dark color-buton" type="submit"><i
                                  class="fa-solid fa-cart-shopping"></i>Agregar</button>
                         </a>
                      </div>
                      <div class="product">
                          <img src="vista/imagenes/arrosroadescripcion-min.jpg" alt="" class="product-img">
                          <div class="product_descripcion">
                              <h3 class="product_title">Arroz roa</h3>
                              <span class="product_precio">Cop $ 2.000</span>
                          </div>
                         <a href="login.html"><button class="btn btn-outline-dark color-buton" type="submit"><i
                                  class="fa-solid fa-cart-shopping"></i>Agregar</button>
                            </a>

                      </div>
                      <div class="product">
                          <img src="vista/imagenes/bonyourtdescripcion-min.jpg" alt="" class="product-img">
                          <div class="product_descripcion">
                              <h3 class="product_title">Bon Yurt</h3>
                              <span class="product_precio">Cop $ 2.800</span>
                          </div>
                          <a href="login.html"><button class="btn btn-outline-dark color-buton" type="submit"><i
                                  class="fa-solid fa-cart-shopping"></i>Agregar</button>
                            </a>
                      </div>
                      <div class="product">
                          <img src="vista/imagenes/coronadescripcion-min.jpg" alt="" class="product-img">
                          <div class="product_descripcion">
                              <h3 class="product_title">Corona</h3>
                              <span class="product_precio">Cop $ 28.900</span>
                          </div>
                          <a href="login.html"><button class="btn btn-outline-dark color-buton" type="submit"><i
                                  class="fa-solid fa-cart-shopping"></i>Agregar</button>
                            </a>
                      </div>

                      <div class="product">
                          <img src="vista/imagenes/cocacoladescripcion-min.jpg" alt="" class="product-img">
                          <div class="product_descripcion">
                              <h3 class="product_title">Coca cola</h3>
                              <span class="product_precio">Cop $ 2.100</span>
                          </div>
                          <a href="login.html"><button class="btn btn-outline-dark color-buton" type="submit"><i
                                  class="fa-solid fa-cart-shopping"></i>Agregar</button>
                            </a>
                      </div>
                      <div class="product">
                          <img src="vista/imagenes/medicamento-min.jpg" alt="" class="product-img">
                          <div class="product_descripcion">
                              <h3 class="product_title">Next GL gripa</h3>
                              <span class="product_precio">Cop $ 12.900</span>
                          </div>
                         <a href="login.html"> <button class="btn btn-outline-dark color-buton" type="submit"><i
                                  class="fa-solid fa-cart-shopping"></i>Agregar</button>
                            </a>
                      </div>
                      <div class="product">
                          <img src="vista/imagenes/yogurtdescripcion-min.jpg" alt="" class="product-img">
                          <div class="product_descripcion">
                              <h3 class="product_title">Yogurt</h3>
                              <span class="product_precio">Cop $ 2.400</span>
                          </div>
                          <a href="login.html"><button class="btn btn-outline-dark color-buton" type="submit"><i
                                  class="fa-solid fa-cart-shopping"></i>Agregar</button>
                            </a>
                      </div>
                      <div class="product">
                          <img src="vista/imagenes/aguardienteamarillodescripcion-min.png" alt="" class="product-img">
                          <div class="product_descripcion">
                              <h3 class="product_title">Aguardiente Amarillo</h3>
                              <span class="product_precio">Cop $ 54.900</span>
                          </div>
                          <button class="btn btn-outline-dark color-buton" type="submit"><i
                                  class="fa-solid fa-cart-shopping"></i>Agregar</button>
                      </div>
                      <div class="product">
                          <img src="vista/imagenes/colombianadescripcion-min.jpg" alt="" class="product-img">
                          <div class="product_descripcion">
                              <h3 class="product_title">Colombiana</h3>
                              <span class="product_precio">Cop $ 1.850</span>
                          </div>
                          <button class="btn btn-outline-dark color-buton" type="submit"><i
                                  class="fa-solid fa-cart-shopping"></i>Agregar</button>
                      </div>
                      <div class="product">
                          <img src="vista/imagenes/atun bancamdescripcion-min.jpg" alt="" class="product-img">
                          <div class="product_descripcion">
                              <h3 class="product_title">Atún Van Camps </h3>
                              <span class="product_precio">Cop $ 7.500</span>
                          </div>
                          <button class="btn btn-outline-dark color-buton" type="submit"><i
                                  class="fa-solid fa-cart-shopping"></i>Agregar</button>
                      </div>
                      <div class="product">
                          <img src="vista/imagenes/cococete-min.jpg" alt="" class="product-img">
                          <div class="product_descripcion">
                              <h3 class="product_title">Cococette</h3>
                              <span class="product_precio">Cop $ 2.000</span>
                          </div>
                          <button class="btn btn-outline-dark color-buton" type="submit"><i
                                  class="fa-solid fa-cart-shopping"></i>Agregar</button>
                      </div>
                      <div class="product">
                          <img src="vista/imagenes/detodito-min.png" alt="" class="product-img">
                          <div class="product_descripcion">
                              <h3 class="product_title">Detodito</h3>
                              <span class="product_precio">Cop $ 2.500</span>
                          </div>
                          <button class="btn btn-outline-dark color-buton" type="submit"><i
                                  class="fa-solid fa-cart-shopping"></i>Agregar</button>
                      </div>
          </main>
      </main>
      <?php require ('./vista/layout/footer.php')?>


</body>

