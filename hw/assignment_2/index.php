<!DOCTYPE html>
<html>
<head>
    <title>Kiki's Coffee Shop</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <h1>Kiki's Coffee Beans Shop</h1>
    <?php 

        $arrImage = array();
        $dir = 'images'; //directory containing images

        if (is_dir($dir)) //check if the directory exists
        {
           $arrImage = glob($dir . '/*.jpg'); //get .jpg images

           if (count($arrImage) > 0) //make sure there are images
           {
               echo '<p><img src="' . $arrImage[array_rand($arrImage)] . '"></p>'; //display random images
           }
           else
               echo "<p>No images found in <strong>$dir</strong></p>\n";
        }
        else
         echo "<p>Image directory not found.</p>\n";

    ?>

        <form action="index.php" method="post">
            <input name="go" type="submit" value="Let us choose your coffee type">
        </form>


        <h3>The Men&#361;</h3>
    <?php

        $price = 5;
         
        echo "<table border=\"1\" align=\"center\">";
         
        echo "<tr><th>Pounds of coffee beans</th>";
         
        echo "<th>Price</th></tr>";
         
        for ( $i = 10; $i <= 100; $i += 10) {
         
                        echo "<tr><td>";
         
                        echo $i;
         
                        echo "</td><td>";
         
                        echo "$" . $price * $i;
         
                        echo "</td></tr>";
         
        }
         
        echo "</table>";
    ?>

        <p>Due to high demand, choose only two bags of coffee beans, add the two bag prices below.</p>
        
    <?php 

        $page = $_GET['page']; 

        class calc { 
             var $number1; 
             var $number2; 
                  function add($number1,$number2) 
                  { 
                           $result =$number1 + $number2; 
                            echo("The sum of $number1 and $number2 is $result<br><br>"); 
                            echo("$number1 + $number2 = $result"); 
                            exit; 
                   } 

                  
        } 
        $calc = new calc(); 
    ?>

        <form action="?page=calc" id="calc" method="post" name="calc">
            <p>Bag 1:</p>
            <input name="value1" type="text"><br>


            <p>Bag 2:</p>
            <input name="value2" type="text"><br>
            <input type="submit" value="Calculate">
        </form>
    <?php 
        if($page == "calc"){ 
        $number1 = $_POST['value1']; 
        $number2 = $_POST['value2']; 
             if(!$number1){ 
                  echo("You must enter number 1!"); 
                  exit; 
             } 
             if(!$number2){ 
                  echo("You must enter number 2!"); 
                  exit; 
             } 
             
             if(!eregi("[0-9]", $number1)){ 
                  echo("Number 1 MUST be numbers!"); 
                  exit; 
             } 
             if(!eregi("[0-9]", $number2)){ 
                  echo("Number 2 MUST be numbers!"); 
                  exit; 
             } 
             else{ 
                  $calc->add($number1,$number2); 
             } 
             
        } 
    ?>
    </div>
</body>
</html>