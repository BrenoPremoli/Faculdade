<?php

Class Curso {
    private int $id;
    private string $nome;
    private string $descricao;
    private string $imagem;
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