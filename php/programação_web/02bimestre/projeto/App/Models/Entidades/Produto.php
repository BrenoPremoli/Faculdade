<?php

namespace App;

use App\Controllers\ProtutoController;

class Produto {
    private int $id;
    private string $nome;
    private float $preco;
    private int $quantidade;
    private string $descricao;
    private string $imagem;
    private int $idFornecedor;
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

    public function getPreco() : float
    {
        return $this->preco;
    }

    public function setPreco(float $preco) : void
    {
        $this->preco = $preco;
    }
    public function getQuantidade() : int
    {
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade) : void
    {
        $this->quantidade = $quantidade;
    }
    public function getDescricao() : string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao) : void
    {
        $this->descricao = $descricao;
    }
    
    public function getImagem() : string
    {
        return $this->imagem;
    }

    public function setImagem(string $imagem) : void
    {
        $this->imagem = $imagem;
    }
    public function getIdFornecedor() : int
    {
        return $this->idFornecedor;
    }

    public function setIdFornecedor(int $idFornecedor) : void
    {
        $this->idFornecedor = $idFornecedor;
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