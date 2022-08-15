<?php

use ErrorHandler\View\View; ?>

<?php View::section('code'); ?>
<div class="display-code">
    <span class="filename"> <?php echo basename($e->getFile()); ?>:<?php echo $e->getLine(); ?> </span>
    <?php echo get_detail_code($e->getFile(), $e->getLine()); ?>
</div>

<div class="display-code">
    <?php
    $trace = array_slice($e->getTrace(), 1);
    if (!empty($trace) && is_array($trace)) {
        foreach ($trace as $previous) {
            echo '<span class="filename">' . basename($previous['file']) . ':' . $previous['line'] .'</span>';
            echo get_detail_code($previous['file'], $previous['line']);
        }
    }
    ?>
</div>
<?php View::endSection(); ?>