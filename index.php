<?php

//Import PHPMailer classes into the global namespace

//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;

$ok = 0;

if (isset($_POST['email'])) {

  //Load Composer's autoloader

  require './mailer/Exception.php';

  require './mailer/PHPMailer.php';

  require './mailer/SMTP.php';

  //Create an instance; passing `true` enables exceptions

  $mail = new PHPMailer(true);

  try {

    //Server settings

    //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

    $mail->isSMTP();                                            //Send using SMTP

    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through

    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

    $mail->Username   = 'cybercompany@smpsistema.com.br';                     //SMTP username

    $mail->Password   = 'Senac@agencia02';                               //SMTP password

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption

    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    //Recipients

    $mail->setFrom('cybercompany@smpsistema.com.br', 'Mailer');

    $mail->addAddress('lucas.oliveira9712@gmail.com', 'Joe User');     //Add a recipient

    //$mail->addAddress('ellen@example.com');               //Name is optional

    //$mail->addReplyTo('info@example.com', 'Information');

    //$mail->addCC('cc@example.com');

    //$mail->addBCC('bcc@example.com');

    //Attachments

    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments

    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content

    $nome = $_POST['nome'];

    $email = $_POST['email'];

    $tel = $_POST['tel'];

    $mens = $_POST['mens'];


    $mail->CharSet = 'UTF-8';                                  //Set email format to HTML

    $mail->isHTML(true);                                  //Set email format to HTML

    $mail->Subject = 'Cyber Company';

    $mail->Body    = "
    Nome: $nome <br>

    E-mail: $email <br>

    Telefone: $tel <br>

    Mensagem: $mens";

    $mail->AltBody = "
    Nome: $nome <br>

    E-mail: $email <br>

    Telefone: $tel <br>

    Mensagem: $mens";

    $mail->send();

    $ok = 1;

    //echo 'Messagem enviada com sucesso';

  } catch (Exception $e) {
    $ok = 2;
    //echo "zaralho fiote : {$mail->ErrorInfo}";

  }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cyber</title>

  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" type="text/css" href="css/slick.css" />
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<!--
  :root{
  #0b3961;
  #36393b;
  #fefffe;
  #000000;
  #171717;
  #d6e9ff;
  #00296b;
  #ffd500
  #F7AEF8
  #B388EB
  #8093F1
  #72DDF7
  #5F0A87;
  #2F004F;
}
-->

<body>

  <!-- topo -->

  <?php require_once('conteudo/topo.php'); ?>

  <main>

    <!-- sobre -->

    <?php require_once('conteudo/sobre.php'); ?>

    <!-- metodo -->

    <?php require_once('conteudo/metodo.php'); ?>

    <!-- entrega -->

    <?php require_once('conteudo/entrega.php'); ?>

    <!-- orcamento -->

    <?php require_once('conteudo/orcamento.php'); ?>

    <!-- Solucoes -->

    <?php require_once('conteudo/solucoes.php'); ?>


    <!-- Projetos -->

    <?php require_once('conteudo/projetos.php'); ?>

    <!-- faq -->

    <?php require_once('conteudo/faq.php'); ?>

    <!-- redes -->

    <?php require_once('conteudo/redes.php'); ?>

    <footer>

      <!-- formulario -->

      <?php require_once('conteudo/formulario.php'); ?>

    </footer>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <script src="js/slick.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="js/animacoes.js"></script>

    <script>
    // Obtém o botão pelo seu ID
    const botao = document.getElementById('meuBotao');

    // Adiciona um ouvinte de evento para o clique no botão
    botao.addEventListener('click', function() {
      // Redireciona para outra página do seu site
      window.location.href = 'O.php';
    });
  </script>


</body>

</html>