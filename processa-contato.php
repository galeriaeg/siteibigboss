<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>I Big Boss</title>
	</head>
	
	
	<body>
		
		<?php
			date_default_timezone_set('America/Sao_Paulo');
			$data = date('d/m/Y');	
			
			$nome = $_POST['nome'];	
			$email = $_POST['email'];	
			$tel = $_POST['tel'];
			$cidade = $_POST['cidade'];	
			$estado = $_POST['estado'];	
			$mensagem = $_POST['mensagem'];	
			$captchaUser = $_POST['captchaUser'];	
			$captchaRand = $_POST['captchaRand'];
			
			
			if($captchaUser<>$captchaRand){
				echo "<script>alert('Erro! Código verificador incorreto.')</script>";
				echo "<script>window.history.back();</script>";
			}	
			
			
			$texto = "
			<img src='https://www.alliancesecretariado.com.br/imgs/logo.png' width='270' />
			<p  style='font-size:1.2em;'>
			<hr style='border:1px solid #CCCCCC' />
			<br /><br />
			$data
			<br /><br />
			<b>Nome:</b> $nome<br />
			<b>E-mail: </b> $email<br />
			<b>Telefone: </b> $tel<br />
			<b>Cidade-UF: </b> $cidade - $estado<br />
			<b>Mensagem: </b><br />$mensagem
			<br /><br />
			<hr style='border:1px solid #CCCCCC' />
			<br /><br />
			Alliance Secretariado Remoto Real © 2020<br />
			<a href='https://www.alliancesecretariado.com.br'>https://www.alliancesecretariado.com.br/</a>
			</p>
			";
			$assunto = "Alliance Secretariado Remoto Real";
			$destino = "rebeca@alliancesecretariado.com.br";
			$headers = "MIME-Version: 1.1\r\n";
			$headers .= "Content-type: text/html; charset=UTF-8\r\n";
			$headers .= "From: $email\r\n"; // remetente
			$headers .= "Return-Path: $email\r\n"; // return-path
			$envio = mail($destino, $assunto, $texto, $headers);
			
			
			
			// CONTABILIZA ENVIOS
			include "../controlG/conecta.php";
			
			$sql = "SELECT total_email FROM configuracoes";
			$cons = $conexao->query($sql)or die($conexao->error);
			while($row = $cons->fetch_array()){
				$total_email	=	$row['total_email'];
			}
			
			$total_email = $total_email+1;
			
			$sql = "UPDATE configuracoes SET total_email='$total_email'";
			$update = mysqli_query($conexao, $sql);	
			// CONTABILIZA ENVIOS
			
			
			if($envio){
				echo "<script>alert('E-mail enviado com sucesso.')</script>";
				echo "<script>this.location='contato'</script>";
			}
			else{
				echo "A mensagem não pode ser enviada";
			}			
			
		?>
	</body>
	
	
</html>