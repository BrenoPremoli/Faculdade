# 3. Elabore uma estrutura para representar um produto (código, nome, preço). Crie uma função para cadastrar 5 produtos. Crie outra função para aplicar 10% de aumento no preço do produto e apresente, por meio de outra função, todos os dados do produtos cadastrados, após o aumento. Construa uma função para cada opção do menu a seguir:
# Menu do Sistema
# Cadastrar
# Reajustar
# Visualizar
# Sair
# Qual opção deseja?

#OK 1
class produto: 
    codigo = 0
    nome = ''
    preco = 0.0

def menu():
    print('1. Cadastrar')
    print('2. Reajustar')
    print('3. Visualizar')
    print('4. Sair')
    print()
    opcao = int(input('Qual opção deseja? '))
    return opcao

def cadastrar(vet):
    for i in range(2): # for i in range(5)
        p = produto()
        p.codigo = int(input('Digite o código do produto: '))
        p.nome = input('Digite o nome do produto: ')
        p.preco = float(input('Digite o preço do produto: R$ '))
        vet.append(p)
        print()
    return vet

def aumentar(vet):
    if len(vet) > 0:
        for i in range(len(vet)):
            vet[i].preco = vet[i].preco + (vet[i].preco * (10 / 100))
        print('Reajuste realizado com sucesso.\n')
    else:
        print('Não há produtos cadastrados.\n')
    return vet

def apresentar(vet):
    if len(vet) > 0:
        for i in range(len(vet)):
            print('Código do produto: {} \tNome do produto: {} \tPreço do produto: R$ {:.2f}'.format(vet[i].codigo,vet[i].nome,vet[i].preco))
        print()
    else:
        print('Não há produtos cadastrados.\n')

def main():
    vetor_produto = []
    x = menu() #com "break"
    while x > 0:
        print()
        if x == 1: 
            vetor_produto = cadastrar(vetor_produto)
        elif x == 2:
            vetor_produto = aumentar(vetor_produto)
        elif x == 3:
            apresentar(vetor_produto)
        elif x == 4:
            print('Saindo...')
            break
        else:
            print('Comando Inválido. Tente Novamente.\n')
        x = menu()

main()