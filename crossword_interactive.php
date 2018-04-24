<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="./styles/cool_buttons.css">
	<title>Interactive Crossword</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script src="js/interactive_crossword.js"></script>
	<script src="js/script2.js"></script>
	<script src="js/change_view.js"></script>
	<script src="js/check.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
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
		
		img {
			width: 100px;
			height: 100px;
		}

		input.wrong {
			font-weight: bold;
			color: red;
		}
		
		.active,
		.clues-active {
			background-color: #ddd;
		}
		.clue-done {
			color: #155724;
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
		
		#puzzle-wrapper-interactive {
			float: left;
			width: 54%;
			margin-right: 3%;
		}
		#puzzle-clues-i {
			float: left;
			width: 40%;
		}
		
		#puzzle-clues-i li{
			font-size: 1.2em;
			margin: .3em;
			line-height: 1.6em;
		}
		
		.show_answer {
			margin-left: 37.5%;
			margin-bottom: 1.5%;
			/*margin-top: 2.5%;*/
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
<br>
<br>
<div class="header">
	<h1>Crossword 2.0</h1>
</div>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<!--<br>-->
<!--<br>-->
<!--<br>-->
<!--<br>-->
<div class = "show_answer container">
	<a href="#" class="btn-3d blue " id="change" onclick="showAnswer()">Show All Answers</a>
</div>
<div id="puzzle-wrapper"><!-- crossword puzzle appended here --></div>
<span id="audio-error"></span>
<span id="audio-success"></span>
<script src="js/crossword_options.js"></script>
<script type="text/javascript" src="">
	$("[data-coords='2,1']").tooltip({
		content: '<img src="img/alpha.gif">',
   		track:true
	})
</script>
</body>

</html>	