<main class="contenedor seccion">
    <h1>Contacto</h1>

    <?php
    if ($mensaje) { ?>
        <p class='alerta exito'><?php echo $mensaje; ?></p>
    <?php } ?>

    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp" />
        <source srcset="build/img/destacada3.jpg" type="image/jpeg" />
        <img loading="lazy" src="build/img/destacada3.jpg" alt="imagen contacto" />
    </picture>

    <h2>Llene el formulario de contacto</h2>

    <form class="formulario" action="/contacto" method="POST">
        <fieldset>
            <legend>Informacion personal</legend>
            <label for="nombre">Nombre</label>
            <input id="nombre" type="text" placeholder="nombre" name="contacto[nombre]" />

            <label for="Mensaje">Mensaje</label>
            <textarea id="Mensaje" name="contacto[mensaje]"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion Sobre la Propiedad</legend>

            <label for="opciones">Vende o Compra</label>
            <select id="opciones" name="contacto[tipo]">
                <option value="" disabled selected>-- Select --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>

            <label for="Presupuesto">Precio o Presupuesto</label>
            <input id="Presupuesto" type="number" placeholder="Precio o Presupuesto" name="contacto[precio]" />
        </fieldset>

        <fieldset>
            <legend>Contacto</legend>

            <p>Como desea ser contactado</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Telefono</label>
                <input id="contactar-telefono" type="radio" value="telefono" name="contacto[contacto]" />

                <label for="contactar-email">E-mail</label>
                <input id="contactar-email" type="radio" value="email" name="contacto[contacto]" />
            </div>

            <div id="contacto"></div>
        </fieldset>

        <input type="submit" value="enviar" class="boton-verde" />
    </form>
</main>