<?
# alterar a variavel abaixo colocando o seu email

$destinatario = "tatitavw@automacaoresidencialtcc.com.br";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['estado'];
$mensagem = $_REQUEST['mensagem'];
$assunto = $_REQUEST['assunto'];

 // monta o e-mail na variavel $body

$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "telefone: " . $telefone . "\n";
$body = $body . "cidade: " . $cidade . "\n";
$body = $body . "estado: " . $estado . "\n";
$body = $body . "assunto: " . $assunto . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("http://tatitavw.com.br");


?>