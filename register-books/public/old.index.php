<?php

require __DIR__ . '/../vendor/autoload.php';

use Fatec\Livros\Controller\FormularioInsercao;
use Fatec\Livros\Controller\ListarLivros;

if (!isset($_SERVER['PATH_INFO'])) return header('Location: /listar-livros');

switch ($_SERVER['PATH_INFO']) {
    case '/listar-livros':
        return (new ListarLivros())->processaRequisicao();
    case '/novo-livro':
        return (new FormularioInsercao())->processaRequisicao();
    default:
        echo "Erro 404";
        break;
}
