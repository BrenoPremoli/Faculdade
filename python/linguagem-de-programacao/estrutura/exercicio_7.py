# 7. Elabore uma estrutura para representar um Produto (código, nome, data_fabricacao, data_validade, preço). Para o membro data_fabricacao e data_validade, deve-se criar outra estrutura Data (dia, mês, ano). Utilize aninhamento de estruturas para resolver este desenvolvimento. Construa uma função para cada opçao do menu a seguir:
# Menu de opções:
# Cadastrar produtos
# Visualizar todos os dados
# Sair

class data:
    dia = 0
    mes = 0
    ano = 0

class produto:
    codigo = 0
    nome = ''
    data_fabricacao = data()
    data_validade = data()

def menu():
    print('1. Cadastrar produtos')
    print('2. Visualizar todos os dados')
    print('3. Sair')
    print()
    escolha = int(input('Escolha uma opção: '))
    return escolha

def cadastrar(vet):
    p = produto()
    p.codigo = int(input('Digite o código do produto: '))
    p.nome = input('Digite o nome do produto: ')
    p.data_fabricacao.dia = int(input('Digite o dia de fabricação: '))
    p.data_fabricacao.mes = int(input('Digite o mês de fabricação: '))
    p.data_fabricacao.ano = int(input('Digite o ano de fabricação: '))
    p.data_validade.dia = int(input('Digite o dia da validade: '))
    p.data_validade.mes = int(input('Digite o mês da validade: '))
    p.data_validade.ano = int(input('Digite o ano da validade: '))
    vet.append(p)
    print()
    return vet

def visualizar(vet):
    if len(vet) > 0:
        for i in range(len(vet)):
            print('Código do produto: {} \tNome do produto: {} \tData de fabricação: {}/{}/{} \tData de validade: {}/{}/{}\n'.format(vet[i].codigo, vet[i].nome, vet[i].data_fabricacao.dia, vet[i].data_fabricacao.mes, vet[i].data_fabricacao.ano, vet[i].data_validade.dia, vet[i].data_validade.mes, vet[i].data_validade.ano))
    else:
        print('Sem cadastro(s) de produto(s).\n')

    
def main():
    vetor_produto = []
    x = menu()
    while x > 0:
        print()
        if x == 1:
            vetor_produto = cadastrar(vetor_produto)
        elif x == 2:
            visualizar(vetor_produto)
        elif x == 3:
            print('Saindo...')
            break
        else:
            print('Comando Inválido. Tente Novamente.\n')
        x = menu()

main()