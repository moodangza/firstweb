<?php
    $t = array('0','1','2','3','4','5','6','7','8','9');
    for ($x = 0; $x <= 9; $x++) {
        $key = rand($x,9);
        $keep = $t[$x];
        $t[$x] = $t[$key];
        $t[$key] = $keep;
        print($t[$x]).'<br>';
        
      }
    // $random = range(1, 9);
    // shuffle($random);
    // print_r($random);
      
?>