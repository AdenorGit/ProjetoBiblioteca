<?php

spl_autoload_register(function($nome_da_classe) {
    // Substitui as barras invertidas do namespace por barras normais
    $nome_da_classe = str_replace('\\', '/', $nome_da_classe);
    $arquivo = BASE_DIR . '/' . $nome_da_classe . '.php';
    
    if (file_exists($arquivo)) {
        require $arquivo;
    }
});