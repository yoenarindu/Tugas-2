<?php
    /*r1 = panjang rusuk 1*/
    /*r2 = panjang rusuk 2*/
    /*t = tinggi*/
    function trapesium($r1,$r2,$t){
        echo "Luas trapesium =", 0.5 * ($r1+$r2) * $t;
    }
    echo trapesium(30,15,20);
    echo "<br/>";
    echo trapesium(56,42,30);
    echo "<br/>";
    echo trapesium(68,59,70);
?>