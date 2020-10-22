<html lang="en">
    <head>
        <?php require_once('./partials/head.php') ?> 
        <!-- Apache "incluye" o "trae el contenido" de este archivo y de esa manera el navegador lo podrá interpretar -->
        <title>Página Planetas</title>
    </head>
    <body>
        <?php require_once('./partials/menu.php') ?>

        <div class="card-group">
        
        <div class="card">
          <img class="card-img-top" src="./imagenes/tierra.jpg" alt="" class="img-fluid"> <!-- INGRESA LA IMAGEN A UTLIZAR-->

          <div class="card-body">
            <h4 class="card-title">Planeta Tierra</h4>  <!-- TITULO DEL CUADRO-->
            <p class="card-text">La Tierra es el tercer planeta del sistema solar, en órbita alrededor del Sol entre Venus y Marte, eso es, a 149.600.000 km del Astro Rey. Es el más grande y más denso de los llamados planetas Terrestres, y el quinto en tamaño de los ocho que existen. Es, además, el único planeta hasta la fecha capaz de albergar vida orgánica tal y como la conocemos
            </p> <!-- TEXTO-->
          </div>
        </div>


        <div class="card">
          <img class="card-img-top" src="./imagenes/jupiter.jpg" alt="" class="img-fluid"> <!-- INGRESA LA IMAGEN A UTLIZAR-->

          <div class="card-body">
            <h4 class="card-title">Júpiter</h4>  <!-- TITULO DEL CUADRO-->
            <p class="card-text">El primer planeta gaseoso se encuentra después del cinturón de asteroides y es Júpiter. Es el planeta más grande del Sistema Solar y el quinto en distancia al Sol. Se formó a partir del material que quedó después de la formación del “astro rey”..</p> <!-- TEXTO-->
          </div>
        </div>


        <div class="card">
          <img class="card-img-top" src="./imagenes/marte.jpg" alt="" class="img-fluid"> <!-- INGRESA LA IMAGEN A UTLIZAR-->

          <div class="card-body">
            <h4 class="card-title">Marte</h4>  <!-- TITULO DEL CUADRO-->
            <p class="card-text">Marte es el cuarto planeta desde el Sol y suele recibir el nombre de Planeta Rojo. Las rocas, suelo y cielo tienen una tonalidad rojiza o rosacea. Este característico color rojo fue observado por los astrónomos a lo largo de la historia. Los romanos le dieron nombre en honor de su dios de la guerra. Otras civilizaciones tienen nombres similares.</p> <!-- TEXTO-->
          </div>
        </div>

      </div>  

        <footer class="container py-5">
            <?php require_once('./partials/footer.php') ?>
        </footer>
        <?php require_once('./partials/js.php') ?>
    </body>
</html>
