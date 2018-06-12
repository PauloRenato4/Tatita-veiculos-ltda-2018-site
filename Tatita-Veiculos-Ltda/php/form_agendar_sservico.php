<?
# alterar a variavel abaixo colocando o seu email

$destinatario = "tatitavw@automacaoresidencialtcc.com.br";

$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['estado'];
$veiculo = $_REQUEST['veiculo'];
$versao = $_REQUEST['versao'];
$ano = $_REQUEST['ano'];
$modelo = $_REQUEST['modelo'];
$chassi = $_REQUEST['chassi'];
$placa = $_REQUEST['placa'];
$km = $_REQUEST['km'];
$validade = $_REQUEST['validade'];
$horario = $_REQUEST['horario'];
$data = $_REQUEST['data'];
$combustivel = $_REQUEST['combustivel'];
$mensagem = $_REQUEST['mensagem'];

 // monta o e-mail na variavel $body

$body = $body . "===================================" . "\n\n";
$body = $body . "nome: " . $nome . "\n";
$body = $body . "sobrenome: " . $sobrenome . "\n";
$body = $body . "email: " . $email . "\n";
$body = $body . "telefone: " . $telefone . "\n";
$body = $body . "cidade: " . $cidade . "\n";
$body = $body . "estado: " . $estado . "\n";
$body = $body . "veiculo: " . $veiculo . "\n";
$body = $body . "versao: " . $versao . "\n";
$body = $body . "ano: " . $ano . "\n";
$body = $body . "modelo: " . $modelo . "\n";
$body = $body . "chassi: " . $chassi . "\n";
$body = $body . "placa: " . $placa . "\n";
$body = $body . "km: " . $km . "\n";
$body = $body . "validade: " . $validade . "\n";
$body = $body . "horario: " . $horario . "\n";
$body = $body . "date(format): " . $data . "\n";
$body = $body . "combustivel: " . $combustivel . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("http://tatitavw.com.br");


?>