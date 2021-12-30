<?php

    namespace SimpleWork\Framework\Controllers;

    class errorController extends MainController
    {

        public function error404()
        {

            $this->view("error/404.php");

        }

    }