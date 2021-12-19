<?php

    namespace Core;

    use Jenssegers\Blade\Blade;

    class View
    {
        /**
         * @param string $viewName
         * @param array $data
         * @return string
         */
        public static function show(string $viewName, array $data = []): string
        {
            $blade = new Blade(dirname(__DIR__) . '/resources/views', dirname(__DIR__) . '/resources/cache');
            return $blade->render($viewName, $data);
        }
    }