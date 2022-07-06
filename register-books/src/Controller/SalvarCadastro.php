<?php

namespace Fatec\Livros\Controller;

use Fatec\Livros\Entity\Usuario;
use Fatec\Livros\Infra\EntityManagerCreator;

class SalvarCadastro implements InterfaceControladorRequisicao
{
  private $entityManager;

  public function __construct()
  {
    $this->entityManager = (new EntityManagerCreator())->getEntityManager();
  }

  public function processaRequisicao(): void
  {
    $nome = filter_input(
      INPUT_POST,
      'nome',
      FILTER_SANITIZE_STRING
    );
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

    $usuario = new Usuario();
    $usuario->setNome($nome);
    $usuario->setEmail($email);
    $usuario->setSenha($senha);

    $id = filter_input(
      INPUT_GET,
      'id',
      FILTER_VALIDATE_INT
    );

    if (!is_null($id) && $id !== false) {
      $usuario->setId($id);
      $this->entityManager->merge($usuario);
    } else {
      $this->entityManager->persist($usuario);
    }

    $this->entityManager->flush();
    header('Location: /listar-livros', true, 302);
  }
}
