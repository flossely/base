<?php

// ENTERING THIS DIR PROFILE DATA
if (file_exists('rating')) {
    $thdirRatingOpen = file_get_contents('rating');
    $thdirRating = ($thdirRatingOpen != '') ? $thdirRatingOpen : 0;
} else {
    $thdirRating = 0;
}
if (file_exists('mode')) {
    $thdirModeOpen = file_get_contents('mode');
    $thdirMode = ($thdirModeOpen != '') ? $thdirModeOpen : 0;
} else {
    $thdirMode = 0;
}
if (file_exists('score')) {
    $thdirScoreOpen = file_get_contents('score');
    $thdirScore = ($thdirScoreOpen != '') ? $thdirScoreOpen : 0;
} else {
    $thdirScore = 0;
}
if (file_exists('money')) {
    $thdirMoneyOpen = file_get_contents('money');
    $thdirMoney = ($thdirMoneyOpen != '') ? $thdirMoneyOpen : 0;
} else {
    $thdirMoney = 0;
}
if (file_exists('coord')) {
    $thdirCoordOpen = file_get_contents('coord');
    $thdirCoord = ($thdirCoordOpen != '') ? $thdirCoordOpen : '0;0;0';
} else {
    $thdirCoord = '0;0;0';
}

