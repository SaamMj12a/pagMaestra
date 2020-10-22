<html lang="en">
    <head>
        <?php require_once('./partials/head.php') ?> 
        <!-- Apache "incluye" o "trae el contenido" de este archivo y de esa manera el navegador lo podrá interpretar -->
        <title>Página Maestra</title>
    </head>
    <body>
        <?php require_once('./partials/menu.php') ?>

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 font-weight-normal">ASTRONOMIA</h1>
                <p class="lead font-weight-normal">Un clavado al Universo.</p>
                <a class="btn btn-outline-secondary" href="https://www.nationalgeographic.com.es/temas/astronomia">NATIONALGEOGRAPHIC</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
            <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <div class="my-3 py-3">
                <img class="card-img-top" src="./imagenes/movimiento.gif" alt="" class="img-fluid"> 
                    <h2 class="display-5">El tamaño de nuestra galaxia</h2>
                    <p class="lead">Tiene un diámetro medio de 100.000 años-luz y se calcula que contiene unos 200.000 millones de estrellas. La distancia desde el Sol al centro de la galaxia es de alrededor de 27.700 años-luz. El espesor de la Vía Láctea es de 16.000 años-luz en el centro, haciéndose menor en las zonas exteriores, aproximadamente de unos 3.000 años-luz..</p>
                </div>
                <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                <img class="card-img-top" src="./imagenes/comen.gif" alt="" class="img-fluid"> 
                    <h2 class="display-5">La superficie de planeta más caliente del Sistema Solar</h2>
                    <p class="lead">La superficie de Venus, 470º C. En su momento más caliente, Mercurio llega a los 427º C. La gruesa atmósfera de Venus retiene el calor del Sol, por lo que las temperaturas en la medianoche son tan calientes como en el mediodía. Allí las rocas están tan calientes que tienen un brillo rojo..</p>
                    
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
            <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">El mayor meteorito</h2>
                    <p class="lead">El meteorito Hoha, en Namibia, de unas 60 toneladas, un peso similar al de 9 elefantes. Descubierto en 1920, este meteorito de 3 m de largo continúa donde cayó. Originariamente era aún más grande ya que parte del meteorito ha sufrido la erosión..</p>
                    <img class="card-img-top" src="./imagenes/ester.gif" alt="" class="img-fluid"> 
                </div>
                <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <div class="my-3 py-3">
                <img class="card-img-top" src="./imagenes/mov.gif" alt="" class="img-fluid"> 
                    <h2 class="display-5">El mayor cráter de nuestro Sistema Solar</h2>
                    <p class="lead">La cuenca de Aitken, en el polo sur de la Luna, de 2500 km de diámetro. No fue descubierto hasta que la sonda Clementine visitó la Luna en 1994. Los científicos utilizaron los datos de la Clementine para trazar un mapa de la superficie lunar. Fue entonces cuando descubrieron esta cuenca, una vasta depresión en la cara oculta de la Luna que mide más de 12 km de profundidad..</p>
                </div>
                <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
        </div>

        <footer class="container py-5">
            <?php require_once('./partials/footer.php') ?>
        </footer>
        <?php require_once('./partials/js.php') ?>
    </body>
</html>
