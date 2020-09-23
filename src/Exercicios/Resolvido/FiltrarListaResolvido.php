<?php

namespace TreinamentoRD\ExerciciosLogicaPhp\Exercicios\Resolvido;

use TreinamentoRD\ExerciciosLogicaPhp\Exercicios\Cliente;

class FiltrarListaResolvido
{

    /*
     * Filtre a lista recebida e retorne somente os números impares
     */
    public function filtrarNumerosImpares(array $numeros): array
    {
        return array_filter($numeros, fn ($n) => $n & 1);
    }

    /*
     * Filtre a lista de strings recebida removendo os itens duplicados.
     */
    public function removerDuplicados(array $valores): array
    {
        return array_unique($valores);
    }

    /*
     * Filtre os clientes que estão no range da data de nascimento informado nos parametros dtNascimentoDe e dtNascimentoAte
     */
    public function filtrarClientePorPeriodoNascimento(array $clientes, \DateTimeImmutable $dtNascimentoDe, \DateTimeImmutable $dtNascimentoAte): array
    {
        return array_filter($clientes, fn ($c) => $c->getDtNascimento() >= $dtNascimentoDe && $c->getDtNascimento() <= $dtNascimentoAte);
    }

    /*
     * Filtre os clientes que começam com o nome informado no segundo parametro. Ignorar maisculo/minusculo na regra.
     */
    public function filtrarClientePorNome(array $clientes, $nome): array
    {
        return array_filter($clientes, fn($c) => substr(mb_strtolower($c->getNome()), 0, strlen($nome)) === mb_strtolower($nome));
    }

    /*
     * Dado uma lista de clientes onde o campo id do objeto Cliente é unico,
     * retorne o objeto Cliente onde o id seja igual ao segundo parametro informado.
     */
    public function buscarClientePorId(array $clientes, $id): Cliente
    {
        return array_filter($clientes, fn($c) => $c->getId() === $id)[0];
    }
}