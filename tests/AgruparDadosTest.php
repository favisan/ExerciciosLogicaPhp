<?php

require_once './src/Exercicios/Condicoes.php';

use PHPUnit\Framework\TestCase;
use TreinamentoRD\ExerciciosLogicaPhp\Exercicios\Cliente;
use TreinamentoRD\ExerciciosLogicaPhp\Exercicios\AgruparDados;
use TreinamentoRD\ExerciciosLogicaPhp\Exercicios\NotaFiscal;

final class AgruparDadosTest extends TestCase
{

    private AgruparDados $agruparDados;
    private $clientes, $notas;
    private $joao, $antonio, $maria;
    
    protected function setUp()
    {
        parent::setUp();
        $this->agruparDados = new AgruparDados();
        
        $this->joao = new Cliente(1, "João", new \DateTimeImmutable());
        $this->maria = new Cliente(2, "Maria", new \DateTimeImmutable());
        $jose = new Cliente(3, "José", new \DateTimeImmutable());
        $this->antonio = new Cliente(4, "Antonio", new \DateTimeImmutable());
        
        $clientes[] = $this->joao;
        $clientes[] = $this->maria;
        $clientes[] = $jose;
        $clientes[] = $this->antonio;
        
        $this->notas[] = new NotaFiscal(1, $this->joao, 100);
        $this->notas[] = new NotaFiscal(2, $this->joao, 150);
        $this->notas[] = new NotaFiscal(3, $this->maria, 50);
        $this->notas[] = new NotaFiscal(4, $jose, 20);
        $this->notas[] = new NotaFiscal(5, $this->joao, 25);
        $this->notas[] = new NotaFiscal(6, $this->maria, 500);
    }

    public function testSomarValoresNotas(){
        $this->assertEquals(275, $this->agruparDados->somarValorTotalNotas($this->notas, $this->joao));
        $this->assertEquals(550, $this->agruparDados->somarValorTotalNotas($this->notas, $this->maria));
    }
    
}

