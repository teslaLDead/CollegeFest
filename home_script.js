window.onscroll = function() {lowBarMove()};
function loginBox(){
	var x=document.getElementById('outer_box');
	var x2=document.getElementById('inner_box');
	document.getElementById('title_main').style.zIndex="0";
    x.style.display="inherit";
	x2.style.opacity="1";
	
}

function logClose(){
	document.getElementById('inner_box').style.opacity="0";
	
	document.getElementById("outer_box").style.zIndex="1";
	document.getElementById('title_main').style.zIndex="2";
}
function lowBarMove(){
	document.getElementById("lowBar").className="activeBar";
}