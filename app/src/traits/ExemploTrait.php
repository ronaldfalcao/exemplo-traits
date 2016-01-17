<?php

/**
 * Created by PhpStorm.
 * User: Ronald B. Falcão
 * Date: 16/01/2016
 * Time: 10:32
 */
trait ExemploTrait
{
    public function mensagemTraitOla($nomePessoa){
        echo "<h1>Mensagem enviada pela chamada da trait ExemploTrait com a função mensagemTraitOla()</h1>".'<br/>';
        echo "Olá <i>".$nomePessoa.'</i>. Bem vindo ao nosso teste de traits!'.'<br/>';
    }
    
}