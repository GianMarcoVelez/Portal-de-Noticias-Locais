<?php
session_start();

$usuarios = ["admin" => password_hash("senha123", PASSWORD_DEFAULT)];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if (isset($usuarios[$usuario]) && password_verify($senha, $usuarios[$usuario])) {
        $_SESSION["usuario"] = $usuario;
        header("Location: protegido.php");
    } else {
        echo "<p>Login inválido</p>";
    }
}

echo "<form method='POST'>";
echo "<input type='text' name='usuario' placeholder='Usuário'>";
echo "<input type='password' name='senha' placeholder='Senha'>";
echo "<button type='submit'>Entrar</button>";
echo "</form>";
?>