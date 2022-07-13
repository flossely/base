<?php

$startDir = '.';

$currentSystemInfo = file_get_contents('system.info');
$currentSystemPkg = file_get_contents($currentSystemInfo.'.pkg');
$currentSystemPkgD = explode('|[1]|', $currentSystemPkg);
$currentSystemPkgH = $currentSystemPkgD[0];
$currentSystemPkgHD = explode('|[2]|', $currentSystemPkgH);
$currentSystemPkgB = $currentSystemPkgD[1];

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

$soundlib = str_replace($startDir.'/','',(glob($startDir.'/snd.*.flac')));
$soundcount = count($soundlib);
$soundct = $soundcount - 1;

if (file_exists('sounds')) {
    $sounds = boolval(file_get_contents('sounds'));
} else {
    $sounds = false;
}

if (file_exists("locale")) {
    $localeOpen = file_get_contents("locale");
    $locale = ($localeOpen != "") ? $localeOpen : "en";
} else {
    $locale = "en";
}

$lingua = $locale;
