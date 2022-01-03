<?php

    namespace SimpleWork\Framework\Controllers;

    use SimpleWork\Framework\Database\Db;
    use SimpleWork\Framework\Models\usuariosModel as Usuarios;

    class homeController extends MainController
    {

        public function index()
        {
            // Db::select();
            $this->has_parmission();
            $this->view("home/homeView");

            $n = new Usuarios();
            $n->ususariosList();

        }

        public function usuarios()
        {
            $this->view("home/usuariosView");
        }

    }