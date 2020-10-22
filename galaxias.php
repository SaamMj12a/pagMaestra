<html lang="en">
    <head>
        <?php require_once('./partials/head.php') ?> 
        <!-- Apache "incluye" o "trae el contenido" de este archivo y de esa manera el navegador lo podrá interpretar -->
        <title>Página Galaxias</title>
    </head>
    <body>
        <?php require_once('./partials/menu.php') ?>
        <div class="card-group">
        
        <div class="card">
          <img class="card-img-top" src="./imagenes/andro.jpg" alt="" class="img-fluid"> <!-- INGRESA LA IMAGEN A UTLIZAR-->

          <div class="card-body">
            <h4 class="card-title">Andrómeda:</h4>  <!-- TITULO DEL CUADRO-->
            <p class="card-text">Esta a 2,5 millones de años luz de la Tierra. Es una espiral gigante, el doble de tamaño que la Vía Láctea. Es la galaxia más grande del Grupo Local. Contiene cientos de miles de millones de estrellas y gran cantidad de nebulosas. En su centro hay un agujero negro supermasivo. Es muy brillante y es el objeto más lejano que puede verse a simple vista. Se calcula que dentro de unos 6.000 millones de años, la Vía Láctea y Andrómeda chocarán..</p> <!-- TEXTO-->
          </div>
        </div>


        <div class="card">
          <img class="card-img-top" src="./imagenes/pequegran.jpg" alt="" class="img-fluid"> <!-- INGRESA LA IMAGEN A UTLIZAR-->

          <div class="card-body">
            <h4 class="card-title">Pequeña y Gran Nube de Magallanes</h4>
            
            <p>Son dos galaxias satélites de la Vía Láctea. 
            Esto significa que la Vía Láctea las atrae con su gravedad, y en el fu
            turo formarán parte de ella. Se llaman así porque Magallanes fue el primer explorador
             europeo que las observó, en el siglo XVI.
              La Gran Nube está a 170.000 años luz de distancia,
               y la Pequeña Nube a 210.000 años luz. Son galaxias enanas
                e irregulares, con muchas nebulosas y estrellas jóvenes..</p> <!-- TEXTO-->
          </div>
        </div>


        <div class="card">
          <img class="card-img-top" src="./imagenes/triangulo.jpg" alt="" class="img-fluid"> <!-- INGRESA LA IMAGEN A UTLIZAR-->

          <div class="card-body">
            <h4 class="card-title">Triángulo</h4>  <!-- TITULO DEL CUADRO-->
            <p class="card-text">Es la tercera galaxia más grande del Grupo Local, por detrás de Andrómeda y la Vía Láctea. Está a 3 millones de años luz. Sólo se ve con telescopio. Tiene forma espiral, parecida a nuestra galaxia. Se cree que Andrómeda la atrae con su gravedad, e incluso podría orbitar alrededor de ella. En la galaxia de Triángulo está la nebulosa de emisión más grande que se conoce: la NGC 604..</p> <!-- TEXTO-->
          </div>
        </div>

      </div>  

        <footer class="container py-5">
            <?php require_once('./partials/footer.php') ?>
        </footer>
        <?php require_once('./partials/js.php') ?>
    </body>
</html>
