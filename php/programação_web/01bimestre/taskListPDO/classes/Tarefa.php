<?php

class Tarefa {
    private int $id;
    private string $titulo;
    private string $descricao;
    private string $atividades;
    private int $statusId;
    private string $prioridade;
    private string $dataInicio;
    private string $dataConclusao;
    private string $dataCadastro;

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function getTitulo() : string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo) : void
    {
        $this->titulo = $titulo;
    }

    public function getDescricao() : string
    {
        return $this->descricao;
    }
    
    public function setDescricao(string $descricao) : void
    {
        $this->descricao = $descricao;
    }

    public function getAtividades() : string
    {
        return $this->atividades;
    }
    
    public function setAtividades(string $atividades) : void
    {
        $this->atividades = $atividades;
    }

    public function getStatusId() : int
    {
        return $this->statusId;
    }
    
    public function setStatusId(int $statusId) : void
    {
        $this->statusId = $statusId;
    }

    public function getPrioridade() : string
    {
        return $this->prioridade;
    }
    
    public function setPrioridade(string $prioridade) : void
    {
        $this->prioridade = $prioridade;
    }

    public function getDataInicio() : string
    {
        return $this->dataInicio;
    }
    
    public function setDataInicio(string $dataInicio) : void
    {
        $this->dataInicio = $dataInicio;
    }

    public function getDataConclusao() : string
    {
        return $this->dataConclusao;
    }
    
    public function setDataConclusao(string $dataConclusao) : void
    {
        $this->dataConclusao = $dataConclusao;
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