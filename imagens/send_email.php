<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Configurações do e-mail
    $to = "gebhsantos@gmail.com";  // E-mail do destinatário
    $subject = "Novo contato de " . $name;
    $body = "Nome: $name\nEmail: $email\nMensagem: $message";

    // Cabeçalhos de e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Enviar e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Falha no envio do email.";
    }
}
?>
