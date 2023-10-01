<?php

class Status {
    private int $statusId;
    private string $nome;

    public function getStatusId() : int
    {
        return $this->statusId;
    }

    public function setStatusId(int $statusId) : void
    {
        $this->statusId = $statusId;
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function setNome(string $nome) : void
    {
        $this->nome = $nome;
    }
}

?>