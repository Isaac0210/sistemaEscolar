<?php

require_once "Usuario.php";

class Professor extends Usuario {
    private string $disciplina;

    public function __construct($nome, $email, $disciplina) {
        parent::__construct($nome, $email);
        $this->disciplina = $disciplina;
    }

    public function exibirInfo(): string {
        return "Aluno: {$this->nome}  | Disciplina: {$this->matricula}";
    }
}

?>