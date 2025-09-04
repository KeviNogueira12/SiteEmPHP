<?php

namespace App\Model;

use App\Core\Database;
use DateTime;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

#[Entity]

class PassageiroCadastrado
{
    #[Column, Id, GeneratedValue]
    private int $id;

    #[Column]
    private string $NomeCompleto;

    #[Column]
    private string $Email;

    #[Column]
    private string $Senha;

    #[Column]
    private DateTime $DataCadastro;

    #[Column]
    private string $Telefone;

    #[Column]
    private string $CPF;

    #[Column]
    private string $Cidade;

    public function __construct(string $NomeCompleto, string $Email, string $Senha, DateTime $DataCadastro, string $Telefone, string $CPF, string $Cidade)
    {
        $this->NomeCompleto = $NomeCompleto;
        $this->Email = $Email;
        $this->Senha = $Senha;
        $this->DataCadastro = $DataCadastro;
        $this->Telefone = $Telefone;
        $this->CPF = $CPF;
        $this->Cidade = $Cidade;

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->NomeCompleto;
    }

    public function getEmail(): string
    {
        return $this->Email;
    }

    public function getSenha(): string
    {
        return $this->Senha;
    }

    public function getDataCadastro(): DateTime
    {
        return $this->DataCadastro;
    }

    public function getTelefone(): string
    {
        return $this->Telefone;
    }

    public function getTipoUsuario(): string
    {
        return $this->CPF;
    }

    public function getCidade(): string
    {
        return $this->Cidade;
    }

    public function save(): void
    {
        $em = Database::getEntityManager();
        $em->persist($this);
        $em->flush();
    }

    public static function findAll(): array
    {
        $em = Database::getEntityManager();
        $repository = $em->getRepository(PassageiroCadastrado::class);
        return $repository->findAll();
    }
}
