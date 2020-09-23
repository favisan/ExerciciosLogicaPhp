<?php

require_once './src/Exercicios/FiltrarLista.php';

use PHPUnit\Framework\TestCase;
use TreinamentoRD\ExerciciosLogicaPhp\Exercicios\Cliente;
use TreinamentoRD\ExerciciosLogicaPhp\Exercicios\FiltrarLista;

final class FiltrarListaTest extends TestCase
{

    private FiltrarLista $filtrarLista;
    private array $clientes;
    
    protected function setUp()
    {
        parent::setUp();
        $this->filtrarLista = new FiltrarLista();
        
        $this->clientes[] = new Cliente(1, "João", new DateTimeImmutable('2000-10-01'));
        $this->clientes[] = new Cliente(2, "Maria", new DateTimeImmutable('1984-01-01'));
        $this->clientes[] = new Cliente(3, "José", new DateTimeImmutable('2020-09-15'));
        $this->clientes[] = new Cliente(4, "Antonio", new DateTimeImmutable('1995-05-06'));
    }

    public function testFiltrarNumerosImpares()
    {
        $this->assertEquals(5, count(
                $this->filtrarLista->filtrarNumerosImpares(array(1,2,3,4,5,6,7,9))));
    }
    
    public function testRemoverDuplicados()
    {
        $this->assertEquals(4, count(
            $this->filtrarLista->removerDuplicados(array('fusca', 'brasilia', 'opala', 'chevette', 'fusca'))
            ));
    }
    
    public function testFiltrarClientesPorPeriodoNascimento(){
        $this->assertEquals(2, 
            count(
                $this->filtrarLista->filtrarClientePorPeriodoNascimento($this->clientes, 
                       new DateTimeImmutable('2000-10-01'), 
                       new DateTimeImmutable('2020-09-15')
                       )
                )
            );
    }
    
    public function testFiltrarClientePorNome(){
        $this->assertEquals(2,
            count(
                $this->filtrarLista->filtrarClientePorNome($this->clientes,
                    'jo')  
                )
            );
    }
    
    public function testBuscarClientePorId(){
        $this->assertEquals("João", $this->filtrarLista->buscarClientePorId($this->clientes, 1)->getNome());
    }
    
}

