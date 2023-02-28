<?php

$tahun = 90;

var_dump($tahun);

if (($tahun % 4 == 0 && $tahun % 100 != 0)||$tahun % 400 ==0){
    echo "Tahun tersebut merupakan tahun kabisat";
}else{
    echo "Tahun tersebut bukan tahun kabisat";
}

