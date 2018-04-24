<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Interactive Crossword</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="./styles/cool_buttons.css">
	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script src="js/jquery.crossword.js"></script>
	<script src="js/script.js"></script>
	<script src="js/change_view.js"></script>

	<style type="text/css" media="screen">
	/*
		Default puzzle styling
	*/
	body {
		font: 62.5%/1.3em Helvetica, sans-serif;
		width: 90.3%;
		margin: 10px auto;
		background-color: #ffe6e6;
	}
		table { 
			border-collapse: collapse; 
			border-spacing: 0; 
			max-width: 100%;
		}
		table tr{
			width: 100%;
		}
		table td {
			width: 5em;
			height: 5em;
			border: 1px solid #cdcdcd;
			padding: 0;
			margin: 0;
			background-color: #333;
			position: relative;
		}
				
		td input {
			width: 100%;
			height: 100%;
			padding: 0em;
			border: none;
			text-align: center;
			font-size: 3em;
			color: #666;
			background-color: #f4f4f4;
		}
		
		td input:focus {
			background-color: #fff;
		}
		
		td span {
			color: #444;
			font-size: 0.8em;
			position: absolute;
			top: -1px;
			left: 1px;
		}
		
		input.done {
			/*font-weight: bold;*/
			color: green;
		}

		input.wrong {
			font-weight: bold;
			color: red;
		}
		
		.active,
		.clues-active {
			/*background-color: #ddd;*/
		}
		.clue-done {
			color: #999;
			text-decoration: line-through;
		}
		
		#puzzle-wrapper {
			float: left;
			width: 54%;
			margin-right: 3%;
		}
		#puzzle-clues {
			float: left;
			width: 40%;
		}
		
		#puzzle-clues li{
			font-size: 1.2em;
			margin: .3em;
			line-height: 1.6em;
		}
		
		.change_button {
			margin-left: 35%;
			margin-bottom: 2.5%;
			margin-top: 2.5%;
			display: block;
		}
		
		.header {
			font-size: 2em;
			margin-top: 0;
			/*color: white;*/
			text-align: center;
			text-decoration: underline;
			/*background-color: #630110;*/
			margin-bottom: 3.5%;
			/*height: 100px;*/
		}
		
	</style>

</head>

<body>
<div class="header">
	<h1>A Crossword</h1>
</div>

<div id="puzzle-wrapper"><!-- crossword puzzle appended here --></div>
<div class = "change_button container">
	<a href="#" class="btn-3d blue " id="change" onclick="checkCrossword()">Check</a>
</div>
<span id="audio-error"></span>
<span id="audio-success"></span>
</body>
</html>	