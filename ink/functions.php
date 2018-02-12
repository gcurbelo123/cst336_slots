<?php
    function displayPoints($randomValue1, $randomValue2, $randomValue3){
        echo "<div id = 'output'>";
        
        if($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3){
            switch($randomValue1){
                case 0: $totalPoints = 1000;
                        echo "<h1>Jackpot!</h1>";
                        echo "<audio src = 'sounds/jackpot.mp3' autoplay>";
                        break;
                case 1: $totalPoints = 500;
                        echo "<audio src = 'sounds/jackpot.mp3' autoplay>";
                        break;
                case 2: $totalPoints = 250;
                        echo "<audio src = 'sounds/jackpot.mp3' autoplay>";
                        break;
                case 3: $totalPoints = 900;
                        echo "<h1>Jackpot!</h1>";
                        echo "<audio src = 'sounds/jackpot.mp3' autoplay>";
                        break;
            }
            echo "<h2>You won $totalPoints points!</h2>";
        } else {
            echo "<h2>Try Again</h2>";
        }
        echo "</div>";
    }
    
    function displaySymbol($randomValue, $pos){
                
        switch ($randomValue) {
            case 0:
                $symbol = "seven";
                //echo '<img src = "img/seven.png" alt = "seven" title = "Seven" width = "70" />';
                break;
            case 1:
                $symbol = "cherry";
                //echo '<img src = "img/cherry.png" alt = "cherry" title = "Cherry" width = "70" />';
                break;
            case 2:
                $symbol = "lemon";
                //echo '<img src = "img/lemon.png" alt = "lemon" title = "Lemon" width = "70" />';
                break;
            case 3:
                $symbol = "bar";
                break;
            
        }
        
        echo "<img id = 'reel$pos' src = 'img/$symbol.png' alt = '$symbol' title ='" .ucfirst($symbol) . "' width = '70' />";
    }
    
    function play() {
        for($i = 1; $i < 4; $i++){
            ${"randomValue" . $i} = rand(0,3);
            displaySymbol(${"randomValue" . $i}, $i);
        }
        displayPoints($randomValue1, $randomValue2, $randomValue3);
    }
    
    
?>