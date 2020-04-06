<!DOCTYPE html>
<html>
<head>
	<title>Rozcestník</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<h1>Rozcestník 2019/20</h1>
	<div id="menu">
		<ul>
			<li>Září 2019
				<ul></ul>
			</li>

			<li>Říjen 2019
				<ul></ul>
			</li>

			<li>Listopad 2019
				<ul></ul>
			</li>

			<li>Prosinec 2019
				<ul></ul>
			</li>

			<li>Leden 2020
				<ul></ul>
			</li>

			<li>Únor 2020
				<ul></ul>
			</li>

			<li>Březen 2020
				<ul></ul>
			</li>

			<li>Duben 2020
				<ul></ul>
			</li>

			<li>Květen 2020
				<ul></ul>
			</li>

			<li>Červen 2020
				<ul></ul>
			</li>
		</ul>
	</div>


	<script type="text/javascript">
		function nwm() {
			var x, i;
			x = document.querySelectorAll("#menu > ul > li > ul");

			var monthNum = new Array();
			monthNum["January"] = 0;
			monthNum["February"] = 1;
			monthNum["March"] = 2;
			monthNum["April"] = 3;
			monthNum["May"] = 4;
			monthNum["June"] = 5;
			monthNum["July"] = 6;
			monthNum["August"] = 7;
			monthNum["September"] = 8;
			monthNum["October"] = 9;
			monthNum["November"] = 10;
			monthNum["December"] = 11;

			for (var a = 0; a < count; a++) {
				var monthName = files[a]['fmonth'];
				var num = monthNum[monthName];

				x[num + 4].innerHTML += '<li><a href="' + files[a]['path'] + '" title="' + files[a]['name'] +'">' + files[a]['name'] + '</a></li>';
			}




		}
	</script>


	<?php
	$files = glob("php/*/*.php");
	$count = count($files);

	echo '<script type="text/javascript">';
	echo 'var count = ' . $count . ';';

	echo "var files = new Array();";
		for ($i=0; $i < $count; $i++) {
			$names = basename($files[$i], ".php");
			$month = date("F", filemtime($files[$i]));

			echo 'files[' . $i . '] = {
				path: "' . $files[$i] . '",
				name: "' . $names . '",
				fmonth: "' . $month . '",
			};';
		}
	echo "nwm();";
	echo '</script>';

	?>


</body>
</html>