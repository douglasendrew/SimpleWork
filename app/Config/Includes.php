<?php

    /**
     * 
     * @author douglasendrew
     * 
     * (!) Importar arquivos/frameworks (!)
     * 
     * 1. Inclua a pasta com o tipo do arquivo em 'includes/' (Se não existir);
     * 2. Use a função Config::include(); para fazer um include de um arquivo;
     * 
     * Inclusão de arquivos pela pasta includes:
     * 
     *      Uso: Config::include("Nome arquivo", "Nome da pasta");
     *      Exemplo: 
     *          Config::include("bootstrap.css", "css");
     *          // Ou seja, o arquivo 'bootstrap.css' estará em 'includes/css/'
     * 
     * Inclusão de arquivos por CDN ou afins:
     * 
     *      Uso: Config::include("Link do arquivo", "Tipo do arquivo a ser incluido");
     *      Exemplo: 
     *          Config::include("https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", "css");
    */

    use SimpleWork\Core\Run as Config;

    // JS
    Config::include("uikit.min.js", "js");
    Config::include("uikit-icons.min.js", "js");

    // CSS
    Config::include("style.css", "css");
    Config::include("uikit-rtl.min.css", "css");
    Config::include("uikit.min.css", "css");
    
?>
