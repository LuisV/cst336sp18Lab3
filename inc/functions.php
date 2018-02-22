<?php
class Card {
    public $cardSuit;
    public $cardFace;
}

    function play()
    {
        $allPlayers = playerArray();
        printGameStats($allPlayers);
        drawHand($allPlayers);
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
            'hand' => array(),
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
            
        //Assigns a hand to each player    
        $allPlayers = drawHand($allPlayers);
            
        return $allPlayers;
    }
    
    function printGameStats($allPlayers) 
    {
        foreach ($allPlayers as $player) 
        {
            //Get rid of width and height, just used for testing purposes
            echo "<br/>".$player['name']."<br/>";
            echo "<img src= '".$player['imgURL']."' width= '300px' height= '300px'/>";
            
            displayHand($player);
            
            //Just for test purposes
            echo $player['points'];
        }
    }
    
     # Professors generate Deck function from class
    function generateDeck() {
        $suits = array("clubs", "spades", "hearts", "diamonds");
        $deck = array();
        for($i=0;$i<=3;$i++){
            for($j=1;$j<=13;$j++){
                $card = array(
                    'suit' => $suits[$i],
                    'value' => $j
                );
                $deck[] = $card;
            }
        }
        shuffle($deck);
        return $deck;
    }
    
    $deck = generateDeck();
    //Professors display card function
    function displayCards() {
        global $deck;
        foreach ($deck as $card){
            $value = $card['value'];
            $suit = $card['suit'];
        }
    }
    
    function drawHand($allPlayers)
    {
        global $deck;
        
        for($i = 0; $i<4; $i++)
        {
            $currHand = array();
            $sum = 0;
            while($sum<=37)
            {
                $currCard = array_pop($deck);
                $sum = $sum + $currCard['value']." ";
                array_push($currHand, $currCard);
            }
            $allPlayers[$i]['hand'] = $currHand;
            $allPlayers[$i]['points'] = $sum;
        }
        return $allPlayers;
    }
    
?>