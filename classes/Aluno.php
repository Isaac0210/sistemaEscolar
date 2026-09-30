<?php

// Aluno.php_check_syntax

require_once "Usuario.php";

class Aluno extends Usuario {
    private string $matricula;

    public function __construct($nome, $email, $matricula){
    parent::__construct($nome, $email);
    $this->matricula = $matricula;
    }

    public function exibirInfo() string {
        return "Aluno: {this->nome}  | Matricula: {$this->matricula}";
    }
}

//Professor.php e Funcionario.php:
//repetir a mesma ideia usando $disciplina e $cargo
// e implementando exibirinfo().