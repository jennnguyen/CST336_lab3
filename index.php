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
            // Player 1-4 are dealt cards and scores are printed
        for ($i = 0; $i < 4; $i++) {
            $score[$i] = playerturn($deck);
            echo 'score '.$score[$i].'<br/>';
            //array_push($score, playerturn($deck));
        }
            
        
        $highestScore = 0; // find the highest score closed to 42
        $totalScore = 0; // Calculate total score for the winner
        $winnerIndex = -1; // To hold the index of the 'winner'
        
        // For loop used to find the highest score closed to 42
        for ($i = 0; $i < 4; $i++) {
            if ($score[$i] > 42) // players with scores above 42 automatically lose
                continue;
            if ($score[$i] > $highestScore) {
                $highestScore = $score[$i];
                $winnerIndex = $i;
            }
        }
            
        //IF THERE ARE NO WINNERS !! (all scores are about 42)
        if ($winnerIndex == -1){
            echo "<h2>No winners.</h2>"; 
            return;
        }
        
        // Adding all the points to the $totalScore, not including the winner's score
        for ($i = 0; $i < 4; $i++) {
            if ($i == $winnerIndex)
                continue;
            $totalScore = $totalScore + $score[$i];
        }
        
        $playerWinner = $winnerIndex + 1; // index + 1 = player#
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