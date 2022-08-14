<?php

use ErrorHandler\View\View; ?>

<?php View::section('header'); ?>
<ul>
    <li> Message <?= $e->getMessage() ?></li>
    <li> File <?= $e->getFile() ?></li>
    <li> Line <?= $e->getLine() ?></li>
</ul>
<?php View::endSection(); ?>
<?php View::section('code'); ?>
<?= get_detail_code($e->getFile(), $e->getLine()); ?>
<?php View::endSection(); ?>