<?php

/**
 * @author fajar susilo <fajarsusilo1600@gmail.com>
 * @license MIT
 * @since 1.0.0
 */

namespace ErrorHandler\View;

use RuntimeException;

class View
{
    /**
     * section
     *
     * @var array
     */
    public array $section = [];

    /**
     * current section
     *
     * @var string|null
     */
    public ?string $currentSection = null;

    /**
     * config view path
     *
     * @var string
     */
    protected string $viewPath;

    /**
     * object instance
     *
     * @var self
     */
    protected static $_instance;

    public function __construct()
    {
        $this->viewPath = __DIR__ . DIRECTORY_SEPARATOR . 'Resource' . DIRECTORY_SEPARATOR;
        static::$_instance = $this;
    }

    /**
     * get section
     *
     * @param  string $name
     * @return void
     */
    public static function section(string $name): void
    {
        static::$_instance->currentSection = $name;
        ob_start();
    }

    /**
     * end section
     *
     * @return void
     */
    public static function endSection()
    {
        $currenSection = static::$_instance->currentSection;
        static::$_instance->section[$currenSection] = ob_get_clean();
    }

    /**
     * render section
     *
     * @param  string $name
     * @return string
     */
    public static function renderSection(string $name): string
    {
        if (isset(static::$_instance->section[$name])) {
            return static::$_instance->section[$name];
        }
        return '';
    }

    /**
     * include file
     *
     * @param  string     $file
     * @param  array|null $data
     * @return void
     */
    private function loadFile(string $file, ?array $data = null): void
    {
        if (file_exists($resource = $this->viewPath . $file)) {
            (is_array($data)) ? extract($data) : '';
            include $resource;
        } else {
            throw new RuntimeException(sprintf('component view %s not found', basename($file)));
        }
    }

    /**
     * render view
     *
     * @param  string     $file
     * @param  array|null $data
     * @return string
     */
    public function render(string $file = "main.php", array $data = null): string
    {
        $this->loadFile($file, $data);
        ob_start();
        $this->loadFile('layout.php', $data);
        return ob_get_clean();
    }
}
