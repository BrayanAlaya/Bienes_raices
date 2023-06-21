<?php
    include "./includes/templates/header.php";
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>
        <section class="blog_index">
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
            <section class="blog_index">
                <article class="blog_contenedor">
                    <div class="image_blog">
                        <picture>
                            <source srcset="build/img/blog3.webp" type="image/webp">
                            <source srcset="build/img/blog3.jpg" type="image/jpeg">
                            <img src="./build/img/blog3.jpg" alt="imagen blog1">
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
                            <source srcset="build/img/blog4.webp" type="image/webp">
                            <source srcset="build/img/blog4.jpg" type="image/jpeg">
                            <img loading="lazy" src="./build/img/blog4.webp" alt="imagen blog1">
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
        </section>
    </main>
    
    <?php include "./includes/templates/footer.php"?>