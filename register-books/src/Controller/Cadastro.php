<?php

namespace Fatec\Livros\Controller;

use Fatec\Livros\Controller\ControllerComHtml;

class Cadastro extends ControllerComHtml implements InterfaceControladorRequisicao
{
  public function __construct()
  {
  }

  public function processaRequisicao(): void
  {
    echo $this->renderizaHtml('usuarios/cadastro.php', [
      'titulo' => 'Cadastrar-se',
    ]);
  }
}
