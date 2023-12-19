<?php
  $random = array('0','1','2','3','4','5','6','7','8','9');
  $n = 0;
    for($i=0; $i<9;$i++){
        $key = rand($i,9);
        $temp = $random[$i];
        $random[$i] = $random[$key];
        $random[$key] = $temp;
        print($random[$i]);
       
        $n++;
       
    }
    echo 'nn'.$n;
    ?>
   