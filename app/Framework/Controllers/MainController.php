<?php 

    namespace SimpleWork\Framework\Controllers;

    use SimpleWork\Framework\Page\Site;

    class MainController
    {

        public function view($view_diretorio, $data)
        {
            if (file_exists(__DIR__ . "/../../View/$view_diretorio.php"))
            {
                $Data = $data;
                require __DIR__ . "/../../../includes/template/header.sw.php";
                require __DIR__ . "/../../View/$view_diretorio.php";
                require __DIR__ . "/../../../includes/template/footer.sw.php";
            } else {
                require __DIR__ . "/../../../includes/template/header.sw.php";
                require __DIR__ . "/../../View/error/404.php";
                require __DIR__ . "/../../../includes/template/footer.sw.php";
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