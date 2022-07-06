<?php

namespace Fatec\Livros\Controller;

use Fatec\Livros\Controller\ControllerComHtml;

class Login extends ControllerComHtml implements InterfaceControladorRequisicao
{
  public function __construct()
  {
  }

  public function processaRequisicao(): void
  {
    echo $this->renderizaHtml('usuarios/login.php', [
      'titulo' => 'Entrar',
    ]);
  }
}
