<?
include("sis/configSis.php");
if(!isset($_POST["enviar"])){

	$dados = array(
		"nomeCliente" => $_POST["nome"],
		"siteCliente" => $_POST["site"],
		"empresaCliente" => $_POST["empresa"],
		"emailCliente" => $_POST["email"],
		"telefoneCliente" => $_POST["fone"],
		"assuntoCliente" => $_POST["subject"],
		"mensagemCliente" => $_POST["msg"]
		);
	
	$insert = create("clientes", $dados);
	if($insert){
		echo "<script>alert('Contato enviado com sucesso, procuraremos a sua empresa em breve!')</script>";
	}
}
?>
