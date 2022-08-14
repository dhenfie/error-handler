<?php

namespace ErrorHandler\Contracts;

use Throwable;

interface HandlerInterface
{
    public function report(Throwable $e);
    public function render(Throwable $e);
}
