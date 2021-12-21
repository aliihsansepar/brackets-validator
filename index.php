<?php
    require_once __DIR__ . '/vendor/autoload.php';
    use Core\App;
    use Core\Route;
    $app = new App();
    require_once __DIR__ . '/app/Routes/web.php';
    Route::dispatch();
