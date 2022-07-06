<?php

use Fatec\Livros\Controller\Login;
use Fatec\Livros\Controller\Cadastro;
use Fatec\Livros\Controller\SalvarCadastro;
use Fatec\Livros\Controller\EntrarConta;

use Fatec\Livros\Controller\FormularioInsercao;
use Fatec\Livros\Controller\ListarLivros;
use Fatec\Livros\Controller\Persistencia;
use Fatec\Livros\Controller\FormularioEdicao;
use Fatec\Livros\Controller\Exclusao;

return [
  '/login' => Login::class,
  '/cadastro' => Cadastro::class,
  '/salvar-cadastro' => SalvarCadastro::class,
  '/entrar-conta' => EntrarConta::class,
  '/listar-livros' => ListarLivros::class,
  '/novo-livro' => FormularioInsercao::class,
  '/salvar-livro' => Persistencia::class,
  '/alterar-livro' => FormularioEdicao::class,
  '/excluir-livro' => Exclusao::class,
];
