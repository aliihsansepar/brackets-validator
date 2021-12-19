<?php
    /**
     * @param string $url
     * @param array $params
     * @return string
     */
    function url(string $url, array $params = []): string
    {
        return \Core\Route::url($url, $params);
    }

    /**
     * @param string $name
     * @param array $data
     * @return string
     */
    function view(string $name, array $data = []): string
    {
        return \Core\View::show($name, $data);
    }