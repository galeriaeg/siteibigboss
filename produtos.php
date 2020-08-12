<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>I Big Boss</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />
		<meta name="robots" content="index, follow" />
		<meta name="keywords" content="ganhos,lucro,cupom,descontos,vantagens,ibigboss,big,clube,negóciios,independência,financeira,chefe,seguro,seguradora"/>
		<meta name="description" content="I Big Boss - Clube de vantagens" />
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta name="author" content="I Big Boss" />
		<link rel="icon" type="image/png" href="imgs/favicon.ico" />
		<meta name="theme-color" content="#ffffff">		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet" >
		<link rel="stylesheet" href="css/4k.css" />
		<link rel="stylesheet" href="css/tab.css" />
		<link rel="stylesheet" href="css/mob.css" />
		<script type="text/javascript" charset="UTF-8" src="js/functions.js"></script>
		
		
		
		<!-- Link para redes -->
		<meta property="og:locale" content="pt_BR" />
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://www.ibigboss.com" />
		<meta property="og:description" content="I Big Boss - Clube de vantagens.">
		<meta property="og:image" itemprop="image" content="https://www.ibigboss.com.br/imgs/icone-id.jpg">
		<link itemprop="thumbnailUrl" href="https://www.ibigboss.com.br/imgs/icone-id.jpg"> 
		<meta property="og:image:type" content="image/jpeg">
		<meta property="og:image:width" content="300">
		<meta property="og:image:height" content="300">
		<meta property="og:updated_time" content="updatedtime">
		<!-- Link para redes -->			
		
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158581106-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-158581106-1');
		</script>
	</head>
	
	
	<body onload="loading();">
		<a name="mural"></a>
		<a id="topoPage"></a>

		
		<div id="malhaLoad">
			<img src="imgs/load.gif" class="load"/>
		</div>
		
	
		
		<section id="topo" class="col1">
			<?php include('i-topo.php');?>
		</section>
		<img src="imgs/sombra.png" class="sombra" style="margin-top:0" />
		
		

		
		<main id="content">
		<div class="titTopic">PRODUTOS</div>
		
			<section class="colunas">
				<div class="titulo-h2-dark" style="text-align:left;">Conheça nossos planos</div>
				
				<div class="texto-dark margin-yes-no" style="text-align:left;">
					Ao escolher um de nossos planos você conta com um quite completo de proteção e vantagens que você não encontrar 
					em qualquer outro lugar. Nossos planos foram pensados de forma a serem acessíveis para qualquer pessoa, para que 
					todo possam iniciar seus sonhos enquanto protegem a se e suas famílias. Com apenas R$ 1,99/ dia é possível se 
					associar em nosso melhor plano.
					
					<br /><br />
					
					<p>
						<div class="col4">
							<span class="headProduto">PROTEÇÃO SIMPLES</span>
							<span class="precoProduto">R$ 19,08 / Mês</span>
						</div>
						
						<div class="col4">
							<span class="headProduto">PROTEÇÃO ESSENCIAL</span>
							<span class="precoProduto">R$ 27,54 / Mês</span>
						</div>
						
						<div class="col4">
							<span class="headProduto">PROTEÇÃO FAMILIAR 1</span>
							<span class="precoProduto">R$ 49,29 / Mês</span>
						</div>
						
						<div class="col4">
							<span class="headProduto">PROTEÇÃO FAMILIAR 2</span>
							<span class="precoProduto">R$ 57,78 / Mês</span>
						</div>
					</p>
					
					<p>
						<input name="botao" type="submit" onclick="window.location='down/tabela-produtos.pdf'" value="+ BAIXAR TABELA COMPLETA" class="botaoSubmit">
					</p>
					
					
				</div>
				
			</section>
			
			
			<section class="col1 divider-redes">
				<?php include('i-redes.php');?>
			</section>
			
			
			
		</main>
		
		
	
		
		
		<footer class="col1" id="box-footer">
			<?php include('i-footer.php');?>
		</footer>
		
		
		<script>
			function loading() {
				document.getElementById('malhaLoad').style.display="none";
			}
		</script>

		
		
		<div id="seta"  style="display:none;">	
			<?php include('i-boton-up.html');?>
		</div>
		
		
	</body>
	
	
</html>
