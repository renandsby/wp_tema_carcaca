<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enviando contato</title>
</head>
<body>
  

<?php 

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Validação de dados
$lucro = $_POST['lucro'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];


//////////////////////////////////////////////////////////// Envio de email //////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

date_default_timezone_set("Brazil/East");

$conteudoEmail = "<strong>Contato site:</strong> Orion Pag <br /><br />";
$conteudoEmail .= "<strong>Nome:</strong> $nome <br />";
$conteudoEmail .= "<strong>Telefone:</strong> $telefone <br />";
$conteudoEmail .= "<strong>Email:</strong> $email <br />";
$conteudoEmail .= "<strong>Mensagem:</strong> $mensagem <br />";


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

// Load Composer's autoloader
include('../plugins/PHPMailer/vendor/autoload.php');

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail->isSMTP();     

try {

    $mail->Host = 'mail.grupovmm.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
    $mail->SMTPAuth = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
    $mail->Port = 587; //  Usar 587 porta SMTP
    $mail->Username = 'smtp@grupovmm.com.br'; // Usuário do servidor SMTP (endereço de email)
    $mail->Password = 'Grupovmm*@123'; // Senha do servidor SMTP (senha do email usado)


    //Define o remetente
    $mail->SetFrom('smtp@grupovmm.com.br', utf8_decode("$nome - Contato OrionPag")); //Seu e-mail
    $mail->AddReplyTo("$email", utf8_decode("$nome - Contato OrionPag")); //Seu e-mail
    $mail->Subject = 'Contato OrionPag';//Assunto do e-mail


    //Define os destinatário(s)

    $mail->AddAddress("contato@orionpag.com.br");
    $mail->AddAddress("stun.designer@gmail.com");

    //Mensagem
    $mail->isHTML(true);    
    $mail->Body = (utf8_decode($conteudoEmail));

    $mail->Send();

    $_SESSION['msg'] = '<script>notyf.success("Contato enviado com sucesso.");</script>';

    ?>
      <script>
        window.open(document.referrer,'_self');
      </script>
      <?php

}catch (phpmailerException $e) {
    $_SESSION['msg'] = '<script>notyf.error("Erro ao enviar seu contato, atualize a pagina e tente novamente!");</script>';
    ?>
      <script>window.open(document.referrer,'_self');</script>
    <?php
}

?>

</body>
</html>