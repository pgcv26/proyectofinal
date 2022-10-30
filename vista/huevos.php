
<body>

<?php require ('./layout/headercliente.php')?>
    <!--botones que aparecen en la parte de abajp de navba-->
    <?php require ('./layout/botonespartedeabajo.php')?>

    <main class="main">
        <div class="producto">
            <h2 class="main-titulo">Productos</h2>
            <section class="container-producto">
                <div class="product">
                    <img src="imagenes/abarrotes/huevos-min.jpg" alt="" class="product-img">
                    <div class="product_descripcion">
                        <h3 class="product_title">Huevos Akikes cubeta</h3>
                        <span class="product_precio"> Cop $ 15.600</span>
                    </div>
                    <button class="btn btn-outline-dark color-buton" type="submit"><i
                            class="fa-solid fa-cart-shopping"></i>Agregar</button>
                </div>
            </section>
    </main>

    <!--  el container-fluid permite agrgar todo el contenedor de lado a lado  -->
    <?php require ('./layout/footer.php')?>
    
</body>
