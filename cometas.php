<html lang="en">
    <head>
        <?php require_once('./partials/head.php') ?> 
        <!-- Apache "incluye" o "trae el contenido" de este archivo y de esa manera el navegador lo podrá interpretar -->
        <title>Cometas</title>
    </head>
    <body>
        <?php require_once('./partials/menu.php') ?>

        <div class="card-group">
        
        <div class="card">
          <img class="card-img-top" src="./imagenes/halebopp.jpg" alt="" class="img-fluid"> <!-- INGRESA LA IMAGEN A UTLIZAR-->

          <div class="card-body">
            <h4 class="card-title">Hale-Bopp</h4>  <!-- TITULO DEL CUADRO-->
            <p class="card-text">LEl cometa Hale-Bopp fue descubierto el 23 de julio de 1995 a gran distancia del Sol, creándose desde entonces la expectativa de que sería un cometa muy brillante cuando pasara cerca de la Tierra. El brillo de un cometa es algo muy difícil de predecir con exactitud, pero el Hale-Bopp superó todo lo esperado cuando pasó por su perihelio el 1 de abril de 1997. Fue llamado el Gran Cometa de 1997..</p> <!-- TEXTO-->
          </div>
        </div>


        <div class="card">
          <img class="card-img-top" src="./imagenes/halley.jpg" alt="" class="img-fluid"> <!-- INGRESA LA IMAGEN A UTLIZAR-->

          <div class="card-body">
            <h4 class="card-title">Halley</h4>  <!-- TITULO DEL CUADRO-->
            <p class="card-text">El cometa Halley, oficialmente denominado 1P/Halley, es un cometa grande y brillante que orbita alrededor del Sol cada 75 años en promedio, aunque su período orbital puede oscilar entre 74 y 79 años.2​ Es uno de los mejor conocidos y más brillantes cometas de "periodo corto" de la nube de Oort. Halley es el único de período corto que es visible a simple vista desde la Tierra, y también el único cometa a simple vista que quizás aparece dos veces en una vida humana, por lo que del mismo existen muchas referencias de sus apariciones, siendo el mejor documentado..</p> <!-- TEXTO-->
          </div>
        </div>


        <div class="card">
          <img class="card-img-top" src="./imagenes/wild2.jpg" alt="" class="img-fluid"> <!-- INGRESA LA IMAGEN A UTLIZAR-->

          <div class="card-body">
            <h4 class="card-title">Wild 2</h4>  <!-- TITULO DEL CUADRO-->
            <p class="card-text">El cometa Wild 2 (designado oficialmente como 81P/Wild ["Vilt"]) es un cometa descubierto por el astrónomo suizo Paul Wild en 1978.

Wild 2 fue estudiado el 2 de enero de 2004 por la sonda espacial Stardust, que recolectó muestras de la coma del cometa..</p> <!-- TEXTO-->
          </div>
        </div>

      </div>  

        <footer class="container py-5">
            <?php require_once('./partials/footer.php') ?>
        </footer>
        <?php require_once('./partials/js.php') ?>
    </body>
</html>
