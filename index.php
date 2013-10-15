<?php
$langPrefix = 'ru';
//$langPrefix = 'en';
?>

<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">

		<title>HTML5</title>

		<script src="js/text_<?=$langPrefix;?>.js"></script>
	</head>
	<body>
		<p id="mes1"></p>
		<p id="mes2"></p>
		<p id="mes3"></p>
		
		<!--One-->
		<!--script>
			document.getElementById('mes1').innerHTML = window.tr.mes1;
			document.getElementById('mes2').innerHTML = window.tr.mes2;
			document.getElementById('mes3').innerHTML = window.tr.mes3;
		</script-->
		
		<!--Two-->
		<script>
			for (var key in window.tr) {
				document.getElementsByTagName('p')[key].innerHTML = window.tr[key];
			}
		</script>
	</body>
</html>