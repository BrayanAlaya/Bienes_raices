<?php
include "./includes/funciones.php";
includeTemplate("header");
?>
<main class="contenedor seccion contenido-centrado">
    <h1>Casa en Venta frente al bosque</h1>
    <div class="anuncio">
        <picture>
            <source srcset="./build/img/destacada.webp" type="image/webp">
            <source srcset="./build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="./build/img/destacada.jpg" alt="imagen anuncio2">
        </picture>
        <div class="anuncio-contenido">
            <p class="precio">$3,000,000</p>
            <ul class="anuncio-iconos">
                <li>
                    <img src="./build/img/icono_wc.svg" alt="icono_wc">
                    <p>3</p>
                </li>
                <li>
                    <img src="./build/img/icono_estacionamiento.svg" alt="icono icono_estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img src="./build/img/icono_dormitorio.svg" alt="icono_dormitorio">
                    <p>4</p>
                </li>
            </ul>
        </div>
        <div class="padding">
            <p>Proin consequat viverra sapien, malesuada tempor tortor feugiat vitae. In dictum felis et nunc aliquet
                molestie. Proin tristique commodo felis, sed auctor elit auctor pulvinar. Nunc porta, nibh quis
                convallis sollicitudin, arcu nisl semper mi, vitae sagittis lorem dolor non risus. Vivamus accumsan
                maximus est, eu mollis mi. Proin id nisl vel odio semper hendrerit. Nunc porta in justo finibus tempor.
                Suspendisse lobortis dolor quis elit suscipit molestie. Sed condimentum, erat at tempor finibus, urna
                nisi fermentum est, a dignissim nisi libero vel est. Donec et imperdiet augue. Curabitur malesuada
                sodales congue. Suspendisse potenti. Ut sit amet convallis nisi.
            </p>
            <p>
                Aliquam lectus magna, luctus vel gravida nec, iaculis ut augue. Praesent ac enim lorem. Quisque ac
                dignissim sem, non condimentum orci. Morbi a iaculis neque, ac euismod felis. Fusce augue quam,
                fermentum sed turpis nec, hendrerit dapibus ante. Cras mattis laoreet nibh, quis tincidunt odio
                fermentum vel. Nulla facilisi.
            </p>
        </div>

</main>
<?php includeTemplate("footer") ?>