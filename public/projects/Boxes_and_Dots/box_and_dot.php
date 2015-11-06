<?php
?>
<html>
<head>
	<title>Box and Dot</title>
	<style type="text/css">
	body {
		color: black;
	}
	#paste {
		position: absolute;
		left: 750px;
	}
	#background {
		position: absolute;
		background-image: url(http://kingkonglayouts.weebly.com/uploads/1/1/2/0/11209116/7400190.gif);
		height: 560px;
		width: 560px;
	}
	#title {
		position: absolute;
		left: 600px;
	}
	#player1 {
		position: absolute;
		left: 640px;
		top: 100px;
	}
	#player2 {
		position: absolute;
		left:640px;
		top: 150px;
	}
	.score1 {
		position: absolute;
		left: 600px;
		top: 100px;
	}
	.score2 {
		position: absolute;
		left: 600px;
		top: 150px;
	}
	#array {
		position: absolute;
		left: 600px;
		top: 100px;
	}
	.leftBar {
		opacity: .75;
		position: absolute;
		background-color: black;
		height: 20px;
		width: 80px;
	}
	.righBar {
		opacity: .75;
		position: absolute;
		background-color: black;
		height: 80px;
		width: 20px;
	}
	.righBar:hover {
		background-color: white;
	}
	.leftBar:hover {
		background-color: white;
	}
	.left2 {
		left: 60px;
	}
	.left3 {
		left: 120px;
	}
	.left4 {
		left: 180px;
	}
	.left5 {
		left: 240px;
	}
	.left6 {
		left: 300px;
	}
	.left7 {
		left: 360px;
	}
	.left8 {
		left: 420px;
	}
	.left9 {
		left: 480px;
	}
	.left10 {
		left: 540px;
	}
	.righ2 {
		top: 60px;
	}
	.righ3 {
		top: 120px;
	}
	.righ4 {
		top: 180px;
	}
	.righ5 {
		top: 240px;
	}
	.righ6 {
		top: 300px;
	}
	.righ7 {
		top: 360px;
	}
	.righ8 {
		top: 420px;
	}
	.righ9 {
		top: 480px;
	}
	.righ10 {
		top: 540px;
	}
	</style>
</head>
<body onLoad="JSFX_StartEffects()">
	<SCRIPT LANGUAGE="JavaScript" SRC="javascript/JSFX_Layer.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="javascript/JSFX_Mouse.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript" SRC="javascript/JSFX_pinwheel.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript">
function JSFX_StartEffects()
{
	JSFX.Pinwheel();
}
</SCRIPT>
	<h1 id='title'>Make the first move to start the game.</h1>
	<h2 id='player1'>Player1's Score</h2>
	<h1 class='score1' id="Player1's">0</h1>
	<h2 id='player2'>Player2's Score</h2>
	<h1 class='score2' id="Player2's">0</h1>
	<div id='background'>
		<?php
		$count = 1; 
		$righ = 1;
		$id = 1;
		for ($i = 0; $i < 90; $i++) {  
			if ($count >= 10) {
				$count = 1;
				$righ++;
			} ?>
			<div value='' class='leftBar <?= "left" . $count . " " . "righ" . $righ . ' another'; ?>' id='left<?= $id;?>'></div>
			<div value='' class='righbar <?= "righ" . $count . " " . "left" . $righ . ' another'; ?>' id='righ<?= $id;?>'></div>
			<?php $count++;
			$id++;
		} ?>
	</div>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript">
	"use strict";
	(function() {
		var paste = document.getElementById("paste")
		for (var i = 1; i <= 90; i++) {
			(function(i) {
				var a = []
				var id = i;
				var left = "left";
				var leftId = left.concat(id)
				var hash = "#"
				var findLeft = document.getElementById(leftId)
				var title = document.getElementById('title')
				findLeft.addEventListener("click", function(){
					var placeLeft = findLeft.getAttribute("value");
					var pass = hash.concat(leftId)
					if (placeLeft == '') {
						if(title.innerHTML == "Player One's Turn!!") {
							var player = "Player1's"
							var color = 'red';
							title.innerHTML = ("Player Two's Turn!!")
						} else if (title.innerHTML == "Player Two's Turn!!") {
							var player = "Player2's"
							var color = 'blue';
							title.innerHTML = ("Player One's Turn!!")
						} else {
							var player = "Player1's"
							var color = 'red';
							title.innerHTML = ("Player Two's Turn!!")
						}
						$(pass).css("background-color", color)
						findLeft.setAttribute("value", "used");
						$(findLeft).css("opacity", "1");
						console.log(checkWin(leftId, player))
					};
				}, false);
				var righ = "righ";
				var righId = righ.concat(id)
				var findRigh = document.getElementById(righId)
				findRigh.addEventListener("click", function one(){
					var placeRigh = findRigh.getAttribute("value");
					var pass = hash.concat(righId)
					if (placeRigh == '') {
						if(title.innerHTML == "Player One's Turn!!") {
							var player = "Player1's"
							var color = 'red';
							title.innerHTML = ("Player Two's Turn!!")
						} else if (title.innerHTML == "Player Two's Turn!!") {
							var player = "Player2's"
							var color = 'blue';
							title.innerHTML = ("Player One's Turn!!")
						} else {
							var player = "Player1's"
							var color = 'red';
							title.innerHTML = ("Player Two's Turn!!")
						}
						$(pass).css("background-color", color)
						findRigh.setAttribute("value", "used");
						$(findRigh).css("opacity", "1");
						console.log(checkWin(righId, player))
					};
				}, false);
			}(i));
};
function checkWin(id, player)
{ 
	console.log(player)
	var box1 = [ "left1", "righ1", "left10", "righ10"]
	var box2 = [ "left2", "righ10", "left11", "righ19"]
	var box3 = [ "left3", "righ19", "left12", "righ28"]
	var box4 = [ "left4", "righ28", "left13", "righ37"]
	var box5 = [ "left5", "righ37", "left14", "righ46"]
	var box6 = [ "left6", "righ46", "left15", "righ55"]
	var box7 = [ "left7", "righ55", "left16", "righ64"]
	var box8 = [ "left8", "righ64", "left17", "righ73"]
	var box9 = [ "left9", "righ73", "left18", "righ82"]
	var box10 = [ "left10", "righ2", "left19", "righ11"]
	var box11 = [ "left11", "righ11", "left20", "righ20"]
	var box12 = [ "left12", "righ20", "left21", "righ29"]
	var box13 = [ "left13", "righ29", "left22", "righ38"]
	var box14 = [ "left14", "righ38", "left23", "righ47"]
	var box15 = [ "left15", "righ47", "left24", "righ56"]
	var box16 = [ "left16", "righ56", "left25", "righ65"]
	var box17 = [ "left17", "righ65", "left26", "righ74"]
	var box18 = [ "left18", "righ74", "left27", "righ83"]
	var box19 = [ "left19", "righ3", "left28", "righ12"]
	var box20 = [ "left20", "righ12", "left29", "righ21"]
	var box21 = [ "left21", "righ21", "left30", "righ30"]
	var box22 = [ "left22", "righ30", "left31", "righ39"]
	var box23 = [ "left23", "righ39", "left32", "righ48"]
	var box24 = [ "left24", "righ48", "left33", "righ57"]
	var box25 = [ "left25", "righ57", "left34", "righ66"]
	var box26 = [ "left26", "righ66", "left35", "righ75"]
	var box27 = [ "left27", "righ75", "left36", "righ84"]
	var box28 = [ "left28", "righ4", "left37", "righ13"]
	var box29 = [ "left29", "righ13", "left38", "righ22"]
	var box30 = [ "left30", "righ22", "left39", "righ31"]
	var box31 = [ "left31", "righ31", "left40", "righ40"]
	var box32 = [ "left32", "righ40", "left41", "righ49"]
	var box33 = [ "left33", "righ49", "left42", "righ58"]
	var box34 = [ "left34", "righ58", "left43", "righ67"]
	var box35 = [ "left35", "righ67", "left44", "righ76"]
	var box36 = [ "left36", "righ76", "left45", "righ85"]
	var box37 = [ "left37", "righ5", "left46", "righ14"]
	var box38 = [ "left38", "righ14", "left47", "righ23"]
	var box39 = [ "left39", "righ23", "left48", "righ32"]
	var box40 = [ "left40", "righ32", "left49", "righ41"]
	var box41 = [ "left41", "righ41", "left50", "righ50"]
	var box42 = [ "left42", "righ50", "left51", "righ59"]
	var box43 = [ "left43", "righ59", "left52", "righ68"]
	var box44 = [ "left44", "righ68", "left53", "righ77"]
	var box45 = [ "left45", "righ77", "left54", "righ86"]
	var box46 = [ "left46", "righ6", "left55", "righ15"]
	var box47 = [ "left47", "righ15", "left56", "righ24"]
	var box48 = [ "left48", "righ24", "left57", "righ33"]
	var box49 = [ "left49", "righ33", "left58", "righ42"]
	var box50 = [ "left50", "righ42", "left59", "righ51"]
	var box51 = [ "left51", "righ51", "left60", "righ60"]
	var box52 = [ "left52", "righ60", "left61", "righ69"]
	var box53 = [ "left53", "righ69", "left62", "righ78"]
	var box54 = [ "left54", "righ78", "left63", "righ87"]
	var box55 = [ "left55", "righ7", "left64", "righ16"]
	var box56 = [ "left56", "righ16", "left65", "righ25"]
	var box57 = [ "left57", "righ25", "left66", "righ34"]
	var box58 = [ "left58", "righ34", "left67", "righ43"]
	var box59 = [ "left59", "righ43", "left68", "righ52"]
	var box60 = [ "left60", "righ52", "left69", "righ61"]
	var box61 = [ "left61", "righ61", "left70", "righ70"]
	var box62 = [ "left62", "righ70", "left71", "righ79"]
	var box63 = [ "left63", "righ79", "left72", "righ88"]
	var box64 = [ "left64", "righ8", "left73", "righ17"]
	var box65 = [ "left65", "righ17", "left74", "righ26"]
	var box66 = [ "left66", "righ26", "left75", "righ35"]
	var box67 = [ "left67", "righ35", "left76", "righ44"]
	var box68 = [ "left68", "righ44", "left77", "righ53"]
	var box69 = [ "left69", "righ53", "left78", "righ62"]
	var box70 = [ "left70", "righ62", "left79", "righ71"]
	var box71 = [ "left71", "righ71", "left80", "righ80"]
	var box72 = [ "left72", "righ80", "left81", "righ89"]
	var box73 = [ "left73", "righ9", "left82", "righ18"]
	var box74 = [ "left74", "righ18", "left83", "righ27"]
	var box75 = [ "left75", "righ27", "left84", "righ36"]
	var box76 = [ "left76", "righ36", "left85", "righ45"]
	var box77 = [ "left77", "righ45", "left86", "righ54"]
	var box78 = [ "left78", "righ54", "left87", "righ63"]
	var box79 = [ "left79", "righ63", "left88", "righ72"]
	var box80 = [ "left80", "righ72", "left89", "righ81"]
	var box81 = [ "left81", "righ81", "left90", "righ90"]
	var boxes = [ box1, box2, box3, box4, box5, box6, box7, box8, box9, box10,
	 box11, box12, box13, box14, box15, box16, box17, box18, box19, box20,
	 box21, box22, box23, box24, box25, box26, box27, box28, box29, box30,
	 box31, box32, box33, box34, box35, box36, box37, box38, box39, box40,
	 box41, box42, box43, box44, box45, box46, box47, box48, box49, box50,
	 box51, box52, box53, box54, box55, box56, box57, box58, box59, box60,
	 box61, box62, box63, box64, box65, box66, box67, box68, box69, box70,
	 box71, box72, box73, box74, box75, box76, box77, box78, box79, box80, box81 ]
	 var fail = 0;
	 console.log(id)
	for (var i = 0; i < boxes.length; i++) {
		var box = boxes[i]
		if(jQuery.inArray(id, box) != -1) {
			console.log(box)
			var box1 = document.getElementById(box[0])
			var boxAt1 = box1.getAttribute("value");
			var box2 = document.getElementById(box[1])
			var boxAt2 = box2.getAttribute("value");
			var box3 = document.getElementById(box[2])
			var boxAt3 = box3.getAttribute("value");
			var box4 = document.getElementById(box[3])
			var boxAt4 = box4.getAttribute("value");
			if (boxAt1 == '' || boxAt2 == '' || boxAt3 == '' || boxAt4 == '') {
				console.log("Detects and Fails")
			} else {
				var turn = document.getElementById(player)
				turn.innerHTML = parseInt(turn.innerHTML) + 1;
				var title = document.getElementById('title')
				if (player == "Player2's") {
					title.innerHTML = ("Player Two's Turn!!")
				} else {
					title.innerHTML = ("Player One's Turn!!")
				};
			};
		}
	};
} 
})();
</script>
<script>



/******************************************

* Cross browser cursor trailer script- By Brian Caputo (bcaputo@icdc.com)

* Visit Dynamic Drive (http://www.dynamicdrive.com/) for full source code

* Modified Dec 30th, 02' by DD. This notice must stay intact for use

******************************************/



A=document.getElementById

B=document.all;

C=document.layers;

T1=new Array("trail1.gif",38,35,"trail2.gif",30,31,"trail3.gif",28,26,"trail4.gif",22,21,"trail5.gif",16,16)



var offsetx=15 //x offset of trail from mouse pointer

var offsety=10 //y offset of trail from mouse pointer



nos=parseInt(T1.length/3)

rate=50

ie5fix1=0;

ie5fix2=0;

rightedge=B? document.body.clientWidth-T1[1] : window.innerWidth-T1[1]-20

bottomedge=B? document.body.scrollTop+document.body.clientHeight-T1[2] : window.pageYOffset+window.innerHeight-T1[2]



for (i=0;i<nos;i++){

createContainer("CUR"+i,i*10,i*10,i*3+1,i*3+2,"","<img src='"+T1[i*3]+"' width="+T1[(i*3+1)]+" height="+T1[(i*3+2)]+" border=0>")

}



function createContainer(N,Xp,Yp,W,H,At,HT,Op,St){

with (document){

write((!A && !B) ? "<layer id='"+N+"' left="+Xp+" top="+Yp+" width="+W+" height="+H : "<div id='"+N+"'"+" style='position:absolute;left:"+Xp+"; top:"+Yp+"; width:"+W+"; height:"+H+"; ");

if(St){

if (C)

write(" style='");

write(St+";' ")

}

else write((A || B)?"'":"");

write((At)? At+">" : ">");

write((HT) ? HT : "");

if (!Op)

closeContainer(N)

}

}



function closeContainer(){

document.write((A || B)?"</div>":"</layer>")

}



function getXpos(N){

if (A)

return parseInt(document.getElementById(N).style.left)

else if (B)

return parseInt(B[N].style.left)

else

return C[N].left

}



function getYpos(N){

if (A)

return parseInt(document.getElementById(N).style.top)

else if (B)

return parseInt(B[N].style.top)

else

return C[N].top

}



function moveContainer(N,DX,DY){

c=(A)? document.getElementById(N).style : (B)? B[N].style : (C)? C[N] : "";

if (!B){

rightedge=window.innerWidth-T1[1]-20

bottomedge=window.pageYOffset+window.innerHeight-T1[2]

}

c.left=Math.min(rightedge, DX+offsetx) + 'px';

c.top=Math.min(bottomedge, DY+offsety) + 'px';

}

function cycle(){

//if (IE5) 

if (document.all&&window.print){

ie5fix1=document.body.scrollLeft;

ie5fix2=document.body.scrollTop;

}

for (i=0;i<(nos-1);i++){

moveContainer("CUR"+i,getXpos("CUR"+(i+1)),getYpos("CUR"+(i+1)))

}

}



function newPos(e){

moveContainer("CUR"+(nos-1),(B)?event.clientX+ie5fix1:e.pageX+2,(B)?event.clientY+ie5fix2:e.pageY+2)

}



function getedgesIE(){

rightedge=document.body.clientWidth-T1[1]

bottomedge=document.body.scrollHeight-T1[2]

}



if (B){

window.onload=getedgesIE

window.onresize=getedgesIE

}



if(document.layers)

document.captureEvents(Event.MOUSEMOVE)

document.onmousemove=newPos

setInterval("cycle()",rate)

</script>
</body>
</html>