<?php

namespace Fatec\Livros\Controller;

class FormularioInsercao extends ControllerComHtml implements InterfaceControladorRequisicao
{
  public function processaRequisicao(): void
  {
    echo $this->renderizaHtml('livros/formulario.php', [
      'titulo' => 'Novo Livro'
    ]);
  }
}
