<!DOCTYPE html>
<html>
<head>
	<title>Funny Facts</title>
	<meta charset="utf-8" />
</head>

<body>
	<h1>Funny Facts</h1>
	<?php
		$nickname = validateInput($_POST['nickname']);
		
		function redisplayForm() { ?>
			<form name="nicknameInput" action="quiz.php" method="post">
			<label>Enter a nickname:</label>
			<input type="text" name="nickname">
			<p><input type="submit" name="Submit" value="Take a Quiz" /></p>
			</form>
	<?php		
		}
		
		function showButtons() { ?>
			<p>
			<button onclick="document.location='music.php'">Take Music Quiz</button>
			<button onclick="document.location='countries.php'">Take Countries Quiz</button>
			</p>
	<?php
		}
		
		function displayRequired($data) {
			echo "Error: No nickname was entered";
		}
		
		function validateInput($data) {
			if (empty($data)) {
				redisplayForm();
				displayRequired($data);
			} else {
				echo "Welcome " .$data;
				echo "Please choose the type of quiz you would like to take.";
				showButtons();
			}
		}	
	?>
</body>
</html>