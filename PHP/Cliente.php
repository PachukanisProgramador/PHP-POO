<?php

class Cliente extends Pessoa{

    private float $taxa;

    public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco, float $taxa){
        parent::__construct(string $cpf, string $nome, string $telefone, Endereco $endereco);
        $this->taxa = $taxa;
    }

    //Metodo get set
    public function getTaxa() : float {
        return $this->taxa;
    }
    public function setTaxa(float $taxa) : void {
        $this->taxa = $taxa;
    }
}//Fim do Expediente

?>