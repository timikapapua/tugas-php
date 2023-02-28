<?php

$kata = "sepatu";

var_dump($kata);

if($kata ==strrev($kata)){
    echo "kata ini adalah kata palindrom";
}else{
    echo "kata ini bukan kata palindrom";
}