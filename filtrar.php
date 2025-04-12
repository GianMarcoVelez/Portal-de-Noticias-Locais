<?php
include 'dados/noticias.php';
include 'includes/header.php';

$categoriaFiltro = $_GET["categoria"] ?? null;

echo "<form method='GET'>";
echo "<label>Filtrar por categoria:</label>";
echo "<select name='categoria'>";
echo "<option value=''>Todas</option>";
foreach ($noticias as $noticia) {
    echo "<option value='{$noticia["categoria"]}'>{$noticia["categoria"]}</option>";
}
echo "</select>";
echo "<button type='submit'>Filtrar</button>";
echo "</form>";

foreach ($noticias as $noticia) {
    if (!$categoriaFiltro || $noticia["categoria"] == $categoriaFiltro) {
        echo "<div class='noticia'>";
        echo "<h2>{$noticia["titulo"]}</h2>";
        echo "<a href='detalhes.php?id={$noticia["id"]}'>Ver mais</a>";
        echo "</div>";
    }
}

include 'includes/footer.php';
?>