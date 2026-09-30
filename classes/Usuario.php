<?php 
    abstract class Usuario {
        // Modifica o acesso para ser modificado apenas em sua própria classe
        protected string $nome;
        protected string $email;

        // Declara o construtor da classe
        public function __construct(string $nome, string $email) {
            
            // recebe os valores
            $this->nome = $nome;
            $this->email = $email;
        }

        // exibe os valores
        public function getNome(): string {return $this->nome};
        public function getEmail(): string {return $this->email};

        abstract public function exibirInfo(): string;
    }
#versão final
?>