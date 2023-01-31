<?php
    
    $marks = 33;
    if($marks >= 60) {
        $grade = "First Division";
    } else if($marks >=45 AND $marks <= 59) {
        $grade = "Second Division";
    } else if($marks >= 33 AND $marks <= 44) {
        $grade = "Third Division";
    } else {
        $grade = "Fail";
    }

?>