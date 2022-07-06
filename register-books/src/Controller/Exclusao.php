<?php

namespace Fatec\Livros\Controller;

use Fatec\Livros\Entity\Livro;
use Fatec\Livros\Infra\EntityManagerCreator;

class Exclusao implements InterfaceControladorRequisicao
{
  private $entityManager;

  public function __construct()
  {
    $this->entityManager = (new EntityManagerCreator())->getEntityManager();
  }

  public function processaRequisicao(): void
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    if (!$id) {
      header('Location: /listar-livros');
      return;
    }

    $livro = $this->entityManager->getReference(Livro::class, $id);
    $this->entityManager->remove($livro);
    $this->entityManager->flush();

    header('Location: /listar-livros');
  }
}
