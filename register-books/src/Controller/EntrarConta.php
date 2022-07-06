<?php

namespace Fatec\Livros\Controller;

use Fatec\Livros\Entity\Usuario;
use Fatec\Livros\Infra\EntityManagerCreator;

class EntrarConta implements InterfaceControladorRequisicao
{
  private $repositorioUsuarios;

  public function __construct()
  {
    $entityManager = (new EntityManagerCreator())
      ->getEntityManager();

    $this->repositorioUsuarios = $entityManager
      ->getRepository(Usuario::class);
  }

  public function processaRequisicao(): void
  {
    $email = filter_input(
      INPUT_POST,
      'email',
      FILTER_SANITIZE_STRING
    );
    $senha = filter_input(
      INPUT_POST,
      'senha',
      FILTER_SANITIZE_STRING
    );

    $usuario = $this->repositorioUsuarios->findBy(array('email' => $email));

    if (!$usuario) {
      header('Location: /login');
      return;
    }

    $senhaValida = $usuario[0]->senhaEstaCorreta($senha);

    if (!$senhaValida) {
      header('Location: /login');
      return;
    } else {
      header('Location: /listar-livros');
      return;
    }
  }
}
