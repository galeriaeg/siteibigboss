function exibeOculta(a){
		var b = a;
		alert(b);
		if(b==0){
			//document.getElementById('menuBars').value=1;
			document.getElementById('menu').style.display='block';
		}
		else{
			//document.getElementById('menuBars').value=0;
			document.getElementById('menu').style.display='none';
		}
	} 
		
		
		
		
// mudar atriburo value para alt se for botao com imagem		

function formMural(a){
		var b = a;
		if(b==1){
			document.getElementById('box-form-mural').style.display='block';
		}
		else{
			document.getElementById('box-form-mural').style.display='none';
		}
	} 