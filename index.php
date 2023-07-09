<?php
    session_start();
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    define('ROOT_PATH', realpath(__DIR__));
    // Run application
    require_once "./libs/App.php";

    // Connect view and model by controller
    require_once "./libs/Controller.php";

    // Connect database
    require_once "./libs/config.inc.php";

    new App();
