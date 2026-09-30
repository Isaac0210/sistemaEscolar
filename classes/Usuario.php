<?php 
    abstract class Usuario {
        
        protected string $nome;
        protected string $email;
        
        public function __construct(string $nome, string $email) {
            
        }
    }
?>