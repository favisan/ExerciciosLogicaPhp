<?php
namespace TreinamentoRD\ExerciciosLogicaPhp\Exercicios;

class Cliente
{
    private $id;
    
    private $nome;
    
    private $sobreNome;
    
    private \DateTimeImmutable $dtNascimento;
    
    private $email;
    
    public function __construct($id, $nome, \DateTimeImmutable $dtNascimento)
    {
       $this->id = $id;
       $this->nome = $nome;
       $this->dtNascimento = $dtNascimento;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSobreNome()
    {
        return $this->sobreNome;
    }

    public function getDtNascimento()
    {
        return $this->dtNascimento;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

