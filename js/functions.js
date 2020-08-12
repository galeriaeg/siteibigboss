
// MENU PRINCIPAL	
function exibeOculta(a){
	var b = a;
	if(b==0){
		document.getElementById('menuBars').src="imgs/btnFechaMenu.png";
		document.getElementById('menu').style.display='block';
		document.getElementById('menuBars').alt=1;
	}
	else{
		document.getElementById('menuBars').src="imgs/btnAbreMenu.png";
		document.getElementById('menu').style.display='none';
		document.getElementById('menuBars').alt=0;
	}
}




// contato
function checa_contato(formContato){
	
	if (formContato.nome.value == ""){ 
		alert("Informe seu nome!");
		formContato.nome.focus();
		return (false); 
	}
	
	if (formContato.email.value == ""){ 
		alert("Informe seu email!");
		formContato.email.focus();
		return (false); 
	}
	
	if (formContato.tel.value == ""){ 
		alert("Informe seu telefone!!");
		formContato.tel.focus();
		return (false); 
	}
	
	if (formContato.cidade.value == ""){ 
		alert("Informe sua Cidade!!");
		formContato.cidade.focus();
		return (false); 
	}
	
	
	if (formContato.estado.value == ""){ 
		alert("Informe seu Estado!");
		formContato.estado.focus();
		return (false); 
	}
	
	if (formContato.mensagem.value == ""){ 
		alert("Escreva a mensagem!");
		formContato.mensagem.focus();
		return (false); 
	}
	
	if (formContato.captchaUser.value == ""){ 
		alert("Informe o codigo corretamente!");
		formContato.captchaUser.focus();
		return (false); 
	}
}
// contato



function somente_numero(campo){  
	var digits="0123456789-."  
	var campo_temp   
    for (var i=0;i<campo.value.length;i++){  
        campo_temp=campo.value.substring(i,i+1)   
        if (digits.indexOf(campo_temp)==-1){  
            campo.value = campo.value.substring(0,i);  
		}  
	}  
}  

function mascara(src, mask){
	var i = src.value.length;
	var saida = mask.substring(0,1);
	var texto = mask.substring(i)
	if (texto.substring(0,1) != saida)
	{
		src.value += texto.substring(0,1);
	}
}


function icons(i){
	var f = i;
	
	
	if(f==5){
	document.getElementById('iconPro').src="imgs/icone-protecao-mov.gif";
	}
	else if(f==4){
	document.getElementById('iconPro').src="imgs/icone-protecao.png";
	}	

	if(f==1){
	document.getElementById('iconDesc').src="imgs/icone-decontos-mov.gif";
	}
	else if(f==0){
	document.getElementById('iconDesc').src="imgs/icone-descoonto.png";
	}

	if(f==3){
	document.getElementById('iconRede').src="imgs/icone-rede-mov.gif";
	}
	else if(f==2){
	document.getElementById('iconRede').src="imgs/icone-rede.png";
	}



}


