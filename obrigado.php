<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrigado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .container {
            text-align: center;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Obrigado, <?php echo htmlspecialchars($_SESSION['nome']); ?>!</h1>
        <p>Seu formulário foi enviado com sucesso.</p>
        <p>Email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
        <p><a href="index.html">Voltar ao Formulário</a></p>
    </div>
    <?php

    session_unset();
    session_destroy();
    ?>
</body>
</html>