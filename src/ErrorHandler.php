<?php

/**
 * @author fajar susilo <fajarsusilo1600@gmail.com>
 * @license MIT
 * @since 1.0.0
 */

namespace ErrorHandler;

use ErrorException;
use ErrorHandler\Contracts\HandlerInterface;
use Throwable;

class ErrorHandler
{
    protected HandlerInterface $handler;
    public function __construct(HandlerInterface $handler)
    {
        $this->handler = $handler;
    }

    public function register()
    {
        $this->registerErrorHandler();
        $this->registerExceptionHandler();
    }

    private function registerErrorHandler()
    {
        set_error_handler(function (int $code, string $message, string $file, int $line) {
            throw new ErrorException($message, $code, $code, $file, $line);
        }, error_reporting());
    }

    private function registerExceptionHandler()
    {
        set_exception_handler(function (Throwable $e) {
            call_user_func_array([$this->handler, 'render'], [$e]);
            call_user_func_array([$this->handler, 'report'], [$e]);
        });
    }
}
