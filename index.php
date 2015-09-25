<?php

function Greetings ($hour) {
    
        if ($hour < 12){
            return "Good Morning";
        }
        elseif ($hour < 17 && $hour > 12){
            return "Good Afternoon";
        }
        elseif ($hour < 21 && $hour > 17){
            return "Good Evening";
        }
        elseif ($hour < 24 && $hour > 21){
            return "Good Night";
        }
        else {
            return "That's not an hour of the day";
        }
        
    }
    
    print Greetings(18);
    
    print Greetings(2534);
    
    print Greetings(8);
    
    print Greetings(hello);
    
    print Greetings(22.5);
    
    
?>