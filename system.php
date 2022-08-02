<?php

// GETTING START DIRECTORY FOR ALL THE APPS IN THIS PATH
$startDir = '.';

// GETTING SYSTEM PACKAGE INFORMATION
$currentSystemInfo = file_get_contents('system.info');
$currentSystemPkg = file_get_contents($currentSystemInfo.'.pkg');
$currentSystemPkgD = explode('|[1]|', $currentSystemPkg);
$currentSystemPkgH = $currentSystemPkgD[0];
$currentSystemPkgHD = explode('|[2]|', $currentSystemPkgH);
$currentSystemPkgB = $currentSystemPkgD[1];

// GETTING CURRENT SYSTEM PACKAGE DATA
$syspkg =
[
    'author' => $currentSystemPkgHD[0],
    'branch' => $currentSystemPkgHD[3],
    'created' => $currentSystemPkgHD[4],
    'description' => $currentSystemPkgHD[5],
    'files' => $currentSystemPkgB,
    'name' => $currentSystemInfo,
    'namespace' => $currentSystemPkgHD[0],
    'project' => $currentSystemPkgHD[1],
    'release' => $currentSystemPkgHD[4],
    'released' => $currentSystemPkgHD[4],
    'repo' => $currentSystemInfo,
    'started' => $currentSystemPkgHD[4],
    'title' => $currentSystemPkgHD[6],
    'type' => $currentSystemPkgHD[7],
    'user' => $currentSystemPkgHD[0],
    'version' => $currentSystemPkgHD[2],
];

// GETTING SOUND LIBRARY FROM THE CURRENT DIRECTORY
$soundlib = str_replace($startDir.'/','',(glob($startDir.'/snd.*.flac')));
$soundcount = count($soundlib);
$soundct = $soundcount - 1;

// GETTING CURRENT YEAR
if (file_exists('year')) {
    $today = file_get_contents('year');
} else {
    $today = -2000;
}

// ASSIGNING WEBSITE ID
$websiteID = basename(__DIR__);

// GETTING WEBSITE TITLE, RETURNING ID IF FOUND NOTHING
if (file_exists('name')) {
    $websiteTitleFile = file_get_contents('name');
    if ($websiteTitleFile != '') {
        $websiteTitle = $websiteTitleFile;
    } else {
        $websiteTitle = $websiteID;
    }
} else {
    $websiteTitle = $websiteID;
}

// CAN WEBSITE PLAY INTERFACE SOUNDS
if (file_exists('sounds')) {
    $sounds = boolval(file_get_contents('sounds'));
} else {
    $sounds = false;
}

// GETTING CURRENT LOCALE FROM FILE
if (file_exists("locale")) {
    $localeOpen = file_get_contents("locale");
    $locale = ($localeOpen != "") ? $localeOpen : "en";
} else {
    $locale = "en";
}
$lingua = $locale;
