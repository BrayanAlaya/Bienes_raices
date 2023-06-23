<?php
include "../includes/funciones.php";
includeTemplate("header");
?>

<main class="contenedor seccion">
    <h1>Ventana de Administrador</h1>
    <a href="/admin/propiedades/crear.php" class="boton-verde-inlineblock">Crear</a>
    <a href="/admin/propiedades/eliminar.php" class="boton-verde-inlineblock">Eliminar</a>
    <a href="/admin/propiedades/actualizar.php" class="boton-verde-inlineblock">Actualizar</a>
</main>

<?php includeTemplate("footer") ?>