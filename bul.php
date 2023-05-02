<?php

$sayi1 = $_POST["sayi1"];
$sayi2 = $_POST["sayi2"];
$sayi3 = $_POST["sayi3"];

if ($sayi1 >= $sayi2 && $sayi1 >= $sayi3) {
    echo "En büyük sayı: " . $sayi1;
} elseif ($sayi2 >= $sayi1 && $sayi2 >= $sayi3) {
    echo "En büyük sayı: " . $sayi2;
} else {
    echo "En büyük sayı: " . $sayi3;
}

?>