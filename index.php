<?php



?>

<?php
    session_start();
    
    include 'inc/functions.php'
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Silver Jack </title>
    </head>
    <h1>DRAGON BALL JACK</h1>
    <body>
        <?php
            
        
            play();
                $start = microtime(true);
                for ($i = 0; $i < 1000000; $i++) {
                $j = rand(1,3000) * rand(1,2000);
            }

                 $elapsedSecs = microtime(true) - $start;
                echo "time elapsed: " . $elapsedSecs . " secs";
        ?>
        <form>
           <input type="submit" value="Play" sound="jackpot"/>
            </form>
    </body>
</html>