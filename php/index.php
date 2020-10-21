<?php

/**
 * This method will return a database connection using PDO. It will check if already a connection is created, if not it will create one
 * @return PDO Returns an instance of PDO
 */
function databaseConnection()
{
    if (!isset($GLOBALS['db'])) {
        try {
            $dbname = 'mysql';
            $dns    = 'mysql:host=mysql;dbname=' . $dbname;
            $user   = 'root';
            $pw     = 'test';

            // set error mode and fetch mode
            $options    = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];

            $GLOBALS['db'] = new PDO($dns, $user, $pw, $options);

            echo 'Database connection established';
        } catch (PDOException $e) {
            echo 'Database connection failed: ' . $e->getMessage();
        }
    }

    return $GLOBALS['db'];
}

databaseConnection();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place your PHP code here</title>
</head>
<body>
    <h1>Place your PHP code here</h1>
</body>
</html>