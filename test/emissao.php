<?php
	$token = $_POST['token'];
	$conteudo = $_POST['conteudoEnviar'];

	$NFeAPI = new NFeAPI();
	
	$_SESSION['retornoAPI'] = $NFeAPI->emitirNFe($token, $conteudo);

?>