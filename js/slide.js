	var myVar;
	
	var galeriaArray = [
	'imgs/slide1.jpg',
	'imgs/slide2.jpg',
	'imgs/slide3.jpg'
	];

	var galeriaArrayM = [
		'imgs/slide1m.jpg',
		'imgs/slide2m.jpg',
		'imgs/slide3m.jpg'
		];



	function fun1(v) {
		var idimg = v;
		clearTimeout(myVar);
		document.getElementById("imagem").style.opacity=1;
		document.getElementById("imagemM").style.opacity=1;
		myVar = setTimeout(function(){ fadeOut(idimg); }, 5000);
	}
	
	function fun2(v) {
		var idimg = v;
		clearTimeout(myVar);
		document.getElementById("imagem").style.opacity=1;
		document.getElementById("imagemM").style.opacity=1;
		myVar = setTimeout(function(){ fadeOut(idimg); }, 5000);
	}
	
	
	function fun3(v) {
		var idimg = v;
		clearTimeout(myVar);
		document.getElementById("imagem").style.opacity=1;
		document.getElementById("imagemM").style.opacity=1;
		myVar = setTimeout(function(){ fadeOut(idimg); }, 5000);
		
	}


	function fadeOut(v) {
		var idimg = v;
		document.getElementById("imagem").style.opacity=0;
		document.getElementById("imagemM").style.opacity=0;
		myVar = setTimeout(function(){ troca(idimg); }, 700);
	}
	
	
	
	function troca(v) {
		var idimg = v;

		if(idimg==1){
		document.getElementById("imagem").src = galeriaArray[1];
		document.getElementById("imagemM").src = galeriaArrayM[1];
		myVar = setTimeout(function(){ fun2(2); }, 700);
		
		}
		else if(idimg==2){
		document.getElementById("imagem").src = galeriaArray[2];
		document.getElementById("imagemM").src = galeriaArrayM[2];
		myVar = setTimeout(function(){ fun3(3); }, 700);
		}
		else{
		document.getElementById("imagem").src = galeriaArray[0];
		document.getElementById("imagemM").src = galeriaArrayM[0];
		myVar = setTimeout(function(){ fun1(1); }, 700);
		}
	}