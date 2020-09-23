<?php

namespace TreinamentoRD\ExerciciosLogicaPhp\Exercicios;

use TreinamentoRD\ExerciciosLogicaPhp\Exercicios\Cliente;

class FiltrarLista
{

    /*
     * Filtre a lista recebida e retorne somente os números impares
     */
    public function filtrarNumerosImpares(array $numeros): array
    {
        //TODO
        return $numeros;
    }

    /*
     * Filtre a lista de strings recebida removendo os itens duplicados.
     */
    public function removerDuplicados(array $valores): array
    {
        //TODO
        return $valores;
    }

    /*
     * Filtre os clientes que estão no range da data de nascimento informado nos parametros dtNascimentoDe e dtNascimentoAte
     */
    public function filtrarClientePorPeriodoNascimento(array $clientes, \DateTimeImmutable $dtNascimentoDe, \DateTimeImmutable $dtNascimentoAte): array
    {
        //TODO
        return $clientes;
    }

    /*
     * Filtre os clientes que começam com o nome informado no segundo parametro. Ignorar maisculo/minusculo na regra.
     */
    public function filtrarClientePorNome(array $clientes, $nome): array
    {
        //TODO
        return $clientes;
    }

    /*
     * Dado uma lista de clientes onde o campo id do objeto Cliente é unico,
     * retorne o objeto Cliente onde o id seja igual ao segundo parametro informado.
     */
    public function buscarClientePorId(array $clientes, $id): Cliente
    {
        //TODO
        return $clientes[0];
    }
}