<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Configurações do e-mail
    $to = "marcohyamamoto@gmail.com";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Corpo do e-mail
    $email_body = "Nome: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Assunto: $subject\n";
    $email_body .= "Mensagem: \n$message";

    // Envia o e-mail
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem.";
    }
}
?>
