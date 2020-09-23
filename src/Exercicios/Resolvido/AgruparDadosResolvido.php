<?php
namespace TreinamentoRD\ExerciciosLogicaPhp\Exercicios\Resolvido;

class AgruparDadosResolvido
{
    /*
     Dado uma lista de notas fiscais,
     retorne o valor total das notas de um determinado cliente informado no segundo parametro.
     */
    public function somarValorTotalNotas(array $notas, $cliente) : float{
        $total = 0;
        foreach($notas as $nota){
            if($nota->getCliente()->getId() == $cliente->getId())
                $total += $nota->getValor();
        }
        
        return $total;
    }    
    
}

