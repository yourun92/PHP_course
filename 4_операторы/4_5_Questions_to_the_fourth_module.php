<?php
    $a = readline();
    $b = readline();
    $c = readline();
    $d = readline();
    $res = $a + $b + $c;
    $res *= $d;
    $res %= 10;
    $res /= 5;
    echo $res;
    echo $a;
?>