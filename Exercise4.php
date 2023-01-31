<?php
    
    $myNumber = 3;
    $message = "";
    
    switch ($myNumber) {
        case 1:
            $message = "Monday";
            break;
        case 2:
            $message = "Tuesday";
            break;
        case 3:
            $message = "Webnesday";
            break;
        case 4:
            $message = "Thursday";
            break;
        case 5:
            $message = "Friday";
            break;
        case 6:
            $message = "Satursday";
            break;
        case 1:
            $message = "Sunday";
            break;
        default:
            $message = "show invalid number in default";
            break;
    }

?>