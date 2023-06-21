<?php
// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera os dados do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];

    // Aqui você pode realizar as ações desejadas com os dados da doação
    // Por exemplo, armazenar em um banco de dados, enviar e-mail de confirmação, etc.

    // Exemplo de armazenamento em um arquivo de log
    $logData = "Nome: $name, E-mail: $email, Valor: $amount";
    file_put_contents('donation_logs.txt', $logData . PHP_EOL, FILE_APPEND);

    // Redireciona para a página de agradecimento
    header('Location: thank_you.php');
    exit;
} else {
    // Se o formulário não foi submetido corretamente, redireciona para uma página de erro
    header('Location: error.php');
    exit;
}
?>
