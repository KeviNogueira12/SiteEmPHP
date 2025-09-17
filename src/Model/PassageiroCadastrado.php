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
    #[Id, GeneratedValue, Column(type: "integer")]
    private int $id;

    #[Column(type: "string", length: 255)]
    private string $nomeCompleto;

    #[Column(type: "string", length: 255, unique: true)]
    private string $email;

    #[Column(type: "string", length: 255)]
    private string $senha;

    #[Column(type: "datetime", name: "data_cadastro")]
    private DateTime $dataCadastro;

    #[Column(type: "string", length: 20)]
    private string $telefone;

    #[Column(type: "string", length: 20, unique: true)]
    private string $cpf;

    #[Column(type: "string", length: 100)]
    private string $cidade;

    // Construtor para inicializar os dados obrigatórios
    public function __construct(
        string $nomeCompleto,
        string $email,
        string $senha,
        string $telefone,
        string $cpf,
        string $cidade
    ) {
        $this->setNomeCompleto($nomeCompleto);
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setTelefone($telefone);
        $this->setCpf($cpf);
        $this->setCidade($cidade);
        $this->dataCadastro = new DateTime();
    }

    // Setters com validações
    public function setNomeCompleto(string $nomeCompleto): void
    {
        if (empty(trim($nomeCompleto))) {
            throw new \InvalidArgumentException("Nome completo é obrigatório");
        }
        $this->nomeCompleto = $nomeCompleto;
    }

    public function setEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("Email inválido");
        }
        $this->email = $email;
    }

    public function setSenha(string $senha): void
    {
        if (strlen($senha) < 6) {
            throw new \InvalidArgumentException("Senha deve ter pelo menos 6 caracteres");
        }
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function setDataCadastro(DateTime $dataCadastro): void
    {
        $this->dataCadastro = $dataCadastro;
    }

    public function setTelefone(string $telefone): void
    {
        $telefone = preg_replace('/[^0-9]/', '', $telefone);
        if (strlen($telefone) < 10) {
            throw new \InvalidArgumentException("Telefone inválido");
        }
        $this->telefone = $telefone;
    }

    public function setCpf(string $cpf): void
    {
        $cpf = preg_replace('/[^0-9]/', '', $cpf);
        if (strlen($cpf) !== 11) {
            throw new \InvalidArgumentException("CPF deve ter 11 dígitos");
        }
        if (!$this->validarCpf($cpf)) {
            throw new \InvalidArgumentException("CPF inválido");
        }
        $this->cpf = $cpf;
    }

    public function setCidade(string $cidade): void
    {
        if (empty(trim($cidade))) {
            throw new \InvalidArgumentException("Cidade é obrigatória");
        }
        $this->cidade = $cidade;
    }

    // Getters
    public function getId(): int
    {
        return $this->id;
    }

    public function getNomeCompleto(): string
    {
        return $this->nomeCompleto;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function getDataCadastro(): DateTime
    {
        return $this->dataCadastro;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    // Método para verificar se a senha está correta
    public function verificarSenha(string $senha): bool
    {
        return password_verify($senha, $this->senha);
    }

    // Métodos de persistência
    public function save(): void
    {
        $em = Database::getEntityManager();
        $em->persist($this);
        $em->flush();
    }

    public static function findAll(): array
    {
        $em = Database::getEntityManager();
        $repository = $em->getRepository(self::class);
        return $repository->findAll();
    }

    public static function findByEmail(string $email): ?PassageiroCadastrado
    {
        $em = Database::getEntityManager();
        return $em->getRepository(self::class)->findOneBy(['email' => $email]);
    }

    public static function findByCpf(string $cpf): ?PassageiroCadastrado
    {
        $cpf = preg_replace('/[^0-9]/', '', $cpf);
        $em = Database::getEntityManager();
        return $em->getRepository(self::class)->findOneBy(['cpf' => $cpf]);
    }

    // Método para validar CPF
    private function validarCpf(string $cpf): bool
    {
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }
}
