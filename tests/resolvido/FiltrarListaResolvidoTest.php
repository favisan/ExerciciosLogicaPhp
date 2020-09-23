<?php

require_once './src/Exercicios/Resolvido/FiltrarListaResolvido.php';

use PHPUnit\Framework\TestCase;
use TreinamentoRD\ExerciciosLogicaPhp\Exercicios\Cliente;
use TreinamentoRD\ExerciciosLogicaPhp\Exercicios\Resolvido\FiltrarListaResolvido;

final class FiltrarListaResolvidoTest extends TestCase
{

    private FiltrarListaResolvido $filtrarListaResolvido;
    private array $clientes;
    
    protected function setUp()
    {
        parent::setUp();
        $this->filtrarListaResolvido = new FiltrarListaResolvido();
        
        $this->clientes[] = new Cliente(1, "João", new DateTimeImmutable('2000-10-01'));
        $this->clientes[] = new Cliente(2, "Maria", new DateTimeImmutable('1984-01-01'));
        $this->clientes[] = new Cliente(3, "José", new DateTimeImmutable('2020-09-15'));
        $this->clientes[] = new Cliente(4, "Antonio", new DateTimeImmutable('1995-05-06'));
    }

    public function testFiltrarNumerosImpares()
    {
        $this->assertEquals(5, count(
                $this->filtrarListaResolvido->filtrarNumerosImpares(array(1,2,3,4,5,6,7,9))));
    }
    
    public function testRemoverDuplicados()
    {
        $this->assertEquals(4, count(
                $this->filtrarListaResolvido->removerDuplicados(array('fusca', 'brasilia', 'opala', 'chevette', 'fusca'))
            ));
    }
    
    public function testFiltrarClientesPorPeriodoNascimento(){
        $this->assertEquals(2, 
            count(
                   $this->filtrarListaResolvido->filtrarClientePorPeriodoNascimento($this->clientes, 
                       new DateTimeImmutable('2000-10-01'), 
                       new DateTimeImmutable('2020-09-15')
                       )
                )
            );
    }
    
    public function testFiltrarClientePorNome(){
        $this->assertEquals(2,
            count(
                $this->filtrarListaResolvido->filtrarClientePorNome($this->clientes,
                    'jo')  
                )
            );
    }
    
    public function testBuscarClientePorId(){
        $this->assertEquals("João", $this->filtrarListaResolvido->buscarClientePorId($this->clientes, 1)->getNome());
    }
    
}

