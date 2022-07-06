<?php

require __DIR__ . '/../vendor/autoload.php';

$caminho = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : null;

if (!$caminho) return header('Location: /listar-livros');

$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas)) {
  http_response_code(404);
  exit();
}

(new $rotas[$caminho])->processaRequisicao();
