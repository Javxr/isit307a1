<!DOCTYPE html>
<html>
<head>
	<title>Funny Facts</title>
	<meta charset="utf-8" />
</head>

<body>
	<h1>Funny Facts</h1>
	<h3>Welcome to the Countries Quiz!</h3>
	<h3>This quiz consists of 3 true or false questions about countries.</h3>
	<?php 
		$Statements = array(
		'The Singapore flag has 6 stars.', //f
		'China has the largest population in the world.', //t
		'Russia is from Asia.', //f
		'The national dish of Italy is pasta.', //t
		'The national language of USA is mandarin chinese.', //f
		'The beaver is the emblem of Canada.', //t
		'Kimchi is brazilian food.', //f
		'The Japanese flag is red and white in color.', //t
		'The capital of Thailand is Bangkok.'); //t
		
		//print_r($Questions);
		
		$Answers = array();
		
		foreach($Statements as $q) {
			echo $q ."<br />";
		}
	?>
	<p>
	<button onclick="document.location='home.php'">Cancel</button>
	<button>Submit</button>
	</p>
</body>
</html>