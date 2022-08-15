<?php

use ErrorHandler\View\View; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <title> Error <?php echo $e->getMessage() ?></title>
    <style>
        <?php echo file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'assets/default.css'); ?>
    </style>
</head>

<body>
    <div class="message">
        Error : <?php echo $e->getMessage(); ?>
        in <?php echo $e->getFile(); ?> </div>
    <div class="wrapper">
        <?php echo View::renderSection('code'); ?>
    </div>
</body>

</html>