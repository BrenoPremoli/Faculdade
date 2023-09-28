<?php

namespace App;

use App\Controllers\UsuarioController;

class Usuario {
    private int $id;
    private string $nome;
    private string $email;
    private string $username;
    private string $password;
    private string $tipo;
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

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }

    public function getUsername() : string
    {
        return $this->username;
    }
    
    public function setUsername(string $username) : void
    {
        $this->username = $username;
    }

    public function getPassword() : string
    {
        return $this->password;
    }
    
    public function setPassword(string $password) : void
    {
        $this->password = $password;
    }

    public function getTipo() : string
    {
        return $this->tipo;
    }
    
    public function setTipo(string $tipo) : void
    {
        $this->tipo = $tipo;
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