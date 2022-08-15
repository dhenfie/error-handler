<?php

/**
 * @author fajar susilo <fajarsusilo1600@gmail.com>
 * @license MIT
 * @since 1.0.0
 */
if (!function_exists('get_detail_code')) {
    function get_detail_code(string $file, int $line): void
    {
        $source = file_get_contents($file);
        $source = explode("\n", $source);
        $lengthLine = count($source);
        $startLine = $line - 10;
        $endLine = $line + 10;
        $html = null;

        if ($startLine < 1) {
            $startLine = 1;
        }

        if ($endLine > $lengthLine) {
            $endLine = $lengthLine;
        }

        for ($i = $startLine; $i < $endLine; $i++) {
            if (($i + 1) == $line) {
                $html .= '<div class="line-code active"> <span class="line-number">' . ($i + 1) . '</span>' . htmlspecialchars($source[$i]) . '</div>';
                continue;
            }
            $html .= '<div class="line-code"> <span class="line-number">' . ($i + 1) . '</span>' . htmlspecialchars($source[$i]) . '</div>';
        }
        echo '<pre><code>' . $html . '</code></pre>';
    }
}
