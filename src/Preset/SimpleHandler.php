<?php

/**
 * @author fajar susilo <fajarsusilo1600@gmail.com>
 * @license MIT
 * @since 1.0.0
 * @package Preset
 */

namespace ErrorHandler\Preset;

use Error;
use ErrorException;
use ErrorHandler\Contracts\HandlerInterface;
use ErrorHandler\View\View;
use Throwable;

class SimpleHandler implements HandlerInterface
{
    public function render(Throwable $e)
    {
        $view = new View();

        if ($e instanceof Error) {
            echo $view->render(data: ['e' => $e]);
            exit;
        }

        if ($e instanceof ErrorException) {
            echo $view->render(data: ['e' => $e]);
            exit;
        }
    }

    public function report(Throwable $e)
    {
        // todo
    }
}
