<?php


namespace App\Controller;
use App\Model\Aluno;

class AlunoController
{
    public static function cadastro()
    {
        echo "Mostrar formulário";
    }

    public static function listar()
    {
        echo "Listagem dos Alunos";
        $aluno = new Aluno();
        $aluno->getAllRows();
    }
}