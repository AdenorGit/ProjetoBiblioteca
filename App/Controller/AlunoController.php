<?php

namespace App\Controller;

use App\Model\Aluno;

final class AlunoController
{
    public static function cadastro() : void
    {
        $model = new Aluno();
        //$model->Id = 1;
        $model->RA = 444;
        $model->Curso = 'Java';
        $model->Nome = 'João';
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