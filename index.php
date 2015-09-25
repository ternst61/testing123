<?php

function Greetings ($hour, $html = false) {
    
        if ($hour < 12){
            if ($html) return "<h1> Good Morning </h1>";
            return "Good Morning";
        }
        elseif ($hour < 17 && $hour > 12){
            if ($html) return "<h1> Good Afternoon </h1>";
            return "Good Afternoon";
        }
        elseif ($hour < 21 && $hour > 17){
            if ($html) return "<h1> Good Evening </h1>";
            return "Good Evening";
        }
        elseif ($hour < 24 && $hour > 21){
            if ($html) return "<h1> Good Night </h1>";
            return "Good Night";
        }
        else {
            return "That's not an hour of the day";
        }
        
    }
    
    print "<p>" . Greetings(18);
    
    print "<p>" . Greetings(2534);
    
    print "<p>" . Greetings(8, true);
    
    print "<p>" . Greetings(hello);
    
    print "<p>" . Greetings(22.5, true);
    
    
?>