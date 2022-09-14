# 1. Elabore uma estrutura para representar um produto (código, nome, preço). Aplique 10% de aumento no preço do produto e apresente.

class TipoProduto:
    codigo = 0
    nome = ''
    preco = 0.0

def main():
    p1 = TipoProduto()
    p1.codigo = int ( input('Cadastre o código do produto: '))
    p1.nome = input('C1dastre o nome do produto: ')
    p1.preco = float ( input('Cadastre o preço do produto R$ '))
    print(f'Código: {p1.codigo} \tNome: {p1.nome} \tPreço R$ {p1.preco:.2f}')
    p1.preco = p1.preco + p1.preco * 10 / 100
    print(f'Código: {p1.codigo} \tNome: {p1.nome} \tPreço R$ {p1.preco:.2f}')
    p2 = TipoProduto()
    p2.codigo = int ( input('Cadastre o código do produto: '))
    p2.nome = input('C1dastre o nome do produto: ')
    p2.preco = float ( input('Cadastre o preço do produto R$ '))
    print(f'Código: {p2.codigo} \tNome: {p2.nome} \tPreço R$ {p2.preco:.2f}')
    p2.preco = p2.preco + p2.preco * 10 / 100
    print(f'Código: {p2.codigo} \tNome: {p2.nome} \tPreço R$ {p2.preco:.2f}')

main()