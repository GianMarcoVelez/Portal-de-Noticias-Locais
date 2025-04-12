<?php
include 'dados/noticias.php';
include 'includes/header.php';

$id = $_GET["id"] ?? null;
$noticiaSelecionada = null;

foreach ($noticias as $noticia) {
    if ($noticia["id"] == $id) {
        $noticiaSelecionada = $noticia;
        break;
    }
}

if ($noticiaSelecionada) {
    echo "<h1>{$noticiaSelecionada["titulo"]}</h1>";
    echo "<img src='{$noticiaSelecionada["imagem"]}' alt='{$noticiaSelecionada["titulo"]}'>";
    echo "<p>{$noticiaSelecionada["descricao"]}</p>";
} else {
    echo "<p>Notícia não encontrada.</p>";
}

include 'includes/footer.php';
?>