<?php
/**
 * Created by PhpStorm.
 * User: kristofer.vasser
 * Date: 13.02.2019
 * Time: 14:15
 */
$eesnimi = "Kristofer";
$perenimi = "Vasser";
$vanus = 20;
$kaal = 61;
$sugu = "mees";

switch ($sugu) {
    case 'mees':
        echo '<p style ="color: blue">';
        break;
    case 'naine':
        echo '<p style="color: red">';
        break;
    default:
        echo '<p style="color: green">';
        break;
}
echo "Minu eesnimi on ".$eesnimi."<br>";
echo "Minu perekonnanimi on ".$perenimi."<br>";
echo "Vanuseks mul ".$vanus." aastat<br>";
echo "Kaalun ".$kaal." kg<br>";
