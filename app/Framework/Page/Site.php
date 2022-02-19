<?php

    namespace SimpleWork\Framework\Page;

    class Site
    {

        public static $nome_site;
        public static $page_name;
        public static $url_site;

        public function __construct()
        {
            self::load();
        }

        public static function load()
        {
            require __DIR__ . "/../../Config/page.php";
        }

        // Nome do site
        public static function site_name($site)
        {
            self::$nome_site = $site;
            return self::$nome_site;
        }

        public static function getSiteName()
        {
            self::load();
            return self::$nome_site;
        }

        // Nome da página
        public static function page_name($page_name)
        {
            self::$page_name = $page_name;
            return self::$page_name;
        }

        public static function getPageName()
        {
            self::load();
            return self::$page_name;
        }

        // Gerar o titulo da página
        public static function genTitlePage()
        {
            self::load();
            if (empty(self::$page_name)) {
                return self::$nome_site;
            } else {
                return self::getSiteName() . " - " . self::getPageName();
            }
        }

        public static function getSiteLink()
        {
            $http = (!empty($_SERVER['HTTPS'])) ? "https://":"http://"; 
            $dominio = $_SERVER["HTTP_HOST"];
            $diretorio = $_SERVER["REQUEST_URI"];

            if(strtolower($dominio) == "localhost")
            {
                $diretorio = explode("/", $diretorio);
                return $http.$dominio."/".$diretorio[1]."/";
            }else {
                return $http.$dominio."/";
            }
        }

        public static function redirect( string $caminho ) {
            header("Location: " . self::getSiteLink() . $caminho);
        }

        public static function require_login( $resp )
        {   
            session_start();
            
            if( $resp == true )
            {
                if(!isset($_SESSION['logged']) and $_SESSION['logged'] != true)
                {
                    self::redirect("login");
                    exit;
                }
            }
        } 

        public static function minify_page($buffer)
        {
            $search = array(
                '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
                '/[^\S ]+\</s',     // strip whitespaces before tags, except space
                '/(\s)+/s',         // shorten multiple whitespace sequences
                '/<!--(.|\s)*?-->/' // Remove HTML comments
            );
        
            $replace = array(
                '>',
                '<',
                '\\1',
                ''
            );
        
            $buffer = preg_replace($search, $replace, $buffer);
        
            return $buffer;
        }
        
    }
