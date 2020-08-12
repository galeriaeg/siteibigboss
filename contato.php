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
		
		
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-5M6ZGGN');</script>
		<!-- End Google Tag Manager -->
		
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
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5M6ZGGN"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->	
	
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
			<div class="titTopic">CONTATO</div>
			
			<section class="colunas">
				<div class="titulo-h2-dark" style="text-align:left;">Fale conosco</div>
				<div class="texto-dark margin-yes-no" style="text-align:left;">
					Preencha o formulário abaixo, deixe sua mensagem, comentário ou sugestão. Em breve entraremos em contato.
				</div>
				
				

				<form method="POST"  onsubmit="return checa_contato(this)" name="formContato" action="processa-contato">
					
					
					<label>Nome:</label><br />
					<input type="text" class="campog" name="nome" /><br />
					<label>E-mail:</label><br />
					<input type="text" class="campog" name="email" /><br />
					<label>Telefone:</label><br />
					<input type="text" name="tel" class="campom" onkeyup="javascript:somente_numero(this);" onkeypress="mascara(this,'##-#######')" maxlength="12"  /><br />
					<label>Cidade:</label><br />
					<input type="text" class="campom" name="cidade" /><br />
					<label>Estado:</label><br />
					<select class="campop" name="estado">
						<option value=''></option>
						<option value='AC'>AC</option>
						<option value='AL'>AL</option>
						<option value='AM'>AM</option>
						<option value='AP'>AP</option>
						<option value='BA'>BA</option>
						<option value='CE'>CE</option>
						<option value='DF'>DF</option>
						<option value='ES'>ES</option>
						<option value='GO'>GO</option>
						<option value='MA'>MA</option>
						<option value='MG'>MG</option>
						<option value='MS'>MS</option>
						<option value='MT'>MT</option>
						<option value='PA'>PA</option>
						<option value='PB'>PB</option>
						<option value='PE'>PE</option>
						<option value='PI'>PI</option>
						<option value='PR'>PR</option>
						<option value='RJ'>RJ</option>
						<option value='RN'>RN</option>
						<option value='RO'>RO</option>
						<option value='RR'>RR</option>
						<option value='RS'>RS</option>
						<option value='SC'>SC</option>
						<option value='SE'>SE</option>
						<option value='SP'>SP</option>
						<option value='TO'>TO</option>
					</select><br />
					
					<?php 
						//gera captcha
						$cptc = rand(5,15);
						$cptc = $cptc *(87+65)*3;
					?>
					
					<label>Mensagem:</label><br />
					<textarea name="mensagem" class="campog" cols="64" rows="7"></textarea><br /><br />
					<label>Repita o código de segurança: <b><?php echo $cptc; ?></b></label><br />
					<input type="text" class="campop"  name="captchaUser" /><br />
					<input type="hidden" value="<?php echo $cptc; ?>"  name="captchaRand"/><br />
					
					<input name="botao" type="submit" value="ENVIAR" class="botaoSubmit" />
					
				</form>

				
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
