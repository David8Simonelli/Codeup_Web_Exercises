<?php 


?>
<html>
<head>
	<title>Card War</title>
	<style type="text/css">
	.user {
		width: 16%;
		height: 40%;
		background-color: black;
		position: absolute;
		top: 60%;
	}
	</style>
</head>
<body>
	<?php for ($i = 1; $i < 53; $i++) { ?>
	<div class='user' id='card<?= $i; ?>'><?= $i; ?></div>
	<?php } ?>
	<script src="/js/jquery.js"></script>
	<script type="text/javascript">
	"use strict";
	(function() {
		for (var i = 1; i < 53; i++) {
			(function(i) {
				var value = '#card'.concat(i);
				var status = 'card'.concat(i);
				console.log(value);
				$(value).css('left', '42.1%');
				$(value).css('background-image', 'url(images/' + i + '.png)');
				$(value).css('background-size', '100% 100%');
				var d = i.toString();
				console.log(d);
				var firstChar  = d.charAt(0);
				var secondChar  = d.charAt(1);
				if (d <= 9) {
					var left = '0.' + d;
				} else {
					var left = firstChar + '.' + secondChar;
				};
				$(value).css('left', '4' + left + '%');
			var findCard = document.getElementById(status)
			findCard.addEventListener("click", function(){
				$(value).animate({ top: "+=100"}, 2000);
				$(value).animate({ top: "-=100"}, 2000);
			}, false);
		}(i));
			}
		})();
		</script>
	</body>
	</html>