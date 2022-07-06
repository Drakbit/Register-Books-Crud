<?php

namespace Fatec\Livros\Entity;

/**
 * @Entity
 * @Table(name="usuarios")
 */
class Usuario
{
	/**
	 * @Id
	 * @GeneratedValue
	 * @Column(type="integer")
	 */
	private $id;
	/**
	 * @Column(type="string")
	 */
	private $nome;
	/**
	 * @Column(type="string")
	 */
	private $email;
	/**
	 * @Column(type="string")
	 */
	private $senha;

	public function getId(): int
	{
		return $this->id;
	}

	public function setId(int $id): void
	{
		$this->id = $id;
	}

	public function getNome(): string
	{
		return $this->nome;
	}

	public function setNome(string $nome): void
	{
		$this->nome = $nome;
	}

	public function getEmail(): string
	{
		return $this->email;
	}

	public function setEmail(string $email): void
	{
		$this->email = $email;
	}

	public function setSenha(string $senha): void
	{
		$this->senha = password_hash($senha, PASSWORD_BCRYPT);
	}

	public function senhaEstaCorreta(string $senhaPura): bool
	{
		return password_verify($senhaPura, $this->senha);
	}
}
