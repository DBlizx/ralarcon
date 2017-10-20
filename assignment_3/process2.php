

<html>
<head>
<link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>
<?php 

	$fid = $_GET['id'];

?>
<body bgcolor="#e1e1e1">

<div id="wrapper">

<br />
<br />
<div class="jumbotron jumbotron-fluid">
  <div class="container2">
    <h1 class="display-3">Your Results</h1>
  </div>
</div>
<br /><br />
<br />
<br />

<?php
	$answer1= $_POST['answerOne'];
	$answer2= $_POST['answerTwo'];
	$answer3= $_POST['answerThree'];
	$answer4= $_POST['img1'];
	$answer5= $_POST['dropMovie1'];
	$answer6= $_POST['textMovie'];
	$score = 0;
	
	if ($answer1 == "B"){$score++;}
		if ($answer1 == "")
		echo "You did not answer question 1.<br><br>";

	if ($answer2 == "C"){$score++;}
	if ($answer2 == "")
		echo "You did not answer question 2.<br><br>";
	if ($answer3 == "A"){$score++;}
	if ($answer3 == "")
		echo "You did not answer question 3.<br><br>";
	if ($answer4 == "A"){$score++;}
	if ($answer4 == "")
		echo "You did not answer question 4.<br><br>";
	if ($answer5 == "2010"){$score++;}
	if ($answer5 == "")
		echo "You did not answer question 5.<br><br>";

		echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/5</font></center>";

	if ($answer6 == "53")
	echo "<center><font face='Berlin Sans FB' size='8'>Wow! You guessed correctly for the bonus question!</font></center><br><br><img src='img/star.jpg'><br><br>";

	else {
		echo "Sorry. Wrong guess.";
	}
	
	
?>
<form action="index.php">
    <input type="submit" value="refresh" />
</form>
<footer><div class="alert alert-warning" role="alert">
<h5>Copyright Rene Alarcon CST 352 CSUMB 2017</h5></div></footer>


</div><!--- end of wrapper div --->

</body>
</html>