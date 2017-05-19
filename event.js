
function clickMeLeft(){
	 if(document.getElementById("card5").className=="cardC cardBox")
	 {document.getElementById("card4").className="cardC cardBox";
	 document.getElementById("card6").className="cardRR cardBox";
	 document.getElementById("card5").className="cardR cardBox";
	 document.getElementById("card7").className="cardRRR cardBox"
	 document.getElementById("card3").className="cardL cardBox";
	 document.getElementById("_4Info").className="paraInfoC activePara";
	 document.getElementById("_5Info").className="paraInfoC inactivePara";}
	 
	 else if(document.getElementById("card4").className=="cardC cardBox"){
	 document.getElementById("card4").className="cardR cardBox";
	 document.getElementById("card6").className="cardRRR cardBox";
	 document.getElementById("card5").className="cardRR cardBox";
	 document.getElementById("card7").className="cardRRRR cardBox"
	 document.getElementById("card3").className="cardC cardBox";
	 document.getElementById("_4Info").className="paraInfoC inactivePara";
	 document.getElementById("_3Info").className="paraInfoC activePara";
	 }
	 
	 
	 else if(document.getElementById("card6").className=="cardC cardBox"){
	 document.getElementById("card4").className="cardL cardBox";
	 document.getElementById("card6").className="cardR cardBox";
	 document.getElementById("card5").className="cardC cardBox";
	 document.getElementById("card7").className="cardRR cardBox"
	 document.getElementById("card3").className="cardLL cardBox";
	 document.getElementById("_6Info").className="paraInfoC inactivePara";
	 document.getElementById("_5Info").className="paraInfoC activePara";
	 }
	 else if(document.getElementById("card7").className=="cardC cardBox"){
	 document.getElementById("card4").className="cardLL cardBox";
	 document.getElementById("card6").className="cardC cardBox";
	 document.getElementById("card5").className="cardL cardBox";
	 document.getElementById("card7").className="cardR cardBox"
	 document.getElementById("card3").className="cardLLL cardBox";
	  document.getElementById("_7Info").className="paraInfoC inactivePara";
	 document.getElementById("_6Info").className="paraInfoC activePara";
	 }
	  
	 
	
}
function clickMeRight(){
	 if(document.getElementById("card5").className=="cardC cardBox")
	 {document.getElementById("card4").className="cardLL cardBox";
	 document.getElementById("card6").className="cardC cardBox";
	 document.getElementById("card5").className="cardL cardBox";
	 document.getElementById("card7").className="cardR cardBox"
	 document.getElementById("card3").className="cardLLL cardBox";
	 document.getElementById("_6Info").className="paraInfoC activePara";
	 document.getElementById("_5Info").className="paraInfoC inactivePara";}
	 
	 else if(document.getElementById("card4").className=="cardC cardBox"){
	 document.getElementById("card4").className="cardL cardBox";
	 document.getElementById("card6").className="cardR cardBox";
	 document.getElementById("card5").className="cardC cardBox";
	 document.getElementById("card7").className="cardRR cardBox"
	 document.getElementById("card3").className="cardLL cardBox";
	  document.getElementById("_4Info").className="paraInfoC inactivePara";
	 document.getElementById("_5Info").className="paraInfoC activePara";
	 }
	 
	 
	 else if(document.getElementById("card6").className=="cardC cardBox"){
	 document.getElementById("card4").className="cardLLL cardBox";
	 document.getElementById("card6").className="cardL cardBox";
	 document.getElementById("card5").className="cardLL cardBox";
	 document.getElementById("card7").className="cardC cardBox"
	 document.getElementById("card3").className="cardLLLL cardBox";
	 document.getElementById("_6Info").className="paraInfoC inactivePara";
	 document.getElementById("_7Info").className="paraInfoC activePara";
	 }
	 else if(document.getElementById("card3").className=="cardC cardBox"){
	 document.getElementById("card4").className="cardC cardBox";
	 document.getElementById("card6").className="cardRR cardBox";
	 document.getElementById("card5").className="cardR cardBox";
	 document.getElementById("card7").className="cardRRR cardBox"
	 document.getElementById("card3").className="cardL cardBox";
	 document.getElementById("_3Info").className="paraInfoC inactivePara";
	 document.getElementById("_4Info").className="paraInfoC activePara";
	 }
	
}
function viewView(){
document.getElementById("r1").className="infoPara activePara";
	document.getElementById("r2").className="infoPara activePara";
	document.getElementById("r3").className="infoPara activePara";
	document.getElementById("r4").className="infoPara activePara";
	document.getElementById("r5").className="infoPara activePara";
	document.getElementById("o1").className="infoPara inactivePara";
	document.getElementById("o2").className="infoPara inactivePara";
	document.getElementById("o3").className="infoPara inactivePara";
	document.getElementById("o4").className="infoPara inactivePara";
	document.getElementById("o5").className="infoPara inactivePara";
}
function viewRules(){
	document.getElementById("r1").className="infoPara inactivePara";
	document.getElementById("r2").className="infoPara inactivePara";
	document.getElementById("r3").className="infoPara inactivePara";
	document.getElementById("r4").className="infoPara inactivePara";
	document.getElementById("r5").className="infoPara inactivePara";
	document.getElementById("o1").className="infoPara activePara";
	document.getElementById("o2").className="infoPara activePara";
	document.getElementById("o3").className="infoPara activePara";
	document.getElementById("o4").className="infoPara activePara";
	document.getElementById("o5").className="infoPara activePara";
}
	
