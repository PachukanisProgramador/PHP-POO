<?php

require_once("Endereco.php");

class Endereco{
    private string $logradouro;
    private string $numero;
    private string $complemento;
    private string $bairro;
    private string $cidade;
    private string $estado;
    private string $pais;
    private string $cep;
    private string $uf;

    public function __construct(string $logradouro, string $numero, string $complemento, string $bairro, string $cidade, string $estado, string $pais, string $cep, string $uf){

    }

    //Gets and Sets
    public function getLogradouro() : string {
        return $this->logradouro;
    }
    public function setLogradouro(string $logradouro) : void {
        $this->logradouro = $logradouro;
    }
    public function getNumero() : string {
        return $this->numero;
    }
    public function setNumero(string $numero) : void {
        $this->numero = $numero;
    }
    public function getComplemento() : string {
        return $this->complemento;
    }
    public function setComplemento(string $complemento) : void {
        $this->complemento = $complemento;
    }
    public function getBairro() : string {
        return $this->bairro;
    }
    public function setBairro(string $bairro) : void {
        $this->bairro = $bairro;
    }
    public function getCidade() : string {
        return $this->cidade;
    }
    public function setCidade(string $cidade) : void {
        $this->cidade = $cidade;
    }
    public function getEstado() : string {
        return $this->estado;
    }
    public function setEstado(string $estado) : void {
        $this->estado = $estado;
    }
    public function getPais() : string {
        return $this->pais;
    }
    public function setPais(string $pais) : void {
        $this->pais = $pais;
    }
    public function getCep() : string {
        return $this->cep;
    }
    public function setCep(string $cep) : void {
        $this->cep = $cep;
    }
    public function getUf() : string {
        return $this->uf;
    }
    public function setUf(string $uf) : void {
        $this->uf = $uf;
    }
}

?>
