<div class="traco"></div>
<strong class="titulo-h2-dark">IBB é um clube de benficios diferente</strong>
<span class="texto-dark margin-yes-no">
Qual o significado de uma vida tranquila e feliz para você? Proteção para sua familia? Garantia de futuro para seus filhos ou renda garantida todo o mês?<br />
Com o <strong>IbigBoss</strong> tudo isso é possível. Você pode ter renda certa todo mês sem se preocupar em ter que se levantar cedo para ir trabalhar.<br />
<strong> Aqui você é seu chefe e faz o seu horário. </strong>
</span>
<div class="col1">
	<div class="col2">
		<div class="box-empresa">
			<img src="imgs/img-empresa.jpg" class="img-atores" />
			<span class="tit-clear">Sua empresa no topo</span><br />
			<span class="texto-white">Drible as dificuldades do mercado.<br />   Seja uma empresa parceira,<br /> você não paga nada por isso. </span>
			<button class="botao-white" onclick="window.location='para-empresa'" style="box-shadow:0px 2px 5px #9a175d">+ LER MAIS</button>
		</div>
	</div>
	<div class="col2">
		<div class="box-usuario">
			<img src="imgs/img-usuario.jpg" class="img-atores" />
			<span class="tit-clear">Você no comando</span><br />
			<span class="texto-white">O primeiro negócio do mundo<br /> a alinhar proteção financeira<br /> famíliar e renda extra todo mês. </span>
			<button class="botao-white" onclick="window.location='para-voce'" style="box-shadow:0px 2px 5px #c27501">+ LER MAIS</button>
		</div>
	</div>

</div>




<img src="imgs/chat.png" style="display:none;" id="chati" class="chati" usemap="#workmap" />

 <div class="box-btns-float-desk ">
	<img src="imgs/btn-contato.png" alt="chat" id="box-chat" onclick="chat(1);" class="btns-float" />
	<img src="imgs/btn-wapp.png" onclick="window.open('https://api.whatsapp.com/send?phone=558590011223344','_blank');" class="btns-float" />
</div>



<script>
function chat(a){
	var fleg = a;
	
	if(fleg==1){
	//document.getElementById('chati').src="imgs/btnAbreMenu.png";
	document.getElementById('chati').style.display='block';
	}
	else{
		document.getElementById('chati').style.display='none';
	}

}
</script>

<style>
@media only screen and (min-width:1024px){	
	.chati{
		position:fixed;
		z-index:110;
		right:1px;
		bottom:1px;
		box-shadow: 0 0 10px #999;
	}
}
@media (max-width:600px) {
	.chati{
		width:100%;
		position:fixed;
		z-index:110;
		right:1px;
		bottom:1px;
		box-shadow: 0 0 10px #999;
	}
	
}
</style>

<map name="workmap">
  <area shape="rect" coords="0,0,344,35" alt="Computer" style="cursor:pointer;"  onclick="chat(0);">
</map>