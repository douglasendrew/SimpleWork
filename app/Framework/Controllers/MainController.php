<?php 

    namespace SimpleWork\Framework\Controllers;

    class MainController
    {

        public function view($view_diretorio)
        {

            if (file_exists(__DIR__ . "/../View/$view_diretorio.php"))
            {

                require __DIR__ . "/../View/$view_diretorio.php";

            } else {

                require __DIR__ . "/../View/error/404.php";

            }

        }

        public function model($model_name)
        {

            if (file_exists(__DIR__ . "/../Models/$model_name.php"))
            {

                require __DIR__ . "/../Models/$model_name.php";

            }
        }

    }