<?php

/**
 * @param $path
 *
 * @return array
 */
function loadJson($path) {
    if (! file_exists($path)) {
        die("path not found");
    }
    return json_decode(file_get_contents($path), true);
}

// Load the json file to return array of order  data
$stations = loadJson('./stations.json');

if (! is_array($stations)) {
    die("stations.json was incorrectly loaded");
}

// Begin your code here. Good luck!