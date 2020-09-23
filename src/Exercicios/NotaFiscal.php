<?php
namespace TreinamentoRD\ExerciciosLogicaPhp\Exercicios;

class NotaFiscal
{
    
    private int $id;
    
    private Cliente $cliente;
    
    private float $valor;
    
    public function __construct($id, $cliente, $valor)
    {
        $this->id = $id;
        $this->cliente = $cliente;
        $this->valor = $valor;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getCliente()
    {
        return $this->cliente;
    }
    
    public function getValor()
    {
        return $this->valor;
    }
}

