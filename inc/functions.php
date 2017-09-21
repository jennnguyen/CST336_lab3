<?php 
 $cardNames = array("clubs","diamonds","hearts","spades"); // folder names (suites)
 $PlayersDeck =array();
 $PlayersSuite=array();
 $deck = range(1,52);
   shuffle($deck);
function randomCardFolder($deck)
{
    $score=0;
    
   // shuffles #'s
   //print_r($deck);
    while($score < 38)
    {
        $suite="";
        $card=array_pop($deck);
        $tempNum=(($card%13)+1);
         //print_r($tempNum);
          //echo 'tempNum: '.$tempNum .'<br/>';
        $suiteValue= (floor($card /13)+1);
        //print_r($suiteValue);
         //echo 'suiteValue: '.$suiteValue .'<br/>';
        $score = $score +$tempNum;
        //print_r($score);
         //echo 'score: '.$score .'<br/>';
        switch($suiteValue)
        {
            case 1: $suite="clubs";
            break;
            case 2: $suite="diamonds";
            break;
            case 3: $suite="hearts";
            break;
            case 4: $suite="spades";
            break;
        }
       echo "<img src='cards/$suite/$tempNum.png' width='70'/>";
       // echo '<br/>';
    }
    return $score;
}
?>