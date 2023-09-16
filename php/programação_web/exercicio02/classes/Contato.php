<?php

class Contato {
    private int $id;
    private string $nome;
    private string $email;
    private string $mensagem;
    private string $tipo;
    private string $data;
    private bool $lida;

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

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }

    public function getMensagem() : string
    {
        return $this->mensagem;
    }
    
    public function setMensagem(string $mensagem) : void
    {
        $this->mensagem = $mensagem;
    }

    public function getTipo() : string
    {
        return $this->tipo;
    }
    
    public function setTipo(string $tipo) : void
    {
        $this->tipo = $tipo;
    }

    public function getData() : string
    {
        return $this->data;
    }
    
    public function setData(string $data) : void
    {
        $this->data = $data;
    }

    public function getLida() : bool
    {
        return $this->lida;
    }
    
    public function setLida(bool $lida) : void
    {
        $this->lida = $lida;
    }
}