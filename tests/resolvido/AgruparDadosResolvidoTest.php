<?php

require_once './src/Exercicios/Resolvido/CondicoesResolvido.php';

use PHPUnit\Framework\TestCase;
use TreinamentoRD\ExerciciosLogicaPhp\Exercicios\Cliente;
use TreinamentoRD\ExerciciosLogicaPhp\Exercicios\Resolvido\CondicoesResolvido;
use TreinamentoRD\ExerciciosLogicaPhp\Exercicios\Resolvido\AgruparDadosResolvido;
use TreinamentoRD\ExerciciosLogicaPhp\Exercicios\NotaFiscal;

final class AgruparDadosResolvidoTest extends TestCase
{

    private AgruparDadosResolvido $agruparDadosResolvido;
    private $clientes, $notas;
    private $joao, $antonio;
    
    protected function setUp()
    {
        parent::setUp();
        $this->agruparDadosResolvido = new AgruparDadosResolvido();
        
        $this->joao = new Cliente(1, "João", new \DateTimeImmutable());
        $maria = new Cliente(2, "Maria", new \DateTimeImmutable());
        $jose = new Cliente(3, "José", new \DateTimeImmutable());
        $this->antonio = new Cliente(4, "Antonio", new \DateTimeImmutable());
        
        $clientes[] = $this->joao;
        $clientes[] = $maria;
        $clientes[] = $jose;
        $clientes[] = $this->antonio;
        
        $this->notas[] = new NotaFiscal(1, $this->joao, 100);
        $this->notas[] = new NotaFiscal(2, $this->joao, 150);
        $this->notas[] = new NotaFiscal(3, $maria, 50);
        $this->notas[] = new NotaFiscal(4, $jose, 20);
        $this->notas[] = new NotaFiscal(5, $this->joao, 25);
        $this->notas[] = new NotaFiscal(6, $maria, 500);
    }

    public function testSomarValoresNotas(){
        $this->assertEquals(275, $this->agruparDadosResolvido->somarValorTotalNotas($this->notas, $this->joao));
    }
    
    
    
}

