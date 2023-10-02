<?php

Class Veiculo {
    private int $id;
    private string $marca;
    private string $modelo;
    private string $cor;
    private int $anoFabricacao;
    private int $anoModelo;
    private string $combustivel;
    private float $preco;
    private string $detalhes;
    private string $foto;
    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id) : void
    {
        $this->id = $id;
    }

        public function getMarca() : string
    {
        return $this->marca;
    }

    public function setMarca(string $marca) : void
    {
        $this->marca = $marca;
    }

    public function getModelo() : string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo) : void
    {
        $this->modelo = $modelo;
    }
    public function getFoto() : string
    {
        return $this->foto;
    }

    public function setFoto(string $foto) : void
    {
        $this->foto = $foto;
    }

    public function getCor(): string
    {
    return $this->cor;
    }

    public function setCor(string $cor): void
    {
        $this->cor = $cor;
    }

    public function getAnoFabricacao(): int
    {
        return $this->anoFabricacao;
    }

    public function setAnoFabricacao(int $anoFabricacao): void
    {
        $this->anoFabricacao = $anoFabricacao;
    }

    public function getAnoModelo(): int
    {
        return $this->anoModelo;
    }

    public function setAnoModelo(int $anoModelo): void
    {
        $this->anoModelo = $anoModelo;
    }

    public function getCombustivel(): string
    {
        return $this->combustivel;
    }

    public function setCombustivel(string $combustivel): void
    {
        $this->combustivel = $combustivel;
    }
    public function getDetalhes(): string
    {
        return $this->detalhes;
    }

    public function setDetalhes(string $detalhes): void
    {
        $this->detalhes = $detalhes;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }
}
?>