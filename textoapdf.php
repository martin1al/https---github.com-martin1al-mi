<?php
include './views/header.php';
?>

<?php
include './views/menu.php';
?>

<div class="texto">
    <h2 class="tituloarticulo">Texto a pdf</h2>
    <br>
    <figure>
        <img src="./images/libreoffice.png" alt="libreoffice">
        <figcaption>Pasa textos a pdf facilmente con LibreOffice Writer.</figcaption>
    </figure>
    <br>
    <p>En ocasiones nos hallamos con la necesidad de pasar algún texto al formato pdf.
        Hay muchas formas de conseguirlo, pero vamos a comentar una que es inmediata, ya que solamente
        hemos de utilizar una función que tenemos en el procesador de textos gratuito LibreOffice Writer.
    </p>
    <p>
        Unicamente tenemos que abrir el texto del cual deseamos obtener el pdf en dicho programa y seguidamente
        pulsar con el raton el siguiente icono que hallamos en la barra de tareas al lado del
        icono de la impresora:
    </p>
    <figure>
        <img src="./images/textoapdf.png" alt="textoapdf">
        <figcaption>Este es el icono de la función para pasar textos a pdf.</figcaption>
    </figure>
    <p>
        Seguidamente se abrirá un cuadro de diálogo para que pongamos nombre al nuevo archivo pdf que
        vamos a crear. Después le damos a Guardar para cerrar el cuadro de diálogo y ya tenemos
        listo nuestro archivo, que se guardará en la carpeta predeterminada, que suele ser Descargas o
        Documentos, según lo tengamos configurado.
    </p>
    <br><br>
    <p>
        Artículo escrito el 17 de Octubre de 2024.
    </p>
</div>

<?php
include './views/footer.php';
?>