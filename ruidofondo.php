<?php
include './views/header.php';
?>

<?php
include './views/menu.php';
?>

<div class="texto">
    <h2 class="tituloarticulo">Ruido de fondo</h2>
    <br>
    <figure>
        <img src="./images/audacity.png" alt="audacity">
        <figcaption>Elimina el ruido de fondo de un archivo de audio con Audacity.</figcaption>
    </figure>
    <br>
    <p>Suele ser bastante habitual que realicemos alguna grabación y que aparezca en ella un molesto
        ruido de fondo que dificulta el que podamos escucharlo bien. ¿Hay alguna forma de eliminarlo
        o por lo menos de reducirlo lo máximo posible?
    </p>
    <p>
        Seguro que para un profesional del tema no habrá ningún problema para conseguirlo, pero nosotros
        no lo somos. ¿Hay alguna manera sencilla y gratuita de hacerlo? Sí. Con Audacity lo puedes conseguir.
        Sigue las siguientes instrucciones:
    </p>
    <p>- En primer lugar haz una copia del archivo de audio al que quieres quitar el ruido de fondo. De esa
        forma si accidentalmente modificamos el archivo con resultados indeseados no habrá problema porque
        estaremos trabajando con una copia del archivo original.
    </p>
    <p>
        - Seguidamente abrimos el archivo con el programa Audacity. Si lo hemos grabado en estereo aparecerán
        las 2 pistas en el programa, como en la foto de arriba. Seleccionamos con el ratón una porción donde
        <strong>SOLAMENTE</strong> aparezca ruido de fondo. Esa será la muestra que utilizará el programa para
        saber que ruido debe eliminar. Para trabajar más comodamente con la grabación podemos utilizar los botones
        Acercar y Alejar, que aparecen a la derecha en la barra de tareas. En mi ordenador también se pueden utilizar
        las teclas Control+1 y Control+3.
    </p>
    <p>
        - A continuación vamos al apartado <strong>Efecto</strong> en la barra de tareas y seguidamente
        <strong>Reducción de Ruido</strong>. Aparecerá el siguiente cuadro de texto:
    </p>
    <figure>
        <img src="./images/reduccionderuido.png" alt="reduccionderuido">
        <figcaption>Cuadro de diálogo de la reducción de ruido.</figcaption>
    </figure>
    <p>
        - Vemos que el paso 1 menciona que seleccionemos unos segundos de ruido para que Audacity sepa que filtrar.
        Como ya hemos seleccionado esos segundos anteriormente simplemente le damos al cuadro <strong>Obtener
            perfil de ruido</strong> y ya está.
    </p>
    <p>
        - Seguidamente vamos al paso 2. En esta ocasión seleccionamos el entero archivo de audio. Podemos hacerlo
        yendo al apartado <strong>Seleccionar</strong> de la barra de tareas y escogemos <strong>Todo</strong>.
        Aparecerá seleccionado todo el archivo de audio.
    </p>
    <p>
        - A continuación vamos de nuevo al apartado <strong>Efecto</strong> y otra vez seleccionamos
        <strong>Reducción de rudio</strong>. Aparecerá de nuevo el cuadro de diálogo de reducción de ruido
        y en esta ocasión, como ya hemos seleccionado anteriormente todo el archivo,
        solamente tendremos que darle al botón <strong>Aceptar</strong>. Veremos como el programa aplica la
        reducción de ruido al archivo.
    </p>
    <p>
        - Para finalizar, vamos al apartado <strong>Archivo</strong>, dentro de este vamos a <strong>Exportar</strong>
        y escogemos el formato de audio que queremos que tenga el archivo modificado. Puede ser mp3, wav, ogg,
        etc. Aparaecerá un cuadro de diálogo donde podemos ponerle un nombre a nuestro archivo. Le damos a
        <strong>Guardar</strong> y nos da la opción de incluir algunas etiquetas de metadatos al archivo.
        Si no queremos incluir ninguna, simplemente le damos a <strong>Aceptar</strong> y ya está.
        Ya tenemos nuestro archivo guardado en la carpeta predeterminada en el formato que hayamos escogido
        y con el ruido de fondo aminorado o eliminado por completo.
    </p>
    <br><br>
    <p>
        Artículo escrito el 18 de Octubre de 2024.
    </p>
</div>

<?php
include './views/footer.php';
?>