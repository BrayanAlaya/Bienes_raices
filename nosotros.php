<?php
include "./includes/funciones.php";
includeTemplate("header", true);
?>
<main class="contenedor seccion nosotros">
    <h1>Conoce sobre Nosotros</h1>
    <div class="contenido-nosotros">
        <div class="image-nosotros">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img src="./build/img/nosotros.jpg" alt="nosotros imagen">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>25 Años de experiencia</blockquote>
            <p>Proin consequat viverra sapien, malesuada tempor tortor feugiat vitae. In dictum felis et nunc
                aliquet molestie. Proin tristique commodo felis, sed auctor elit auctor pulvinar. Nunc porta, nibh
                quis convallis sollicitudin, arcu nisl semper mi, vitae sagittis lorem dolor non risus. Vivamus
                accumsan maximus est, eu mollis mi. Proin id nisl vel odio semper hendrerit. Nunc porta in justo
                finibus tempor. Suspendisse lobortis dolor quis elit suscipit molestie. Sed condimentum, erat at
                tempor finibus, urna nisi fermentum est, a dignissim nisi libero vel est. Donec et imperdiet augue.
                Curabitur malesuada sodales congue. Suspendisse potenti. Ut sit amet convallis nisi.</p>
            <p>
                Aliquam lectus magna, luctus vel gravida nec, iaculis ut augue. Praesent ac enim lorem. Quisque ac
                dignissim sem, non condimentum orci. Morbi a iaculis neque, ac euismod felis. Fusce augue quam,
                fermentum sed turpis nec, hendrerit dapibus ante. Cras mattis laoreet nibh, quis tincidunt odio
                fermentum vel. Nulla facilisi.
            </p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>
    <div class="iconosindex-contenido">
        <div class="iconosindex-info">
            <img src="./build/img/icono1.svg" alt="">
            <h3>Seguridad</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis ut esse voluptate praesentium
                cupiditate natus atque architecto est! Numquam quia eos sapiente explicabo impedit dicta illo maxime
                consectetur accusamus ipsa?</p>
        </div>
        <div class="iconosindex-info">
            <img src="./build/img/icono2.svg" alt="">
            <h3>Precio</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis ut esse voluptate praesentium
                dadsupiditate natus atque architecto est! Numquam quia eos sapiente explicabo impedit dicta illo
                maxime
                consectetur accusamus ipsa?</p>
        </div>
        <div class="iconosindex-info">
            <img src="./build/img/icono3.svg" alt="">
            <h3>A Tiempo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis ut esse voluptate praesentium
                cupiditate natus atque architecto est! Numquam quia eos sapiente explicabo impedit dicta illo
                maxime
                consectetur accusamus ipsa?</p>
        </div>
    </div>
</section>

<?php includeTemplate("footer") ?>