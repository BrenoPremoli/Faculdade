<?php

class Invoice
{
    private int $itemFaturado;
    private string $descricao;
    private int $quantidade;
    private float $preco;
    public function __construct($itemFaturado, $descricao,$quantidade, $preco) {
        $this->itemFaturado = $itemFaturado;
        $this->descricao = $descricao;
        $this->setQuantidade($quantidade);
        $this->setPreco($preco);
    }
    public function getItem(){
        return $this->itemFaturado;
    }
    public function setItem(int $itemFaturado){
        $this->itemFaturado = $itemFaturado;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao(string $descricao){
        $this->descricao = $descricao;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function setQuantidade(int $quantidade){
        if ($quantidade <= 0)
        {
            $quantidade = 0;
        }
        $this->quantidade = $quantidade;
    }
    public function getPreco(){
        return $this->quantidade;
    }
    public function setPreco(float $preco){
        if ($preco <= 0.00)
        {
            $preco = 0.0;
        }
        $this->preco = $preco;
    }
    public function getInvoiceAmount()
    {
        echo "Fatura: " . $this->quantidade * $this->preco;
    }

    public function MostrarDados()
    {
        echo "Item Faturado: " . $this->itemFaturado;
        echo "<br>";
        echo "Descrição: " . $this->descricao;
        echo "<br>";
        echo "Quantidade: " . $this->quantidade;
        echo "<br>";
        echo "Preço: " . $this->preco;
        echo "<br>";
    }
    
}

$f1 = new Invoice(1, "Celular", 6, 500.00);
$f1->MostrarDados();
$f1->getInvoiceAmount();

?>