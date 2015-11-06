<?php
?>
<html>
<head>
	<title>Box and Dot</title>
	<style type="text/css">
	body {
		color: black;
	}
	#array {
		left: 700px;
	}
	#paste {
		position: absolute;
		left: 750px;
	}
	#background {
		position: absolute;
		background-color: black;
		height: 560px;
		width: 560px;
	}
	#title {
		position: absolute;
		left: 600px;
	}
	.leftBar {
		opacity: .75;
		position: absolute;
		background-color: grey;
		height: 20px;
		width: 80px;
	}
	.righBar {
		opacity: .75;
		position: absolute;
		background-color: grey;
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
<body>
	<h1 id='title'>Start</h1>
	<h1 id='player1'></h1>
	<h1 id='player2'></h1>
	<br>
	<h1 id="array"></h1>
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
			<div value='' class='leftBar <?= "left" . $count . " " . "righ" . $righ; ?>' id='left<?= $id;?>'></div>
			<div value='' class='righbar <?= "righ" . $count . " " . "left" . $righ; ?>' id='righ<?= $id;?>'></div>
			<?php $count++;
			$id++;
		} ?>
	</div>
	<button id='paste'>Paste</button>
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
				findLeft.innerHTML = i;
				var title = document.getElementById('title')
				findLeft.addEventListener("click", function(){
					var placeLeft = findLeft.getAttribute("value");
					var pass = hash.concat(leftId)
						if(title.innerHTML == "Player One's Turn!!") {
							var color = 'blue';
							title.innerHTML = ("Player Two's Turn!!")
						} else if (title.innerHTML == "Player Two's Turn!!") {
							var color = 'green';
							title.innerHTML = ("Player One's Turn!!")
						} else {
							var color = 'blue';
							title.innerHTML = ("Player Two's Turn!!")
						}
						var findArray = document.getElementById("array")
						var insert = findArray.innerHTML.concat(pass);
						findArray.innerHTML = findArray.innerHTML.concat(pass);
						findLeft.setAttribute("value", "used");
						$(pass).css("background-color", color)
				}, false);
				var righ = "righ";
				var righId = righ.concat(id)
				var findRigh = document.getElementById(righId)
				findRigh.innerHTML = i;
				findRigh.addEventListener("click", function one(){
					var placeRigh = findRigh.getAttribute("value");
					var pass = hash.concat(righId)
					if (placeRigh == '') {
						if(title.innerHTML == "Player One's Turn!!") {
							var color = 'blue';
							title.innerHTML = ("Player Two's Turn!!")
						} else if (title.innerHTML == "Player Two's Turn!!") {
							var color = 'green';
							title.innerHTML = ("Player One's Turn!!")
						} else {
							var color = 'blue';
							title.innerHTML = ("Player Two's Turn!!")
						}
						findRigh.setAttribute("value", "used");
						$(pass).css("background-color", color)
					};
				}, false);
			}(i));
echo fwrite($file,"Hello World. Testing!");
fclose($file);
};
// I make a function that takes in each button I push and after 4 makes it into an array
// function checkWin(string) {
// 	var longString = string.split('')
// 	if (longString[1] == 'l') {
// 		var id = cut(longString)
// 		highAndLow(id)
// 	} else if (longString[1] == 'r') {
// 		var id = cut(longString)
// 		leftAndRight(id)
// 	}
// }
// function cut(longString) {
// 	for (var i = 0; i <= 4; i++) {
// 		longString.shift();
// 	};
// 	var answer = longString.join("")
// 	return answer;
// }
// function highAndLow(id) {
// 	var left = "left"
// 	var id = parseInt(id)
// 	if (id >= 10 && id <= 81) {
// 		var top = id + 9;
// 		var findTop = left.concat(top)
// 		var getTop = document.getElementById(findTop)
// 		var checkTop = getTop.getAttribute('value')
// 		if (checkTop == 'used') {
// 			// console.log("WORKS HIGH");
// 		};
// 		var bottom = id - 9;
// 		var findBottom = left.concat(bottom)
// 		var getBottom = document.getElementById(findBottom)
// 		var checkBottom = getBottom.getAttribute('value')
// 		if (checkBottom == 'used') {
// 			// console.log("WORKS LOW");
// 		};
// 	} else if(id >= 10) {   			
// 		var bottom = id - 9;
// 		var findBottom = left.concat(bottom)
// 		var getBottom = document.getElementById(findBottom)
// 		var checkBottom = getBottom.getAttribute('value')
// 		if (checkBottom == 'used') {
// 			// console.log("WORKS LOW");
// 		};
// 	} else if(id <= 81) {
// 		var top = id + 9;
// 		var findTop = left.concat(top)
// 		var getTop = document.getElementById(findTop)
// 		var checkTop = getTop.getAttribute('value')
// 		if (checkTop == 'used') {
// 			// console.log("WORKS HIGH");
// 		}
// 	}
// }
// function leftAndRight(id) {
// 	var righ = "righ"
// 	var id = parseInt(id)
// 	var wins = 0;
// 	if (id >= 10 && id <= 81) {
// 		var left = id + 9;
// 		var findLeft = righ.concat(left)
// 		var getLeft = document.getElementById(findLeft)
// 		var checkLeft = getLeft.getAttribute('value')
// 		if (checkLeft == 'used') {
// 			// console.log("WORKS LEFT");
// 			wins++;
// 		};
// 		var right = id - 9;
// 		var findRight = righ.concat(right)
// 		var getRight = document.getElementById(findRight)
// 		var checkRight = getRight.getAttribute('value')
// 		if (checkRight == 'used') {
// 			// console.log("WORKS RIGHT");
// 			wins++;
// 		};
// 	} else if(id >= 10) {
// 		var right = id - 9
// 		var findRight = righ.concat(right)
// 		var getRight = document.getElementById(findRight)
// 		var checkRight = getRight.getAttribute('value')
// 		if (checkRight == 'used') {
// 			// console.log("WORKS RIGHT");
// 			wins++;
// 		};
// 	} else if(id <= 81) {
// 		var left = id + 9;
// 		var findLeft = righ.concat(left)
// 		var getLeft = document.getElementById(findLeft)
// 		var checkLeft = getLeft.getAttribute('value')
// 		if (checkLeft == 'used') {
// 			// console.log("WORKS LEFT");
// 			wins++;
// 		};
// 	}
// }
// function arraySearch(id) {

// }
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

T1=new Array("trail1.gif",38,35,"trail2.gif",30,31,"trail3.gif",28,26,"trail4.gif",22,21,"trail5.gif",16,16,"trail6.gif",10,10)



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