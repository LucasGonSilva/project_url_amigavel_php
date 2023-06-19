<?php
include_once './config/config.php';
// Receber a URL do .htaccess. Se não existir 

$url = (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)) ? filter_input(INPUT_GET, 'url', FILTER_DEFAULT) : 'home');

$url = array_filter(explode('/', $url));


// Criar o caminho da pagina com o nome que esta na primeira posicao do array criado acima e atribuir a extensao .php

$arquivo = 'paginas/' . $url[0] . '.php';


include_once './include/menu.php';

if(is_file($arquivo)) {
    include $arquivo;
} else {
    include 'paginas/404.php';
}
