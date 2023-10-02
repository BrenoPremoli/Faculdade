<?php

class vendedor 
{
    private int $id;
    private string $nome;
    private string $email;
    private int $telefone;

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

    public function getTelefone() : int
    {
        return $this->telefone;
    }

    public function setTelefone(int $telefone) : void
    {
        $this->telefone = $telefone;
    }
}