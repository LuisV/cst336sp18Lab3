<!DOCTYPE html>
<html>
      
    <head>
   
    </head>
    
    <body>
        <?php 
        
        $player1= array('name'=> 'Luis',
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
        
        $allPlayers = array(
            $player1,
            $player2
            );
            
            function printGameStats($allPlayers) {
                foreach ($allPlayers as $player) {
                    echo "<img src= '".$player['imgURL']."'/>";
                    echo $player['name']."<br/>";
                }
            }
            
        printGameStats($allPlayers);
        ?>
    </body>
</html>