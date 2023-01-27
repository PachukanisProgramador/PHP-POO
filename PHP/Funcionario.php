<?php

require_once("Endereco.php");

class Funcionario extends Pessoa{
    private string $matricula;
    private string $cargo;
    private float $salario;

    public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco, string $matricula, string $cargo, string $salario){
        parent::__construct(string $cpf, string $nome, string $telefone, Endereco $endereco);

        $this->matricula = $matricula;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
    public function getMatricula() : string {
        return $this->matricula;
    }
    public function setMatricula(string $matricula) : void {
        $this->matricula = $matricula;
    }
    public function getCargo() : string {
        return $this->cargo;
    }
    public function setCargo(string $cargo) : void {
        $this->cargo = $cargo;
    }
    public function getSalario() : float {
        return $this->salario;
    }
    public function setSalario(string $salario) : void {
        $this->salario = $salario;
    }
}

?>