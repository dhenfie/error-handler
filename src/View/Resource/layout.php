<?php

use ErrorHandler\View\View; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <title>Error ! </title>
    <style>
        body {
            background-color: #efefef;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 16px;
        }

        .wrapper {
            height: 100vh;
            padding: 10px;
            overflow-y: auto;
            word-wrap: break-word;
        }

        ul,
        li {
            list-style-type: none;
            padding: 10px;
        }

        .message {
            background-color: salmon;
            border-radius: 5px;
            font-size: x-large;
            font-weight: bolder;
            color: #000000;
        }

        pre {
            font-size: x-large;
            color: #333333;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: white;
            word-wrap: break-word;
            overflow-x: auto;
        }

        .line-number {
            margin-right: 10px;
            padding: 3px;
            background-color: #333333;
            color: white;
        }

        .line-code.active {
            color: #bb0000;
        }

        .line-code.active>.line-number {
            background-color: #bb0000;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="message"> <?= View::renderSection('header'); ?> </div>
        <div><?= View::renderSection('code'); ?></div>
    </div>
</body>

</html>