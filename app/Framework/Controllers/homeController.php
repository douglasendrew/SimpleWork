<?php

    namespace SimpleWork\Framework\Controllers;

    class homeController extends MainController
    {

        public function index()
        {

            echo "Salve!";
            $this->model_load("home/homeView.php");

        }

        public function teste()
        {

            echo "Salve!";
            $this->model_load("home/homeView.php");

        }

    }