<?php 
    session_start();
    
    $deck = range(1, 52);
    shuffle($deck);
 
    function playerturn($deck) {
        global $deck;
        $score = 0;
        
        // Hands out a certain amount of cards to player
        while($score < 38) {
            $suite = "";
            $card = array_pop($deck);
            // The card number/value
            $tempNum = (($card % 13) + 1); 
            // The suite value
            $suiteValue = (floor($card / 13) + 1); 
            // Calculates the score for the player
            $score = $score + $tempNum;
            
            // Identifies the suite
            switch($suiteValue)
            {
                case 1: $suite = "clubs";
                        break;
                case 2: $suite = "diamonds";
                        break;
                case 3: $suite = "hearts";
                        break;
                case 4: $suite = "spades";
                        break;
            }
            //Displays the card
            echo "<img src='cards/$suite/$tempNum.png' width='70'/>";
            
        }
        echo '<br/>';
        
        return $score;
    }
    
    // Player 1-4 are dealt cards and scores are printed
    function play() {
        for ($i = 0; $i < 4; $i++) {
            // Scores are stored in score[] array
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
        //IF THERE ARE MULTIPLE WINNERS
        for ($i = 0; $i < 4; $i++) {
            if ($score[$i] == $highestScore) 
            {
                $winners[] = $i; // add winners to winner array
            }
            else {continue;}
        }
            
        //IF THERE ARE NO WINNERS !! (all scores are about 42)
        if ($winnerIndex == -1){
            echo "<h2>No winners.</h2>"; 
            return;
        }
        
        // Adding all the points to the $totalScore, not including the winner's score
        for ($i = 0; $i < 4; $i++) {
            if ($score[$i] == $highestScore)
                continue;
            $totalScore = $totalScore + $score[$i];
        }
        
        
        for( $i = 0; $i < count($winners); $i++) {
            switch($winners[$i])
            {
                case 0: $winner = "Alex";
                        break;
                case 1: $winner = "Jenn";
                        break;
                case 2: $winner = "Jose";
                        break;
                case 3: $winner = "Mo";
                        break;
            }
            echo "<h2> $winner wins $totalScore points!!</h2>";
        
        }
    }


    
?>