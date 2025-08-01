<?php

include 'config.php';
include 'autoload.php';

use App\Controller\AlunoController;
use App\Model\Aluno;

$oo = new AlunoController();
$oo->teste();

$m = new Aluno;
$m->teste();