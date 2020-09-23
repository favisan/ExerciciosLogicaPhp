<?php

require_once './src/Exercicios/Condicoes.php';

use PHPUnit\Framework\TestCase;
use TreinamentoRD\ExerciciosLogicaPhp\Exercicios\Cliente;
use TreinamentoRD\ExerciciosLogicaPhp\Exercicios\Condicoes;

final class CondicoesTest extends TestCase
{

    private Condicoes $condicoes;
    
    protected function setUp()
    {
        parent::setUp();
        $this->condicoes = new Condicoes();
        
    }

    public function testVerificarNumeroSucesso(){
        $this->assertEquals(true, $this->condicoes->verificarNumero(array(1,2,3,4,5), 3));
    }
    
    public function testVerificarNumeroErro(){
        $this->assertEquals(false, $this->condicoes->verificarNumero(array(1,2,3,4,5), 6));
    }
    
    public function testObterMaiorNumero(){
        $this->assertEquals(10, $this->condicoes->obterMaiorNumero(array(1,5,10,4,7)));
    }
    
    public function testValidaSenhaSucesso() {
        $this->assertEquals(true, $this->condicoes->validarSenha("Fabio12."));
    }
    
    public function testValidaSenhaMenor8Caracteres() {
        $this->validarExcecoesSenha("Fabio", "Senha deve ter ao menos 8 caracteres");
    }
    
    public function testValidaSenhaSemLetra() {
        $this->validarExcecoesSenha("12345678.", "Senha deve ter ao menos 1 letra");
    }
    
    public function testValidaSenhaSemNumero() {
        $this->validarExcecoesSenha("FabioVieira#", "Senha deve ter ao menos 1 número");
    }
    
    public function testValidaSenhaSemLetraMaiuscula() {
        $this->validarExcecoesSenha("fabiovieira1#", "Senha deve ter ao menos 1 letra maiuscula");
    }
    
    public function testValidaSenhaSemCaractereEspecial() {
        $this->validarExcecoesSenha("FabioVieira1", "Senha deve ter ao menos 1 caractere especial");
    }
    
    private function validarExcecoesSenha(string $senha, string $mensagem){
        try {
            $this->condicoes->validarSenha($senha);
        }catch(Exception $e){
            $this->assertEquals($e->getMessage(), $mensagem);
        }        
//         $this->expectException(\Exception::class);
//         $this->expectExceptionMessage = $mensagem;
    }
}

