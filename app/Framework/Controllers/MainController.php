<?php 

    namespace SimpleWork\Framework\Controllers;

    class MainController
    {

        public function view($view_diretorio)
        {

            if (file_exists(__DIR__ . "/../View/$view_diretorio"))
            {

                require __DIR__ . "/../View/$view_diretorio";

            } else {

                require __DIR__ . "/../View/error/404.php";

            }

        }

    }