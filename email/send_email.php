<?php
//header("Access-Control-Allow-Origin: *");
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
//require_once("phpmailer/class.phpmailer.php");
require 'phpmailer/PHPMailerAutoload.php';
// Inicia a classe PHPMailer
$mail = new PHPMailer();
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->Host = "smtp.richardds.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Port = 587; 
$mail->Username = 'loop@richardds.com.br'; // Usuário do servidor SMTP
$mail->Password = 'gre123'; // Senha do servidor SMTP
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "loop@richardds.com.br"; // Seu e-mail
$mail->FromName = "Site"; // Seu nome
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAddress($_POST['email']);
$mail->AddAddress('talk@richardds.com.br');


// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Mensagem via site"; // Assunto da mensagem

$msg = file_get_contents('template.php');
$msg = str_replace(array("[nome]","[email]","[msg]"), array($_POST['nome'],$_POST['email'],htmlspecialchars($_POST['msg'])), $msg);


$mail->Body = $msg;
//$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n :)";
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("$fotoCropAtual", "$NomefotoCropAtual.jpg");  // Insere um anexo
// Envia o e-mail
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
// Exibe uma mensagem de resultado


if ($enviado) {
  

	/*header('Content-type: text/html; charset=utf-8');
	header("Expires: Mon, 01 Jan 1990 05:00:00 GMT" );
	header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" );
	header("Cache-Control: no-cache, must-revalidate" );
	header("Pragma: no-cache" );
	header('Content-type: application/json');*/
	
	$return = array( "sucesso" => true );
	
	echo json_encode($return);
  
  
} else {
  echo "Não foi possível enviar o e-mail.";
  echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
  echo $_POST['email'];
}




?>

