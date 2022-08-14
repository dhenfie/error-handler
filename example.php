<?php

use ErrorHandler\ErrorHandler;
use ErrorHandler\Preset\SimpleHandler;
error_reporting(-1);

require './vendor/autoload.php';

$errorHandler = new ErrorHandler(new SimpleHandler());
$errorHandler->register();

include './file_error.php';
