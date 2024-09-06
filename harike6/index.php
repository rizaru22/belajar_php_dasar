<?php

$Tahun=2025;

if(($Tahun % 4 == 0 && $Tahun % 100 != 0)|| ($Tahun % 400 == 0)){
    echo "tahun $Tahun adalah tahun kabisat";
}else{
    echo "tahun $Tahun bukan tahun kabisat";
}