<?php

namespace App\Models;

class Usuario
{
    public static function listar()
    {
        return [
            ['nome' => 'João', 'cargo' => 'Desenvolvedor', 'escolaridade' => 'Superior'],
            ['nome' => 'Maria', 'cargo' => 'Designer', 'escolaridade' => 'Técnico'],
            // Adicione mais registros para ter 10 ao todo.
        ];
    }
}
