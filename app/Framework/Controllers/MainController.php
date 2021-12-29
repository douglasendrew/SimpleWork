<?php 

    namespace SimpleWork\Framework\Controllers;


    class MainController
    {

        public function model_load($model_diretorio)
        {

            if(file_exists(__DIR__ . "/../View/$model_diretorio"))
            {
                require __DIR__ . "/../View/$model_diretorio";
            }else {
                require __DIR__ . "/../View/error/404.php";
            }

        }

    }