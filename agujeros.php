<html lang="en">
    <head>
        <?php require_once('./partials/head.php') ?> 
        <!-- Apache "incluye" o "trae el contenido" de este archivo y de esa manera el navegador lo podrá interpretar -->
        <title>Página Agujeros negros</title>
    </head>
    <body>
        <?php require_once('./partials/menu.php') ?>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
            <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Agujeros negros</h2>
                    <p class="lead"> Los agujeros negros son los restos fríos de antiguas estrellas, tan densas que ninguna partícula material, ni siquiera la luz, es capaz de escapar a su poderosa fuerza gravitatoria.

                            Mientras muchas estrellas acaban convertidas en enanas blancas o estrellas de neutrones, los agujeros negros representan la última fase en la evolución de enormes estrellas que fueron al menos de 10 a 15 veces más grandes que nuestro sol.

                            Cuando las estrellas gigantes alcanzan el estadio final de sus vidas estallan en cataclismos conocidos como supernovas. Tal explosión dispersa la mayor parte de la estrella al vacío espacial pero quedan una gran cantidad de restos «fríos» en los que no se produce la fusión.</p>
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                    <img src="./imagenes/agujero.jpg" class="img-fluid">
                </div>

            </div>
           
        </div>

        


        <footer class="container py-5">
            <?php require_once('./partials/footer.php') ?>
        </footer>
        <?php require_once('./partials/js.php') ?>
    </body>
</html>
