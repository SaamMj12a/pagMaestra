<html lang="en">
    <head>
        <?php require_once('./partials/head.php') ?> 
        <!-- Apache "incluye" o "trae el contenido" de este archivo y de esa manera el navegador lo podrá interpretar -->
        <title>Estrellas</title>
    </head>
    <body>
        <?php require_once('./partials/menu.php') ?>
        <h1> Estrellas </h1>
        <br>
        <div class="card-group">
        
        <div class="card">
          <img class="card-img-top" src="./imagenes/estrella1.jpg" alt=""> <!-- INGRESA LA IMAGEN A UTLIZAR-->

          <div class="card-body">
            <h4 class="card-title">Alfa Centauri</h4>  <!-- TITULO DEL CUADRO-->
            <p class="card-text">Se encuentra: 4.2 años luz.
            Las estrellas con magnitud aparente mayor que aproximadamente 6,5 no pueden ser vistas sin ayuda instrumental, y son las que en la tabla tienen fondo de color gris oscuro. </p> <!-- TEXTO-->
          </div>
        </div>


        <div class="card">
          <img class="card-img-top" src="./imagenes/estrella2.jpg" alt=""> <!-- INGRESA LA IMAGEN A UTLIZAR-->

          <div class="card-body">
            <h4 class="card-title">Estrella de Barnard</h4>  <!-- TITULO DEL CUADRO-->
            <p class="card-text">Se encuentra: 5.9 años luz 
            El tipo espectral de cada estrella clase estelar se muestra con un fondo de color apropiado en la columna encabezada «clase estelar».</p> <!-- TEXTO-->
          </div>
        </div>


        <div class="card">
          <img class="card-img-top" src="./imagenes/estrella3.png" alt=""> <!-- INGRESA LA IMAGEN A UTLIZAR-->

          <div class="card-body">
            <h4 class="card-title">Wolf 359</h4>  <!-- TITULO DEL CUADRO-->
            <p class="card-text">Se encuentra : 7.8 años luz.
            Incluyendo al Sol, se conocen actualmente 66 estrellas que conforman 50 sistemas estelares dentro del volumen considerado.</p> <!-- TEXTO-->
          </div>
        </div>

      </div>  

        <footer class="container py-5">
            <?php require_once('./partials/footer.php') ?>
        </footer>
        <?php require_once('./partials/js.php') ?>
    </body>
</html>
