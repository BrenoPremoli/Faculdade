# 6. Elabore uma estrutura para representar um Funcionario (código, nome, endereço, salário). Para o membro endereço deve-se criar outra estrutura Endereço (logradouro, número, bairro, cidade). Utilize aninhamento de estruturas para resolver este desenvolvimento. Construa uma função para cada opçao do menu a seguir:

# Menu de opções:
# Cadastrar funcionários
# Visualizar todos os dados
# Sair

class residencia:
    logradouro = ''
    numero = 0
    bairro = ''
    cidade = ''

class funcionario:
    codigo = 0
    nome = ''
    endereco = residencia()
    salario = 0.00

def menu():
    print('Menu de opções:')
    print('1. Cadastrar funcionários')
    print('2. Visualizar todos os dados')
    print('3. Sair')
    print()
    opcao = int(input('Escolha uma opção: '))
    return opcao

def cadastrar(vet):
    f = funcionario()
    f.codigo = int(input('Digite o código do funcionário: '))
    f.nome = input('Digite o nome: ')
    f.endereco.logradouro = input('Digite o logradouro (largos, praças, ruas, jardins, parques, etc.): ')
    f.endereco.numero = int(input('Digite o número do endereço: '))
    f.endereco.bairro = input('Digite o bairro: ')
    f.endereco.cidade = input('Digite a cidade: ')
    f.salario = float(input('Digite o salário: R$ '))
    vet.append(f)
    print()
    return vet

def visualizar(vet):
    if len(vet) > 0:
        for i in range(len(vet)):
            print('Código do funcionário: {} \tNome: {} \tEndereço: {}, {}, {} - {} \tSalário: R$ {:.2f}'.format(vet[i].codigo, vet[i].nome, vet[i].endereco.logradouro, vet[i].endereco.numero, vet[i].endereco.bairro, vet[i].endereco.cidade, vet[i].salario))
        print()
    else:
        print('Funcionário não cadastrado(s).\n')

def main():
    vetor_funcionario = []
    x = menu()
    while x > 0:
        print()
        if x == 1:
            vetor_funcionario = cadastrar(vetor_funcionario)
        elif x == 2:
            visualizar(vetor_funcionario)
        elif x == 3:
            print('Saindo...')
            break
        else:
            print('Comando Inválido. Tente Novamente.\n')
        x = menu()

main()