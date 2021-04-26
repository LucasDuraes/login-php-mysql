<?php
    session_start();
    if (!isset($_SESSION['usuario']) && !isset($_SESSION['nome']) && !isset($_SESSION['nivel'])) {
        header("location: index.php");
    }
    $_SESSION['usuario'];
    $_SESSION['nome'];
    $_SESSION['ativo'];
    $_SESSION['nivel'];
    $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Master - MRR-Racing</title>
    <link rel="stylesheet" href="./estilo_index./styleindex.css">
</head>
<body>
    <header class="cabecalho01">
        <a href="./index.php">LOGO</a>
        <nav>
            <ul class="menu">
                <li><a href="./logar./logar.php">Logar</a></li>
                <li><a href="./registrar./registrar.php">Registrar-se</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>
    <?php
        echo $_SESSION['usuario']."<br>";
        echo $_SESSION['nome']."<br>";
        echo $_SESSION['email']."<br>";
    ?>
</body>
</html>