function clickMeLeft(){
	 if(document.getElementById("card5").className=="cardC cardBox")
	 {document.getElementById("card4").className="cardC cardBox";
	 document.getElementById("card6").className="cardRR cardBox";
	 document.getElementById("card5").className="cardR cardBox";
	  document.getElementById("_4Info").className="paraInfoC activePara";
	 document.getElementById("_5Info").className="paraInfoC inactivePara";}
	 
	 
	 
	 
	 else if(document.getElementById("card6").className=="cardC cardBox"){
	 document.getElementById("card4").className="cardL cardBox";
	 document.getElementById("card6").className="cardR cardBox";
	 document.getElementById("card5").className="cardC cardBox";
	 document.getElementById("_6Info").className="paraInfoC inactivePara";
	 document.getElementById("_5Info").className="paraInfoC activePara";
	 }
	
	  
	 
	
}
function clickMeRight(){
	 if(document.getElementById("card5").className=="cardC cardBox")
	 {document.getElementById("card4").className="cardLL cardBox";
	 document.getElementById("card6").className="cardC cardBox";
	 document.getElementById("card5").className="cardL cardBox";
	 document.getElementById("_6Info").className="paraInfoC activePara";
	 document.getElementById("_5Info").className="paraInfoC inactivePara";}
	 
	 else if(document.getElementById("card4").className=="cardC cardBox"){
	 document.getElementById("card4").className="cardL cardBox";
	 document.getElementById("card6").className="cardR cardBox";
	 document.getElementById("card5").className="cardC cardBox";
	 document.getElementById("_4Info").className="paraInfoC inactivePara";
	 document.getElementById("_5Info").className="paraInfoC activePara";
	 }
	 
}
function viewView(){
document.getElementById("r1").className="infoPara activePara";
	document.getElementById("r2").className="infoPara activePara";
	document.getElementById("r3").className="infoPara activePara";
	
	document.getElementById("o1").className="infoPara inactivePara";
	document.getElementById("o2").className="infoPara inactivePara";
	document.getElementById("o3").className="infoPara inactivePara";
	
}
function viewRules(){
	document.getElementById("r1").className="infoPara inactivePara";
	document.getElementById("r2").className="infoPara inactivePara";
	document.getElementById("r3").className="infoPara inactivePara";

	document.getElementById("o1").className="infoPara activePara";
	document.getElementById("o2").className="infoPara activePara";
	document.getElementById("o3").className="infoPara activePara";
	
}