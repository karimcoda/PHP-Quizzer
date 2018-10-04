<?php
include 'database.php';
?>
<?php
session_start();
?>
<?php
//Check To See If Score Is Set_Error_Handler
if (!isset($_SESSION['score'])) {
	$_SESSION['score'] = 0;
}
if($_POST){
	$number = $_POST['number'];
	$selected_choice = $_POST['choice'];
	$next = $number+1;
}

//Get Total Questions
$query = "SELECT * FROM `questions`";

//Get Results
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;

//Get Correct Choice
$query = "SELECT * FROM `choices`
				WHERE question_number = $number AND is_correct = 1";

//Get Result 
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

//Get Row
$row = $result->fetch_assoc();

//Set Correct Choice 
$correct_choice = $row['id'];

//compare
if ($correct_choice == $selected_choice) {
	//Answer Is Correct
	$_SESSION['score']++;
}

//Check If Last Question
if ($number == $total) {
	header("Location: final.php");
	exit();
}else{
	header("Location: question.php?n=".$next);
	
}
?>