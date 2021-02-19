<?php

function route() {
    $uri = $_SERVER['REQUEST_URI'];
    $page = trim($uri, '/');
    $pagePath = getPagePath($page);
    if (file_exists($pagePath)) {
        include $pagePath;
    } else {
        include getPagePath('404');
    }
}

function getPagePath($page) {
    return 'pages/' . $page . '.php';
}

route();
