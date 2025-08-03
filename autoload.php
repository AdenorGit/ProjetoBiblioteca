<?php

spl_autoload_register(function($Nome_da_classe) {
    // Substitui as barras invertidas do namespace por barras normais
    $Nome_da_classe = str_replace('\\', '/', $Nome_da_classe);
    $arquivo = BASE_DIR . '/' . $Nome_da_classe . '.php';
    
    if (file_exists($arquivo)) {
        require $arquivo;
    }
});