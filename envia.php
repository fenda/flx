<?php  

$date = date("d/m/Y h:i");
$ip = getenv("REMOTE_ADDR");
$navegador = $_SERVER['HTTP_USER_AGENT']; 
$nomeremetente = $_POST["nomeremetente"]; 
$emailremetente = $_POST["emailremetente"]; 
$email = 'teste@arthacapital.com.br'; // Inserir o endereço de email a qual você quer que chegue
$telefone = $_POST["telefone"];
$assunto = $_POST["assunto"]; 
$mensagem = $_POST["mensagem"]; 

                $MailRecipiente = $email;     
                $MailAssunto    = $assunto; 
                $headers = "MIME-Version: 1.0\n"; 
                $headers .= "Content-type: text/html; charset=iso-8859-1\n"; 
                $headers .= "From: $email\n"; 
                $headers .= "Return-Path: $email\n"; 
                 
                 $msg = ' 
				 		 <i>Enviado por:</i> <br/><br/>
                         <b>Nome:</b> '.$nomeremetente.'<br/> 
                         <b>Email:</b> '.$emailremetente.'<br/> 
                         <b>Telefone:</b> '.$telefone.'<br/>
						 <b>Assunto:</b> '.$assunto.'<br/><br/> 
                         <b>Mensagem:</b> '.$mensagem.'<br/><br/> 
						 <b>IP do Visitante:</b> '.$ip.'<br/> 
						 <b>Navegador do Visitante:</b> '.$navegador.'<br/> 
						 <b>Data e Hora:</b> '.$date.'<br/> 
                         '; 
             
                  mail($MailRecipiente,$MailAssunto,$msg,$headers);
				  
				  
				  // AQUI SE COLOCA A COPIA CASO QUEIRA QUE O FORMULARIO ENVIE (DUPLIQUE QUANTAS VEZES QUISER)
				  
				  mail('seuemail@domino.com.br',$MailAssunto,$msg,$headers);


//AUTO RESPOSTA 
                $headers_ = "MIME-Version: 1.0\r\n"; 
                $headers_ .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                $headers_ .= "From:  $email\r\n"; 
                $site = "www.xxxx.com.br"; 
                $titulo = "Titulo da Auto Resposta"; 
                $mensagem = " 
                <br/> 
                Mensagem da Auto Resposta!<br/> 

                Obrigado,<br/> 
                Finalização<br/>"; 

                mail($emailremetente,$titulo,$mensagem,$headers_); 

echo "<script>location.href='sucesso.php'</script>"; // Página que será redirecionada

?>