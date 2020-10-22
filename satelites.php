<html lang="en">
    <head>
        <?php require_once('./partials/head.php') ?> 
        <!-- Apache "incluye" o "trae el contenido" de este archivo y de esa manera el navegador lo podrá interpretar -->
        <title>Satelites</title>
    </head>
    <body>
        <?php require_once('./partials/menu.php') ?>

        <h1>SATELITES NATURALES</h1>

        <div class="card-group">
        
        <div class="card">
          <img class="card-img-top" src="./imagenes/luna.jpg" alt="" class="img-fluid"> <!-- INGRESA LA IMAGEN A UTLIZAR-->

          <div class="card-body">
            <h4 class="card-title">La luna</h4>  <!-- TITULO DEL CUADRO-->
            <p class="card-text">La Luna es el único satélite natural de la Tierra. Con un diámetro ecuatorial de 3476 km, es el quinto satélite más grande del sistema solar, mientras que en cuanto al tamaño proporcional respecto a su planeta es el satélite más grande: un cuarto del diámetro de la Tierra y 1/81 de su masa.</p> <!-- TEXTO-->
          </div>
        </div>


        <div class="card">
          <img class="card-img-top" src="./imagenes/titan.png" alt="" class="img-fluid"> <!-- INGRESA LA IMAGEN A UTLIZAR-->

          <div class="card-body">
            <h4 class="card-title">Titan</h4>  <!-- TITULO DEL CUADRO-->
            <p class="card-text">Titán es el mayor de los satélites de Saturno y el segundo del sistema solar tras Ganimedes. Además el único satélite conocido que posee una atmósfera importante,1​ y el único objeto, aparte de la Tierra, en el que se ha encontrado evidencia clara de cuerpos líquidos estables en la superficie.2​.</p> <!-- TEXTO-->
          </div>
        </div>


        <div class="card">
          <img class="card-img-top" src="./imagenes/europa.jpg" alt="" class="img-fluid"> <!-- INGRESA LA IMAGEN A UTLIZAR-->

          <div class="card-body">
            <h4 class="card-title">Europa</h4>  <!-- TITULO DEL CUADRO-->
            <p class="card-text">Europa es el sexto satélite natural de Júpiter en orden creciente de distancia y el más pequeño de los cuatro satélites galileanos. Fue descubierto en 1610 por Galileo 1​ y nombrado por Europa, la madre del rey Minos de Creta y amante de Zeus. Simon Marius sugirió el nombre tras su descubrimiento, pero este nombre, así como el nombre de los otros satélites galileanos, no fue de uso común hasta mediados del siglo XX..</p> <!-- TEXTO-->
          </div>
        </div>

      </div>  

        <footer class="container py-5">
            <?php require_once('./partials/footer.php') ?>
        </footer>
        <?php require_once('./partials/js.php') ?>
    </body>
</html>
