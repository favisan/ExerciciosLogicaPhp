<?php
namespace TreinamentoRD\ExerciciosLogicaPhp\Exercicios\Resolvido;

class CondicoesResolvido
{
    
    /*
     Devolva true se o numero informado existe na lista. Caso contrario devolva false.
     */
    public function verificarNumero(array $numeros, $numero): bool{
        return in_array($numero, $numeros);
    }
    
    /*
     Devolva o maior numero encontrado na lista. Caso a lista esteja vazia devolva -1.
     */
    public function obterMaiorNumero(array $numeros) : int{
        return max($numeros);
    }
    
    /*
     Escreva um método que verifique se a senha informada é uma senha válida considerando as regras:
     -> quantidade mínima de caracteres: 8: Retornar string "Senha deve ter ao menos 8 caracteres"
     -> conter ao menos uma letra, um número e um caractere especial
     -> Uma das letras deve ser maiuscula.
     */
    public function validarSenha(string $senha) : bool{
        if(strlen($senha) < 8)
            throw new \Exception("Senha deve ter ao menos 8 caracteres");

        $letrasMaiusculasPattern = preg_match('@[A-Z]@', $senha);
        $letrasPattern = preg_match('@[A-Za-z]@', $senha);
        $numerosPattern = preg_match('@[0-9]@', $senha);
        $especialPattern = preg_match('@[^a-zA-Z0-9 ]@', $senha);
            
        if (!$letrasPattern)
           throw new \Exception("Senha deve ter ao menos 1 letra");
                
        if (!$letrasMaiusculasPattern)
            throw new \Exception("Senha deve ter ao menos 1 letra maiuscula");
                    
        if (!$numerosPattern)
            throw new \Exception("Senha deve ter ao menos 1 número");
                        
        if (!$especialPattern)
            throw new \Exception("Senha deve ter ao menos 1 caractere especial");
                            
        return true;
    }
}

