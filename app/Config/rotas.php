<?php 

    use SimpleWork\Framework\Routes\Rotas;
    
    // Rota da Página Principal
    Rotas::set("home/index", "GET");

    // Rota de Login & Registro
    Rotas::set("login/index", "GET");