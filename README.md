# error-handler
**library ini berfungsi untuk mengganti perilaku bawaan php jika terjadi error.**

anggap saja ini seperti perpustakaan [Whoops](https://github.com/filp/whoops), namun ini lebih sederhana.

## install
karena library ini belum tersedia via composer, anda dapat menggunakan git. 

git clone project ini.
> git clone git@github.com:dhenfie/error-handler.git

buka terminal jalan **composer install** dan **composer dump-autoload**

## cara penggunaan
```php
<?php

use ErrorHandler\ErrorHandler;
use ErrorHandler\Preset\SimpleHandler;

require __DIR__.'vendor/autoload.php';

// buat object ErrorHandler
$errorHandler = new ErrorHandler(new SimpleHandler());
$errorHandler->register();
```

object **ErrorHandler()** mempunyai satu paramenter yaitu sebuah object yang meng-implementasikan Interface `ErrorHandler\Contracts\HandlerInterface`.
yaitu class **SimpleHandler**

class SimpleHandler() inilah yang mengubah perilaku error reporting php.

anda dapat dapat membuat custom handler sendiri dengan meng-implementasikan class custom handler anda dengan HandlerInterface;