<?php
    include 'inc/functions.php'
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Silver Jack </title>
    </head>
    <body>
        <?php
        
            //play();
            // Player 1-4 are dealt cards
        for ($i = 0; $i < 4; $i++) {
            $score[$i] = playerturn($deck);
            echo 'score '.$score[$i].'<br/>';
            //array_push($score, playerturn($deck));
        }
            
        //$winner
        $highestScore = 0;
        $totalScore = 0;
        $winnerIndex = -1;
    
        for ($i = 0; $i < 4; $i++) {
            if ($score[$i] > 42)
                continue;
            if ($score[$i] > $highestScore) {
                $highestScore = $score[$i];
                $winnerIndex = $i;
            }
        }
            
        //IF THERE ARE NO WINNERS !!
        if ($winnerIndex == -1){
            echo "<h2>No winners.</h2>"; 
            return;
        }
            
        for ($i = 0; $i < 4; $i++) {
            if ($i == $winnerIndex)
                continue;
            $totalScore = $totalScore + $score[$i];
        }
        
        $playerWinner = $winnerIndex + 1;
        switch($playerWinner)
            {
                case 1: $winner = "Alex";
                        break;
                case 2: $winner = "Jenn";
                        break;
                case 3: $winner = "Jose";
                        break;
                case 4: $winner = "Mo";
                        break;
            }
        
        echo "<h2> $winner wins $totalScore points!!</h2>"; 
        
        
        //Print score
        //echo 'score '.$score.'<br/>';
        
            
        ?>
    </body>
</html>