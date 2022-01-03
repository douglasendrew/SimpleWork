<?php 

    namespace SimpleWork\Framework\Page;

    class Site 
    {

        public static $nome_site;
        public static $page_name;

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
            if(empty(self::$page_name))
            {
                return self::$nome_site;
            }else {
                return self::getSiteName() . " - " . self::getPageName();
            }
        }

    }