<?php

require_once("Endereco.php")

class Pessoa{
    public string $cpf;
    public string $nome;
    public string $telefone;
    private Endereco $endereco;

    public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;

    }//Fim do construtor
    
    //Gets and Sets
    public function getCpf() : string {
        return $this->cpf;
    }
    public function setCpf(string $cpf) : void {
        $this->cpf = $cpf;
    }
    public function getNome() : string {
        return $this->nome;
    }
    public function setNome(string $nome) : void {
        $this->nome = $nome;
    }
    public function getTelefone() : string {
        return $this->telefone;
    }
    public function setTelefone() : void {
        $this->telefone = $telefone;
    }
}// Fim da classe 'Pessoa'

?>