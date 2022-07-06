<?php

namespace Fatec\Livros\Controller;

use Fatec\Livros\Entity\Livro;
use Fatec\Livros\Infra\EntityManagerCreator;

class FormularioEdicao extends ControllerComHtml implements
  InterfaceControladorRequisicao
{
  private $repositorioLivros;

  public function __construct()
  {
    $entityManager = (new EntityManagerCreator())
      ->getEntityManager();

    $this->repositorioLivros = $entityManager
      ->getRepository(Livro::class);
  }

  public function processaRequisicao(): void
  {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    if (is_null($id) || $id === false) {
      header('Location: /listar-livros');
      return;
    }

    $livro = $this->repositorioLivros->find($id)->getTitulo();


    echo $this->renderizaHtml('livros/formulario.php', [
      'livro' => $livro,
      'titulo' => 'Alterando Livro: "' . $livro . '"',
    ]);
  }
}
