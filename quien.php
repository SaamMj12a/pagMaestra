<html lang="en">
    <head>
        <?php require_once('./partials/head.php') ?> 
        <!-- Apache "incluye" o "trae el contenido" de este archivo y de esa manera el navegador lo podrá interpretar -->
        <title>¿Quienes somos?</title>
    </head>
    <body>
        <?php require_once('./partials/menu.php') ?>

        <section class="Contenedor">
            <div class="Tarjeta1">
               <img src="./imagenes/jaguar.png" width="210px">
               <article>
                  <h1> ¿Quienes somos?</h1>
                  <ol>
                        <li> Nombre: Samara Mejia Maya </li>
                        <li> Docente: Roldan Aquino Segura </li>
                        <li> Grupo: 7S2</li>
                        <li> INGENERIA EN SISTEMAS COMPUTACIONALES </li>
                        <li> ESPECIALIDAD: Administraciòn de servicios web. </li>
                        <li> 22 de Octubre del 2020 </li>
                        <br>
                      </ol>
               </article>  
            </div>
        <footer class="container py-5">
            <?php require_once('./partials/footer.php') ?>
        </footer>
        <?php require_once('./partials/js.php') ?>
    </body>
</html>
