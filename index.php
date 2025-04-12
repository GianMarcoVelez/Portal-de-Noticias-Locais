<?php
include 'dados/noticias.php';
include 'includes/header.php';

foreach ($noticias as $noticia) {
    echo "<div class='noticia'>";
    echo "<img src='{$noticia["imagem"]}' alt='{$noticia["titulo"]}'>";
    echo "<h2>{$noticia["titulo"]}</h2>";
    echo "<p>Categoria: {$noticia["categoria"]}</p>";
    echo "<a href='detalhes.php?id={$noticia["id"]}'>Ver mais</a>";
    echo "</div>";
}

include 'includes/footer.php';
?>