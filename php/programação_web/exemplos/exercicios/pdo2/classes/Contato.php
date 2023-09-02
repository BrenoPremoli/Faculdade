<?php

class Contato{
    private int $id;
    private string $nome;
    private string $email;
    private string $datanasc;
    private string $created_at;

    public function getId() : int {
        return $this->id;
    }
    public function setId(int $id) : void {
        $this->id = $id;
    }
    public function getNome() : string {
        return $this->nome;
    }
    public function setNome(string $nome) : void {
        $this->nome = $nome;
    }
    public function getEmail() : string {
        return $this->email;
    }
    public function setEmail(string $email) : void {
        $this->email = $email;
    }
    public function getDataNasc() : string{
        return $this->datanasc;
    }
    public function setDataNasc(string $datanasc) : void{
        $this->datanasc = $datanasc;
    }
    public function getCreatedAt() : string{
        return $this->created_at;
    }
    public function setCreatedAt(string $created_at) : void{
        $this->created_at = $created_at;
    }
}

?>