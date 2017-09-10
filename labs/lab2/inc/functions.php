<?php

 function displaySymbol($randomNumber, $pos) {
            
        //$randomNumber = rand(0,2); //Generates random number

        if ( $randomNumber == 0 ) {
            $symbol = "seven";
         } else if ( $randomNumber == 1 ) {
            $symbol = "cherry";}
            else if ( $randomNumber == 2) {//new symbol
            $symbol = "grapes";
         } else {
            $symbol = "lemon";
         } 
         
            echo "<img id='reel$pos' src='img/$symbol.png' alt='$symbol' title='$symbol' width='70'/>";
            

    }


 //Displays number of points player has won
    function displayPoints($randomValue1,$randomValue2,$randomValue3, $randomValue4){
        
        //checking if three symbols are the same
        echo "<div id='output'>";
        if ($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3){
            switch ($randomValue1){
                case 0: $totalPoints = 1000;
                        echo "<h1>Jackpot!</h1>";
                        echo "<EMBED SRC='media/jackpot_sound.mp3' HIDDEN='TRUE' AUTOSTART='TRUE'></EMBED>";
                        break;
                case 1: $totalPoints = 500;
                        break;
                case 2: $totalPoints = 250;
                        break;
                case 3: $totalPoints = 900;
                        break;
            }
            echo "<h2> You won $totalPoints points!</h2>";
        } else {
            echo "<h3> Try Again!</h3>";
        }
        echo "</div>";
    }
    
    function play(){
   
   for ($i=1; $i<4; $i++){
       ${"randomValue" . $i } = rand(0,3);
       displaySymbol(${"randomValue" . $i}, $i);
   }
    //$randomValue1 = rand(0,2); //Generates random number
  // displaySymbol($randomValue1); //call displaySymbol() function
   // $randomValue2 = rand(0,2); //Generates random number
  //  displaySymbol($randomValue2);
   // $randomValue3 = rand(0,2); //Generates random number
  //  displaySymbol($randomValue3);
    
   // echo "The random values are: <br/>";
   // echo $randomValue1 ."<br/>". $randomValue2 ."<br/>". $randomValue3;
    
    displayPoints($randomValue1,$randomValue2,$randomValue3, $randomValue4);    
}
?>