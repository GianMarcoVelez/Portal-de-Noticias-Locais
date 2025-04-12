<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}

echo "<h1>Bem-vindo, {$_SESSION["usuario"]}!</h1>";
echo "<form method='POST'>";
echo "<input type='text' name='titulo' placeholder='Título da notícia'>";
echo "<input type='text' name='categoria' placeholder='Categoria'>";
echo "<textarea name='descricao' placeholder='Descrição'></textarea>";
echo "<button type='submit'>Publicar</button>";
echo "</form>";
?>
