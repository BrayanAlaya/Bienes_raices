<?php
include "./includes/funciones.php";
includeTemplate("header", true);
?>
<main class="contenedor seccion">
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
</main>
<section class="seccion contenedor">
    <h2>Casas y Depas</h2>
    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="./build/img/anuncio1.webp" type="image/webp">
                <source srcset="./build/img/anuncio1.jpg" type="image/jpeg">
                <img loading="lazy" src="./build/img/anuncio1.jpg" alt="imagen anuncio1">
            </picture>
            <div class="anuncio-contenido">
                <h3>Casa de Lujo en el Lago</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
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
                <a href="anuncios.html">Ver propiedad</a>
            </div>

        </div>
        <div class="anuncio">
            <picture>
                <source srcset="./build/img/anuncio2.webp" type="image/webp">
                <source srcset="./build/img/anuncio2.jpg" type="image/jpeg">
                <img loading="lazy" src="./build/img/anuncio2.jpg" alt="imagen anuncio2">
            </picture>
            <div class="anuncio-contenido">
                <h3>Casa Terminados de Lujo</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
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
                <a href="anuncios.html">Ver propiedad</a>
            </div>

        </div>
        <div class="anuncio">
            <picture>
                <source srcset="./build/img/anuncio3.webp" type="image/webp">
                <source srcset="./build/img/anuncio3.jpg" type="image/jpeg">
                <img loading="lazy" src="./build/img/anuncio3.jpg" alt="imagen anuncio3">
            </picture>
            <div class="anuncio-contenido">
                <h3>Casa con alberca</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
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
                <a href="anuncios.html">Ver propiedad</a>
            </div>

        </div>
    </div>
    <div class="alinear-derecha">
        <a href="anuncios.html" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="bgcontacto ">
    <div class="contactoindex contenedor ">
        <h1>Encuentra la casa de tus sueños</h1>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.html">Contáctanos</a>
    </div>
</section>

<div class="contenedor seccion seccion_inferior">
    <section class="blog_index">
        <h3>Nuestro Blog</h3>
        <article class="blog_contenedor">
            <div class="image_blog">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img src="./build/img/blog1.jpg" alt="imagen blog1">
                </picture>
            </div>

            <a href="entrada.html" class="blog_contenido">
                <h4>Terraza en el techo de tu casa</h4>
                <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>
                <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y
                    ahorrando dinero</p>
            </a>

        </article>
        <article class="blog_contenedor">
            <div class="image_blog">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="./build/img/blog2.webp" alt="imagen blog1">
                </picture>
            </div>
            <a href="entrada.html" class="blog_contenido">
                <h4>Guia para la decoración de tu hogar</h4>
                <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span> </p>
                <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle
                    vida a tu espacio</p>
            </a>
        </article>
    </section>
    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                El personal se comporto de una excelente forma, muy buena atencion y la casa que me ofrecieron
                cumple
                con todas mis expectativas
            </blockquote>
            <p class="alinear-derecha">- Brayan Alaya</p>
        </div>
    </section>
</div>

<?php includeTemplate("footer") ?>