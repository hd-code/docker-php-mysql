<!DOCTYPE html>
<html lang="<?=$lang ?? 'de'?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?=$title ?? 'Webseite'?></title>

    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>

<header class="flex stretch justify wrap no-wrap-m bg-green c-white">
    <a href="/">Logo/Home</a>

    <?php include 'templates/nav.php' ?>
</header>