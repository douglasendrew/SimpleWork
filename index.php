<?php

    echo $_SERVER["REQUEST_URI"];

    // Não mostrar erros
    error_reporting(0);

    require "vendor/autoload.php";

    use SimpleWork\Core\Run;

    Run::init();

?>