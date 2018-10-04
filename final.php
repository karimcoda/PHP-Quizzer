<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP QUIZZER..</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>PHP Quizzer.</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>You're Done!</h2>
			<p>Congrats! You Have Completed The Test.</p>
			<p>Final Score: <?php echo $_SESSION['score']; ?></p>
			 
			<a href="question.php?n=1" class="start">Take Again..</a>
		</div>
	</main>
	<footer>
		<div class="container">
			copyright &copy; PHP Quizzer 2018 CODA.
		</div>
	</footer>
</body>
</html>