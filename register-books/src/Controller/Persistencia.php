<?php

namespace Fatec\Livros\Controller;

use Fatec\Livros\Entity\Livro;
use Fatec\Livros\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControladorRequisicao
{
  private $entityManager;

  public function __construct()
  {
    $this->entityManager = (new EntityManagerCreator())->getEntityManager();
  }

  public function processaRequisicao(): void
  {
    $titulo = filter_input(
      INPUT_POST,
      'titulo',
      FILTER_SANITIZE_STRING
    );
    $descricao = filter_input(
      INPUT_POST,
      'descricao',
      FILTER_SANITIZE_STRING
    );
    $autor = filter_input(
      INPUT_POST,
      'autor',
      FILTER_SANITIZE_STRING
    );

    $livro = new Livro();
    $livro->setTitulo($titulo);
    $livro->setDescricao($descricao);
    $livro->setAutor($autor);

    $id = filter_input(
      INPUT_GET,
      'id',
      FILTER_VALIDATE_INT
    );

    if (!is_null($id) && $id !== false) {
      $livro->setId($id);
      $this->entityManager->merge($livro);
    } else {
      $this->entityManager->persist($livro);
    }

    $this->entityManager->flush();
    header('Location: /listar-livros', true, 302);
  }
}
