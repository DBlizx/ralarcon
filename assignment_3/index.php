

<html>
<head>
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</style>
</head>

<body bgcolor='#e1e1e1'>

<?php


	$rid = rand(1,3);
	echo $rid;
?>

<div id='wrapper'>

<br />
<br />
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Movie Quiz</h1>
    <p class="lead">Think you know movies? Take this quiz and see how well you do.</p>
  </div>
</div>
<br /><br />

<?php

if ($rid == 1){
	
	echo "
<form action='process.php?id=1' method='post' id='quizForm' id='1'>


	<ol>
    
   <h4>2001-2004 films.</h4>
    	<li>
        <h3>Bill Murray and a young Scarlett Johansson star in this romandic dramedy.</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A) Lost in Translation</label>

        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B) Oceans Eleven</label>

        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C) Groundhog Day</label>

        </div>
        </li>
        
        <h4>Korean films.</h4>

        <li>
        <h3>Imprisoned for 15 years. Revenge.</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A) Silmido </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B) Oldboy </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C) Battle Royale </label>
        </div>
        </li>
        
      
           <h4>Zombie films.</h4>

         <li>
        <h3>Rage Virus</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A)Red Dragon </label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B) Dawn of the Dead</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C) 28 Days Later</label>
        </div>
        </li>
        
        <h4>Weapons</h4>

         <li>
        <h3>Dirty Harry's gun.</h3>
        
        <div>
        <input type='radio' name='img1' id='img1' value='A' />
        <label for='img1A'><img src='img/dirtyharry1.jpg' class='img-fluid' alt='Responsive image'/></label>
        </div>
        
        <div>
        <input type='radio' name='img1' id='img1' value='B' />
        <label for='img1B'><img src='img/dirtyharry2.jpg'/></label>
        </div>
        
        <div>
        <input type='radio' name='img1' id='img1' value='C' />
        <label for='img1C'><img src='img/dirtyharry3.jpg'/></label>
        </div>
        </li>
        
        <li>
        <h3>What year was No Country for Old Men Released?</h3>
        <select name='dropMovie1'>
  <option value='2001'>2001</option>
  <option value='2004'>2004</option>
  <option value='2007'>2007</option>
  <option value='2010'>2010</option>
</select>
</li><br>
                   <h3>*Bonus* Guess my favorite film. Hint: Japanese. Starts with an 'I'. Black and white.</h3>

        <input type='text' name='textMovie' id='txtMovie'>
    </ol>
     <input type='submit' value='Submit Quiz' />
    
</form>";

}

if ($rid == 2){
	
	echo "


<form action='process1.php?id=2' method='post' id='quizForm' id='2'>


	<ol>
    
   <h4>Comedy</h4>
    	<li>
        <h3>George Clooney voices a fox.</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A) The Fox </label>

        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B) Fantastic Mr. Fox </label>
 
        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C) The Descendants </label>

        </div>
        </li>
        
        <h4>Black and White films</h4>

        <li>
        <h3>Swedish film about playing chess with death.</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A) Persona </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B) The Seventh Seal </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C) Through a Glass Darkly </label>
        </div>
        </li>
        
      
           <h4>Japanese animation</h4>

         <li>
        <h3>Similar themes and scenes are brought to Black Swan from this anime film.</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A)Perfect Blue</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B) Akira</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C) Ghost in the Shell</label>
        </div>
        </li>
        
        <h4>Weapons</h4>

         <li>
        <h3>Nickname for Ash's shotgun from Army of Darkness.</h3>
        
        <div>
        <input type='radio' name='img1' id='img1' value='A' />
        <label for='answerThreeC'>A) Dominator </label>
        </div>
        
        <div>
        <input type='radio' name='img1' id='img1' value='B' />
        <label for='answerThreeC'>B) Boomstick </label>
        </div>
        
        <div>
        <input type='radio' name='img1' id='img1' value='C' />
        <label for='answerThreeC'>C) Kapow </label>
        </div>
        </li>
        <li>
        <h3>What year was There Will Be Blood released?</h3>
        <select name='dropMovie1'>
  <option value='2001'>2001</option>
  <option value='2004'>2004</option>
  <option value='2007'>2007</option>
  <option value='2010'>2010</option>
</select>
</li><br>
                   <h3>*Bonus* What movie is this quote from: I will find you and I will kill you?</h3>

        <input type='text' name='textMovie' id='txtMovie'>
    </ol>
     <input type='submit' value='Submit Quiz' />
    
</form>
";
}

if ($rid == 3){
	
	echo "
<form action='process2.php?id=3' method='post' id='quizForm' id='3'>


	<ol>
    
   <h4>1990s films</h4>
    	<li>
        <h3>Morgan Freeman and Brad Pitt are detectives.</h3>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>A) The Bone Collector</label>

        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>B) Seven</label>

        </div>
        
        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>C) 12 Monkeys</label>

        </div>
        </li>
        
        <h4>Japanese black and white films</h4>

        <li>
        <h3>Inexperienced detective must find his stolen gun.</h3>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>A) Early Summer </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>B) Tokyo Story </label>
        </div>
        
        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='C' />
        <label for='answerTwoC'>C) Stray Dog </label>
        </div>
        </li>
        
      
           <h4>Dog films</h4>

         <li>
        <h3>Frankie Munez stars in this 2000 film about a boy and his terrier.</h3>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerThreeA'>A) My Dog Skip</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerThreeB'>B) Snow Dogs</label>
        </div>
        
        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerThreeC'>C) Air Bud</label>
        </div>
        </li>
        
        <h4>Actress</h4>

         <li>
        <h3>Who is this actress?</h3>
        <img src='img/eyes.jpg' class='img-fluid' alt='Responsive image'>
        
        <div>
        <input type='radio' name='img1' id='img1' value='A' />
        <label for='answerThreeC'>A) Carrey Mulligan</label>
        </div>
        
        <div>
        <input type='radio' name='img1' id='img1' value='B' />
        <label for='answerThreeC'>B) Jennifer Aniston</label>
        </div>
        
        <div>
        <input type='radio' name='img1' id='img1' value='C' />
        <label for='answerThreeC'>C) Jessica Chastain</label>
        </div>
        </li>
        <li>
        <h3>What year was Inception released?</h3>
        <select name='dropMovie1'>
  <option value='2001'>2001</option>
  <option value='2004'>2004</option>
  <option value='2007'>2007</option>
  <option value='2010'>2010</option>
</select>
</li>
<br>
                   <h3>*Bonus* How old is Keanu Reeves? </h3>

        <input type='text' name='textMovie' id='txtMovie'>
    </ol>
     <input type='submit' value='Submit Quiz' />
     
    
</form>";

}

?>
<footer><div class="alert alert-warning" role="alert">
<h5>Copyright Rene Alarcon CST 352 CSUMB 2017</h5></div></footer>
</div><!--- end of wrapper div --->

</body>
</html>