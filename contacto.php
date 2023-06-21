<?php
include "./includes/templates/header.php";
?>
<main class="contenedor seccion">
    <h1>Contacto</h1>
    <picture>
        <source src="./build/img/destacada3.webp" type="image/webp">
        <source src="./build/img/destacada3.jpg" type="image/jpeg">
        <img src="./build/img/destacada3.jpg" alt="imagen contacto">
    </picture>
    <h1>Llene el formulario de contacto</h1>
    <form class="formulario">
        <fieldset>
            <legend>Información Personal</legend>
            <label for="nombre">NOMBRE:</label>
            <input type="text" placeholder="Tu Nombre" id="nombre">

            <label for="email">E-MAIL:</label>
            <input type="email" placeholder="Tu email" id="email">

            <label for="telefono">TELÉFONO:</label>
            <input type="tel" placeholder="Tu telefono" id="telefono">

            <label for="mensaje">MENSAJE:</label>
            <textarea id="mensaje"></textarea>
        </fieldset>
        <fieldset>
            <legend>Información sobre la propiedad</legend>

            <label for="vende-compra">VENDE O COMPRA</label>
            <select name="vende-compra" id="vende-compra">
                <option value="" selected disabled>--Seleccione--</option>
                <option value="vende">VENDE</option>
                <option value="compra">COMPRA</option>
            </select>

            <label for="precio-presupuesto">PRECIO O PRESUPUESTO:</label>
            <input type="number" placeholder="Tu Precio o Presupuesto">
        </fieldset>
        <fieldset>
            <legend>Información Sobre la Propiedad</legend>
            <p>Como desea ser contactado</p>
            <div class="form-contactar">
                <label for="telefono-telefono">telefono</label>
                <input type="radio" value="telefono" name="contacto" id="telefono-telefono">

                <label for="telefono-email">E-mail</label>
                <input type="radio" value="email" name="contacto" id="telefono-email">
            </div>

            <p>Si eligió teléfono, elija la fecha y la hora</p>

            <label for="fecha">FECHA:</label>
            <input type="date" id="fecha">

            <label for="hora">HORA:</label>
            <input type="time" id="hora" min="9:00" max="18:00">
        </fieldset>
        <input type="submit" value="Enviar" id="btn-formulario_contacto">
    </form>
</main>

<?php include "./includes/templates/footer.php" ?>