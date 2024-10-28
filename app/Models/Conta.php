<?php

namespace App\Models;

class Conta
{
    public static function listar()
    {
        return [
            ['descricao' => 'Conta de Luz', 'valor' => 150.00, 'tipo' => 'A Pagar'],
            ['descricao' => 'Conta de Água', 'valor' => 75.00, 'tipo' => 'A Pagar'],
            // Adicione mais registros para ter 10 ao todo.
        ];
    }
}
