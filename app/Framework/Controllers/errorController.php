<?php

    namespace SimpleWork\Framework\Controllers;

    class errorController extends MainController
    {

        public function error404()
        {
            $this->view("error/404.php");
        }

        public function errorRotas()
        {
            $this->view("error/noRotas.php");
        }

    }