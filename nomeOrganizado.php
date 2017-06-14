<?php
    /*
    *Autor: Davyson Natanael Sindeaux de Oliveira
    *Data de Criação: 14/06/2017
    */

    //Variável com o nome completo.
    $nome = "Davyson nataNAel sindeauX DE olivEira";

    echo "Nome digitado pelo usuário: $nome";
    echo "<br><br>";

    //Função criada para organizar o nome nos padrões de escrita.
    function nomeOrganizado ($nome) {
        //Retira os espaços no inicio e no fim do nome.
        $nome = trim($nome);
        
        //Transforma o nome em minúsculo.
        $nome = mb_strtolower($nome);
        
        //Divide o nome em um array, com base nos espaços.
        $nome = explode(" ", $nome);
        
        //Conta o número de itens(partes do nome) tem no array.
        $contador = count($nome);
        
        //Variável que receberá os arrays para formar o nome completo.        
        $nomeOrganizado = NULL;
        
        //Faz uma verificação palavra por palavra.
        for ($i = 0; $i <= $contador-1; $i++) {
            //Conta o número de caracteres da palavra(parte do nome).
            $contaLetras = mb_strlen($nome[$i]);
            
            //Verifica se a palavra(parte do nome) corresponde os requisitos para ter sua primeira letra transformada para maiúsculo.
            if ($contaLetras > 3) {
                $nome[$i] = ucfirst($nome[$i]);
            } else { //Se não atender aos requisitos, será transformada em minúsculo
                $nome[$i] = mb_strtolower($nome[$i]);
            }
            
            //Inserindo os itens do array já transformados na variável.
            $nomeOrganizado = $nomeOrganizado." ".$nome[$i];
        }
        
        //Retorna o nome completo.
        return $nomeOrganizado;
    }

    //Variável que receberá o retorno da função. É preciso enviar um parâmetro(nome a ser modificado).
    $nomeAposFuncao = nomeOrganizado($nome);

    echo "Nome após ser tratado pela função: $nomeAposFuncao<br>";
?>