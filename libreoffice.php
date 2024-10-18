<?php
include './views/header.php';
?>

<?php
include './views/menu.php';
?>

<div class="texto">
    <h2 class="tituloarticulo">LibreOffice</h2>
    <br>
    <figure>
        <img src="./images/libreoffice.png" alt="libreoffice">
        <figcaption>Writer, el procesador de texto de LibreOffice.</figcaption>
    </figure>
    <br>
    <h5><strong>Página oficial (en español)</strong></h5>
    <a href="https://es.libreoffice.org/">https://es.libreoffice.org</a><br><br><br>
    <p>Libreoffice es una suite ofimática de codigo abierto. Te la puedes descargar gratuitamente
        en múltiples idiomas, incluído el español. Dispone de procesador de textos, base de datos,
        hoja de cálculo, programa de dibujo, presentaciones y editor de fórmulas matemáticas.
    </p>
    <p>Es compatible con los formatos que utiliza el programa Office (ahora Microsoft 365) de Microsoft.
        Así que si quieres abrir o editar algún texto en formato doc, docx, algún archivo de excel, etc,
        vas a poder hacerlo normalmente sin problema. Aunque Libreofice utiliza por defecto formatos
        abiertos (libres de restricciones legales y económicas de uso) para sus programas, puedes elegir,
        si lo prefieres, cualquier otro formato que desees utilizar.
    </p>
    <p>
        Su procesador de textos cuenta con una barra de herramientas con multiples opciones
        como insertar imágenes o gráficos, y una que te resultará muy útil:
        <strong>Exportar directamente a PDF</strong>, que te permite guardar cualquier documento
        que abras o edites a ese formato. Sobre esta función he escrito una reseña en la sección
        de utilidades con el tema <a href="./textoapdf.php">Texto a pdf</a>.
    </p>
    <p>
        También posee extensiones que te pueden proporcionar funcionalidades adidionales,
        como diccionarios para corregir la ortografía o buscar sinónimos, así como plantillas
        para escribir curriculums, etc.
    </p>
    <br><br>
    <p>
        Artículo escrito el 13 de Octubre de 2024.
    </p>
</div>

<?php
include './views/footer.php';
?>