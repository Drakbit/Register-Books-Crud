<?php

namespace Fatec\Livros\Controller;

use Fatec\Livros\Entity\Livro;
use Fatec\Livros\Infra\EntityManagerCreator;
use Fatec\Livros\Controller\ControllerComHtml;

class ListarLivros extends ControllerComHtml implements InterfaceControladorRequisicao
{
	private $repositorioLivros;

	public function __construct()
	{
		$entityManager = (new EntityManagerCreator())->getEntityManager();
		$this->repositorioLivros = $entityManager->getRepository(Livro::class);
	}

	public function processaRequisicao(): void
	{
		echo $this->renderizaHtml('livros/listar-livros.php', [
			'livros' => $this->repositorioLivros->findAll(),
			'titulo' => 'Biblioteca',
			'descricao' => 'Biblioteca',
			'autor' => 'Biblioteca',
		]);
	}
}
