<?php

// returns path without leading or trailing slash
function getRequestPath() {
    $uri = $_SERVER['REQUEST_URI'];
    return trim($uri, '/');
}

function route() {
    $path = getRequestPath();
    if ($path == '') {
        $path = 'index';
    }

    $contentFilePath = 'content/' . $path . '.md';
    if (file_exists($contentFilePath)) {
        $contentFile = file_get_contents($contentFilePath);

        $pd = new Parsedown();
        $content = $pd->parse($contentFile);

        include 'templates/content.php';
        return;
    }

    include 'templates/404.php';
}
