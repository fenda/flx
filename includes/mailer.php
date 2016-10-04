<?php
	$emailsender = 'fenda@hypeberries.com';
	$subject = '';
 
	/* Verifica qual éo sistema operacional do servidor para ajustar o cabeçalho de forma correta.  */
	if(PATH_SEPARATOR == ";") $line_break = "\r\n"; //Se for Windows
	else $line_break = "\n"; //Se "nÃ£o for Windows"
	 
	// Passando os dados obtidos pelo formulário para as variáveis abaixo
	$name     	= $_POST['name'];
	$email    	= $_POST['email'];
	$location         = $_POST['location'];
	$twitter           	= $_POST['twitter'];
	$comment       = $_POST['message'];
 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$message = 'Nome: '.$name.
'<br />Email: '.$email.
'<br />Location: '.$location.
'<br />Twitter: '.$twitter.
'<br />Mensagem: '.$comment.'
<hr>';
 
 
/* Montando o cabeÃ§alho da mensagem */
$headers = "MIME-Version: 1.1" .$line_break;
$headers .= "Content-type: text/html; charset=iso-8859-1" .$line_break;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: " . $emailsender.$line_break;
//$headers .= "Cc: " . $comcopia . $line_break;
//$headers .= "Bcc: " . $comcopiaoculta . $line_break;
$headers .= "Reply-To: " . $email . $line_break;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
 
/* Enviando a mensagem */

//É obrigatório o uso do parâmetro -r (concatenação do "From na linha de envio"), aqui na Locaweb:

if(!mail($emailsender, $subject, $message, $headers ,"-r".$emailsender)){ // Se for Postfix
	$headers .= "Return-Path: " . $emailsender . $line_break; // Se "não for Postfix"
	mail($emailsender, $subject, $message, $headers );
}
 
/* Mostrando na tela as informações enviadas por e-mail */
echo "There was a problem with your submission, please try again.";
?>
