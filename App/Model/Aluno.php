<?php

namespace App\Model;

use App\DAO\AlunoDAO;

class Aluno
{
    public $Id, $RA, $Curso, $Nome;

    public function save(): Aluno
    {
        return (new AlunoDAO())->save($this);
    }

    public function getById(int $Id): ?Aluno
    {
        return (new AlunoDAO())->selectById($Id);
    }

    public function getAllRows(): array
    {
        return (new AlunoDAO())->select();
    }

    public function delete(int $Id): bool
    {
        return (new AlunoDAO())->delete($Id);
    }
    
}