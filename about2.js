window.onscroll = function() {pageMover()};
    function pageMover(){
	
	if(document.body.scrollTop > 50){
		document.getElementById("introHead").style.left="-600px";
		document.getElementById("introPara").style.left="-600px";
	}
	else{
		document.getElementById("introHead").style.left="60px";
		document.getElementById("introPara").style.left="60px";
	}
	if(document.body.scrollTop > 300){
		document.getElementById("container").style.opacity="1";
		
	}
	else{
		document.getElementById("container").style.opacity="0";
		
	}
	if(document.body.scrollTop > 1600){
		document.getElementById("c1").style.opacity="1";
		
	}
	else{
		document.getElementById("c1").style.opacity="0";
	}
	if(document.body.scrollTop > 2200){
		document.getElementById("c2").style.opacity="1";
		
	}
	else{
		document.getElementById("c2").style.opacity="0";
	}
	if(document.body.scrollTop > 3200){
		document.getElementById("c3").style.opacity="1";
		
	}
	else{
		document.getElementById("c3").style.opacity="0";
	}
	if(document.body.scrollTop > 4000){
		document.getElementById("c4").style.opacity="1";
		
	}
	else{
		document.getElementById("c4").style.opacity="0";
	}
	if(document.body.scrollTop > 4600){
		document.getElementById("c5").style.opacity="1";
		
	}
	else{
		document.getElementById("c5").style.opacity="0";
	}
	if(document.body.scrollTop > 5200){
		document.getElementById("endingHead").style.opacity="1";
		
	}
	else{
		document.getElementById("endingHead").style.opacity="0";
	}
	
	
}
	
