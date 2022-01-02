<?php

    namespace SimpleWork\Framework\Controllers;

    use SimpleWork\Framework\Outhers\Page;

    class homeController extends MainController
    {

        public function index()
        {
            $this->view("home/homeView");
        }

        public function usuarios()
        {
            $this->view("home/usuariosView");
        }

    }