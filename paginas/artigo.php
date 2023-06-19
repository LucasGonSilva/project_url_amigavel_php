<?php

echo 'Página para visualizar o artigo';

var_dump($url[1]);

$situacao = filter_input(INPUT_GET, 'situacao', FILTER_SANITIZE_NUMBER_INT);

var_dump($situacao);