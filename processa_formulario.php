<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $erro = '';

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $erro .= "Formato de email inválido!<br>";
    }

    if (empty($nome) || empty($email)) {
        $erro .= "Todos os campos são obrigatórios!<br>";
    }

    if (!empty($erro)) {
        echo $erro;

        echo '<br><a href="index.html">Voltar ao formulário</a>';
    } else {

        session_start();
        $_SESSION['nome'] = htmlspecialchars($nome);
        $_SESSION['email'] = htmlspecialchars($email);
        header("Location: obrigado.php");
        exit();
    }
} else {

    header('Location: index.html');
    exit();
}
