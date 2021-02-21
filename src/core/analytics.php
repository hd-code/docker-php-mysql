<?php

$MAP_COL_TO_SERVER_KEY = array(
    // request data
    'ip' => 'REMOTE_ADDR',
    'path' => 'REQUEST_URI',
    'timestamp' => 'REQUEST_TIME',
    // http header
    'language' => 'HTTP_ACCEPT_LANGUAGE',
    'referrer' => 'HTTP_REFERER',
    'user_agent' => 'HTTP_USER_AGENT',
);

function getRequestData() {
    $result = array();

    global $MAP_COL_TO_SERVER_KEY;
    foreach ($MAP_COL_TO_SERVER_KEY as $key => $phpKey) {
        $result[$key] = $_SERVER[$phpKey] ?? '';
    }

    $hashedIp = hash('md5', $result['ip']);
    $result['ip'] = substr($hashedIp, 0, -1);

    return $result;
}

function saveRequestData() {
    $analyticsDir = realpath('../data');
    $fileName = date('Y-W') . '.csv';
    $filePath = $analyticsDir . '/' . $fileName;

    if (!file_exists($filePath)) {
        global $MAP_COL_TO_SERVER_KEY;
        $headerEntries = array_keys($MAP_COL_TO_SERVER_KEY);
        $headerLine = join(';', $headerEntries) . PHP_EOL;
        file_put_contents($filePath, $headerLine);
    }

    $reqData = getRequestData();
    $reqDataArr = array_values($reqData);
    $reqDataArr = str_replace(';', '\;', $reqDataArr);
    $dataLine = join(';', $reqDataArr) . PHP_EOL;
    file_put_contents($filePath, $dataLine, FILE_APPEND);
}
