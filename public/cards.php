<?php
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	#cards {
		position: absolute;
		background-color: black;
		top: 13%;
		height: 70%;
		width: 99%;
	}
	.card {
		position: absolute;
		background-color: white;
		top: 2%;
		left: 2%;
		height: 40%;
		width: 12%;
	}
	.secondRow {
		top: 57%;
	}
	.left2 {
		left: 16%;
	}
	.left3 {
		left: 30%;
	}
	.left4 {
		left: 44%;
	}
	.left5 {
		left: 58%;
	}
	.left6 {
		left: 72%;
	}
	.left7 {
		left: 86%;
	}
	</style>
</head>
<body>
	<div id="cards">
	<?php
	$left = 1;
	$rows = "firstRow";
	for ($i = 1; $i < 15; $i++) { 
		if ($left === 8) {
			$left = 1;
			$rows = "secondRow";
		}?>
		<div id="card<?=$i; ?>" class="card left<?=$left?> <?= $rows; ?>"></div>
	<?php 
	$left++;
	}
	 ?>
	 </div>
	<script src="/js/jquery.js"></script>
	<script type="text/javascript">
	"use strict";
	(function() {
		//for loop for all the cards
		var pics = [ "img/favicon.gif", "img/trail1.gif", "img/trail2.gif", "img/trail3.gif", "img/trail4.gif", "img/trail5.gif", "img/blue.png"]
		var topRow = [];
		for (var i = 1; i <= 14; i++) {
			(function(i) {
				var preInput = "card".concat(i)
				var input = "#".concat(preInput)
				var boxId = document.getElementById(preInput)
				var rand = Math.floor((Math.random() * 7));
				boxId.innerHTML = (i)
				if (i <= 7) {
					topRow.push(pics[rand])
					$(input).css("background-image", "url( " + pics[rand] + " )")
					boxId.setAttribute("value", pics[rand])
					// var test = topRow[i].getAttribute("value")
				} else {
					var test = boxId.getAttribute("value")
					$(input).css("background-image", "url( " + topRow[rand] + " )")
					var index = topRow.indexOf(topRow[rand])
					topRow.splice(topRow[rand], index)
					console.log(index)
				};
				console.log(input);
				$(input).on('click' ,function() {
					//Set card clicked on image to value
					//Animation to flip card maybe a sound
					//If second is clicked check to see if they have the same value
					//If they do turn both to the background color of black
					//If they don't match make some sort of failure sound or pop up and reset the game.

					// SELECT CONCAT('# id: ',mf_streams.id, ' | ',mf_streams.stream_id,' | ',CURRENT_DATE(),'<CR>Live_1_1@',mf_streams.stream_id,'={profile:"rtmp-akamai", streamName:"Live_1_1@',mf_streams.stream_id,'", akamai.streamId:',mf_streams.stream_id,', userName:"',mf_streams.stream_username,'", password:"',mf_streams.stream_password,'"} <CR>Live_1_1@',mf_streams.stream_id,'={profile:"cupertino-akamai", streamName:"Live_1_1@',mf_streams.stream_id,'", cupertino.renditions:"audiovideo", akamai.streamId:',mf_streams.stream_id,', adaptiveGroups:"group1", debugLog:false}')
					// from mf_streams
					// where id > 1225
					// order by stream_id DESC
					// Complex

					// SELECT CONCAT('# id: ',mf_streams.id, ' | ',mf_streams.stream_id,' | ',CURRENT_DATE(),'#rtmp adaptive block<CR>Live_1_1@',mf_streams.stream_id,'_720p={profile:"rtmp-akamai", streamName:"Live_1_720@',mf_streams.stream_id,'", akamai.streamId:',mf_streams.stream_id,', userName:"',mf_streams.stream_username,'", password:"',mf_streams.stream_password,'"}<CR>Live_1_1@',mf_streams.stream_id,'_360p={profile:"rtmp-akamai", streamName:"Live_1_360@',mf_streams.stream_id,'", akamai.streamId:',mf_streams.stream_id,', userName:"',mf_streams.stream_username,'", password:"',mf_streams.stream_password,'"}<CR>Live_1_1@',mf_streams.stream_id,'_240p={profile:"rtmp-akamai", streamName:"Live_1_240@',mf_streams.stream_id,'", akamai.streamId:',mf_streams.stream_id,', userName:"',mf_streams.stream_username,'", password:"',mf_streams.stream_password,'"}<CR>Live_1_1@',mf_streams.stream_id,'_160p={profile:"rtmp-akamai", streamName:"Live_1_160@',mf_streams.stream_id,'", akamai.streamId:',mf_streams.stream_id,', userName:"',mf_streams.stream_username,'", password:"',mf_streams.stream_password,'"}<CR>Live_1_1@',mf_streams.stream_id,'_source={profile:"rtmp-akamai", streamName:"Live_1_source@',mf_streams.stream_id,'", akamai.streamId:',mf_streams.stream_id,', userName:"',mf_streams.stream_username,'", password:"',mf_streams.stream_password,'"}<CR>#hls adaptive block<CR>Live_1_1@',mf_streams.stream_id,'_720p={profile:"cupertino-akamai", streamName:"Live_1_720@',mf_streams.stream_id,'", cupertino.renditions:"audiovideo", akamai.streamId:',mf_streams.stream_id,', adaptiveGroups:"group1", debugLog:false}<CR>Live_1_1@',mf_streams.stream_id,'_360p={profile:"cupertino-akamai", streamName:"Live_1_360@',mf_streams.stream_id,'", cupertino.renditions:"audiovideo", akamai.streamId:',mf_streams.stream_id,', adaptiveGroups:"group1", debugLog:false}<CR>Live_1_1@',mf_streams.stream_id,'_240p={profile:"cupertino-akamai", streamName:"Live_1_240@',mf_streams.stream_id,'", cupertino.renditions:"audiovideo", akamai.streamId:',mf_streams.stream_id,', adaptiveGroups:"group1", debugLog:false}<CR>Live_1_1@',mf_streams.stream_id,'_160p={profile:"cupertino-akamai", streamName:"Live_1_160@',mf_streams.stream_id,'", cupertino.renditions:"audiovideo", akamai.streamId:',mf_streams.stream_id,', adaptiveGroups:"group1", debugLog:false}<CR>Live_1_1@',mf_streams.stream_id,'_source={profile:"cupertino-akamai", streamName:"Live_1_source@',mf_streams.stream_id,'", cupertino.renditions:"audiovideo", akamai.streamId:',mf_streams.stream_id,', adaptiveGroups:"group1", debugLog:false}<CR>#non-adaptive block<CR>Live_1_1@',mf_streams.stream_id,'={profile:"rtmp-akamai", streamName:"Live_1_1@',mf_streams.stream_id,'", akamai.streamId:',mf_streams.stream_id,', userName:"',mf_streams.stream_username,'", password:"',mf_streams.stream_password,'"}<CR>Live_1_1@',mf_streams.stream_id,'={profile:"cupertino-akamai", streamName:"Live_1_1@',mf_streams.stream_id,'", cupertino.renditions:"audiovideo", akamai.streamId:',mf_streams.stream_id,', adaptiveGroups:"group1", debugLog:false}')
					// from mf_streams
					// where stream_id = XXXXXX
					// order by stream_id DESC
				});
			}(i));
		};	
	})();
	</script>
</body>
</html>