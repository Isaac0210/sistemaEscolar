<?php

require_once "Usuario.php";

class funcionario extends Usuario {
    private string $coordenador;

    public function __construct($nome, $email, $coordenador) {
        parent::__construct($nome, $email);
        $this->disciplina = $coordenador;
    }

    public function exibirInfo(): string {
        return "Funcionário: {$this->nome}  | Cargo: {$this->coordenador} | Email: {$this->email}";
    }
}

?>