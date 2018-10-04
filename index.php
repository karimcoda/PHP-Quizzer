<?php include 'database.php' ?>
<?php
//Get Total Questions
$query = "SELECT * FROM questions";

//Get Results
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;
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
			<h2>Test Your PHP Knowledge.</h2>
			<p>Ths Is A Multiple Choice Quiz To Test Your Knowledge Of PHP</p>
			<ul>
				<li><strong>Number Of Question: </strong><?php echo $total; ?></li>
				<li><strong>Type: </strong>Multiple Choice</li>
				<li><strong>Estimated Time: </strong><?php echo $total * .5; ?> Min</li>
			</ul>
			<a href="question.php?n=1" class="start">Start Quiz</a>
		</div>
	</main>
	<footer>
		<div class="container">
			copyright &copy; PHP Quizzer 2018 CODA.
		</div>
	</footer>
</body>
</html>