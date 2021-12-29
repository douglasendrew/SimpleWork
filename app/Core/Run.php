<?php 

    // MVC Url: http://www.exemplo.com/controlador/ação/parametro1/parametro2/etc…
    namespace SimpleWork\Core;

    class Run
    {

        public static function init()
        {

            if(isset($_GET['pag']))
            {
                $url = $_GET['pag'];
            }

            if(!empty($url))
            {
                $url = explode("/", $url);
                // $url[0] - Classe
                // $url[1] - Metodo/Função
                // $url[2] - Parâmetros
                $controller = $url[0]."Controller"; 
                array_shift($url);

                if(isset($url[0]) && !empty($url[0]))
                {
                    $metodo = $url[0];
                    array_shift($url);
                }else 
                {
                    $metodo = "index";
                }

                if(count($url) > 0)
                {
                    $parametros = $url;
                }
            }else
            {
                $controller = "index";
            }

        }

    }

?>