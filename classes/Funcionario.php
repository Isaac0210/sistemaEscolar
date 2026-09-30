<?php

require_once "Usuario.php";

class funcionario extends Usuario {
    private string $cargo;

    public function __construct($nome, $email, $cargo) {
        parent::__construct($nome, $email);
        $this->disciplina = $cargo;
    }

    public function exibirInfo(): string {
        return "Funcionário: {$this->nome}  | Cargo: {$this->cargo} | Email: {$this->email}";
    }
}
#versão final
?>