<?php

namespace App\Controller;

use App\Model\Aluno;

final class AlunoController
{
    public static function cadastro() : void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $model = new Aluno();

            $model->Id = !empty($_POST['id']) ? $_POST['id'] : null;
            $model->Nome = $_POST['nome'];
            $model->RA = $_POST['ra'];
            $model->Curso = $_POST['curso'];
            
            $model->save();

            header('Location: /aluno');

        } else {

            $model = new Aluno();

            if (isset($_GET['id'])){

                $model = $model->getById((int) $_GET['id']);

            }

            include VIEWS . "/Aluno/form_aluno.php";

        }
        


        
    }

    public static function listar() : void
    {
        $aluno = new Aluno();
        $lista = $aluno->getAllRows();

        include VIEWS . "/Aluno/lista_aluno.php";
    }

    public static function delete()
    {
        $aluno = new Aluno();

        $aluno->delete( (int) $_GET['id'] );

        header('Location: /aluno');
    }
}