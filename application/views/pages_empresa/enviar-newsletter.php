<?php

//Dados Pessoais
$nome = $_POST[nome];
$email = $_POST[email]; 

//Cabeçalho do Email
$cabecalho = "Assinatura de Newsletter | Alexcom";


//Validação
if (!$nome || !$email) 
	{
		echo "<script type=\"text/javascript\">{window.location = (\"erro.php\");}</script>!";
	}

else
	{
		echo "<script type=\"text/javascript\">{window.location = (\"enviado.php\");}</script>!";

//Remetente
//$seuemail = "wallace_erick@hotmail.com";
$seuemail = "cac@alexcom.com.br";

//Corpo do Email
$mens .= "<table width=\"500\" border=\"0\" cellspacing=\"5\" cellpadding=\"0\" style=\"border:1px solid #0099cc; font-family: Arial; font-size:14px; padding: 20px; border-radius: 5px;\">";
$mens .= "<tr><td colspan=\"2\"><a href=\"http://www.alexcom.com.br/\"><img src=\"http://www.alexcom.com.br/images/logo-alex.png\" alt=\"Alexcom\" /></a></td></tr>";
$mens .= "<tr><td width=\"100\" align=\"left\" valign=\"top\"><strong>Nome:</strong></td><td width=\"400\" align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $nome </td></tr>";
$mens .= "<tr><td align=\"left\" valign=\"top\"><strong>E-mail:</strong></td><td align=\"left\" valign=\"top\" style=\"color: #0099cc;\"> $email </td></tr>";
$mens .= "<tr><td height=\"50\" colspan=\"2\" align=\"left\" valign=\"middle\">Desenvolvido por <a href=\"http://www.wallaceerick.com.br/\" title=\"Wallace Erick\" style=\"color: #0099cc; text-decoration: none;\">Wallace Erick</a>.</td></tr>";
$mens .= "</table>";

$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
$headers .= "From: cac@alexcom.com.br\r\n"; 

//Função mail() para o envio
mail($seuemail, $cabecalho, $mens, $headers);}
?>