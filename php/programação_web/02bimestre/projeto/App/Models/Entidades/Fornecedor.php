<?php

namespace App;

use App\Controllers\FornecedorController;

class Fornecedor {
    private int $id;
    private string $nome;
    private string $dataCadastro;

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function setNome(string $nome) : void
    {
        $this->nome = $nome;
    }

    public function getDataCadastro() : string
    {
        return $this->dataCadastro;
    }
    
    public function setDataCadastro(string $dataCadastro) : void
    {
        $this->dataCadastro = $dataCadastro;
    }
}

?>