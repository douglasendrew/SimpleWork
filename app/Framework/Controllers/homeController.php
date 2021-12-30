<?php

    namespace SimpleWork\Framework\Controllers;

    class homeController extends MainController
    {

        public function index()
        {
            $this->view("home/homeView.php");
        }

        public function teste($teste)
        {
            $this->view("home/homeView.php");
        }

    }