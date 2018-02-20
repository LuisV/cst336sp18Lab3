<?php
    function play()
    {
        $allPlayers = playerArray();
        #printGameStats($allPlayers);
        getDeck();
    }
    
    function getDeck() 
    {   
        global $deck;
        #$deck.append();
        
        
        $test = array();
        for($i = 0; $i < 4;$i++){
            for($j = 1; $j <= 13; $j++){
                switch($i){
                    case(0):
                        $suit = "clubs";
                        break;
                    case(1):
                        $suit = "diamonds";
                        break;
                    case(2):
                        $suit = "hearts";
                        break;
                    case(3):
                        $suit = "spades";
                        break;
                }
                array_push($test, "<img src='img/cards/$suit/$j.png'>");
                shuffle($test);
            }
        }
        for($i = 0; $i < 52; $i++)
        {
            echo ($test[$i]);
        }
    }
    
    function playerArray()
    {
        $player1= array(
            'name'=> 'Luis',
            'imgURL' => './img/user_pics/player1.jpg',
            'hand' => array(),
            'points'=> 0
        );
        $player2 = array(
            'name' => 'Emmanuel',
            'imgURL' => './img/user_pics/player2.png',
            'hands' => array(),
            'points' => 0
            );
        
        $player3 = array(
            'name' => 'Adrian',
            'imgURL' => './img/user_pics/player3.jpg',
            'hand' => array(),
            'points' => 0
            );
         $player4 = array(
            'name' => 'Genesis',
            'imgURL' => './img/user_pics/player4.jpg',
            'hand' => array(),
            'points' => 0
            );
        
        $allPlayers = array(
            $player1,
            $player2,
            $player3, 
            $player4
            );
        return $allPlayers;
    }
    
    function printGameStats($allPlayers) 
    {
        foreach ($allPlayers as $player) 
        {
            echo "<img src= '".$player['imgURL']."'/>";
            echo $player['name']."<br/>";
        }
    }
?>