<script type="text/javascript">
	
function removeSlide(){
	var windowWidth = window.innerWidth;
	alert(windowWidth);
	if(windowWidth > 600){
		var el = document.getElementById( "slideDesk" );
		el.parentNode.removeChild( el );
	}
}
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>





<div style="display:block" onclick="removeSlide();" class="tet">h</div>
<!-- SLIDE DESKTOP -->
<section id="slideDesk" class="box-slide-all">
	<div style="width:100%;float:left; !important" class="cycle-slideshow"
    data-cycle-timeout="5000"
    data-cycle-prev="#prev"
    data-cycle-next="#next"
    >
		<img src="imgs/slide1.jpg" class="slide" />
		<img src="imgs/slide2.jpg" class="slide" />
		<img src="imgs/slide3.jpg" class="slide" />
	</div>

	<div class="center" id="box-nav">
		<a href="#" id="prev"><img src="imgs/seta-back.png" class="btnNav"/></a> 
		<a href="#" id="next"><img src="imgs/seta-go.png" class="btnNav"/></a>
	</div>
</section>