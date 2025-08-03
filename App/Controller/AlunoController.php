<?php

namespace App\Controller;

use App\Model\Aluno;

final class AlunoController
{
    public static function cadastro() : void
    {
        $model = new Aluno();
        //$model->id = 1;
        $model->ra = 223;
        $model->curso = 'C++';
        $model->nome = 'José';
        $model->save();

        echo "Aluno inserido";
    }

    public static function listar() : void
    {
        echo 'Listagem de alunos';
        $aluno = new Aluno();
        $lista = $aluno->getAllRows();

        var_dump($lista);
    }
}