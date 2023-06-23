<?php
include "../../includes/funciones.php";
includeTemplate("header");
?>

<main class="contenedor seccion">
    <h1>Crear propiedad</h1>
    <a href="/admin/index.php" class="boton-verde-inlineblock">volver</a>
    <form id="crearPropiedad-formulario" class="formulario">
        <fieldset>
            <legend>Informacion General</legend>
            <label for="porpiedad_name">TITULO:</label>
            <input type="text" id="porpiedad_name" placeholder="Titulo Propiedad">
            <label for="porpiedad_price">PRECIO:</label>
            <input type="number" id="porpiedad_price" min="1" accept="number" placeholder="Precio Propiedad">
            <label for="porpiedad_image">IMAGEN:</label>
            <input type="file" id="porpiedad_image" accept="image/jpeg, image/png">
            <label for="porpiedad_info">Descripcion:</label>
            <textarea id="porpiedad_info"  cols="30" rows="10"></textarea>
        </fieldset>
        <fieldset>
            <legend>Informacion Propiedad</legend>
            <label for="room-number"></label>
            <input type="number" id="room-number" min="1" placeholder="Ej: 3">
            <label for="wc-number"></label>
            <input type="number" id="wc-number" min="1" placeholder="Ej: 3">
            <label for="garage-number"></label>
            <input type="number" id="garage-number" min="1" placeholder="Ej: 3">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select name="" id="">

            </select>
        </fieldset>
        <input type="submit" class="boton-verde-inlineblock" value="Crear Propiedad">
    </form>
</main>

<?php includeTemplate("footer") ?>