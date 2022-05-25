# 5. Faça um programa que realize o cadastro de contas bancarias com as seguintes informações: numero da conta, nome do titular e saldo. O banco permitirá o cadastramento de 15 contas. Crie uma função para cada opção do menu a seguir. Utilize a estrutura na passagem de parâmetro:
# Menu de opções:
# Cadastrar contas
# Visualizar todas as contas
# Consultar por nome
# Alterar nome e/ou saldo de um número de conta
# Excluir a conta com menor saldo
# Sair

# Observação:
# No item de menu 4. Alterar nome e/ou saldo de um número de conta, entenda que apenas pode ser alterado o nome e o saldo depois que você pesquisar pelo número da conta.
# No item 5 do menu, encontre o menor saldo dentre todos cadastrados, depois exclua esta ÚNICA conta.. O assunto de excluir algo de um vetor foi dado na disciplina de Algoritmo

class contas:
    conta = 0
    nome = ''
    saldo = 0.0

def menu():
    print('1. Cadastrar contas')
    print('2. Visualizar todas as contas')
    print('3. Consultar por nome')
    print('4. Alterar nome e/ou saldo de um número de conta')
    print('5. Excluir a conta com menor saldo')
    print('6. Sair')
    print()
    opcao = int(input('Qual opção deseja? '))
    return opcao

def cadastrar(vet):
    for i in range(3): #for i in range (15)
        c = contas()
        c.conta = int(input('Digite o número da conta: '))
        c.nome = input('Digite o nome do titular: ')
        c.saldo = float(input('Digite o saldo da conta: '))
        vet.append(c)
        print()
    return vet

def apresentar(vet):
    if len(vet) > 0:
        for i in range(len(vet)):
            print('Número da conta: {} \tNome do titular: {} \tSaldo: R$ {:.2f}'.format(vet[i].conta, vet[i].nome, vet[i].saldo))
        print()
    else:
        print('Sem cadastro de conta(s)\n')

def consultar(vet, name):
    cont = 0
    if len(vet) > 0:
        for i in range(len(vet)): 
            if name in vet[i].nome:
                cont = cont + 1
                print('\nNúmero da conta: {} \tNome do titular: {} \tSaldo: R$ {:.2f}\n'.format(vet[i].conta, vet[i].nome, vet[i].saldo))
        if cont == 0:
            print('\nNome não encontrado.\n')
    else:
        print('\nSem cadastro de conta(s)\n')

def alterar(vet, number):
    if len(vet) > 0:
        cont = 0
        for i in range(len(vet)): 
            if number == vet[i].conta:
                procura = i
                cont = cont + 1
                print('\nNúmero da conta: {} \tNome do titular: {} \tSaldo: R$ {:.2f}\n'.format(vet[i].conta, vet[i].nome, vet[i].saldo))
        if cont == 0:
            print('\nNúmero da conta não encontrado.\n')
        elif cont > 0:
            esc = int(input('1. Alterar nome \n2. Alterar saldo \n3. Alterar nome e saldo \nDigite:  '))
            if esc == 1:
                vet[procura].nome = input('\nDigite um novo nome: ')
            elif esc == 2:
                vet[procura].saldo = float(input('\nDigite um novo saldo: '))
            elif esc == 3:
                vet[procura].nome = input('\nDigite um novo nome: ')
                vet[procura].saldo = float(input('Digite um novo saldo: '))
            print('\nDado(s) alterado(s) com sucesso.\n')
    else:
        print('\nSem cadastro de conta(s)\n')

def excluir(vet):
    if len(vet) > 0:
        saldo = vet[0].saldo
        indice = 0
        for i in range (len(vet)):
            if vet[i].saldo < saldo:
                saldo = vet[i].saldo
                indice = i
        print('Conta excluída - Número da conta: {} \tNome do titular: {} \tSaldo: R$ {:.2f}\n'.format(vet[indice].conta, vet[indice].nome, vet[indice].saldo))
        vet = vet.pop(indice)
        print('Conta de menor saldo exclúida com sucesso.\n')
    else:
        print('Sem cadastro de conta(s)\n')

def main():
    vetor_conta = []
    x = menu()
    while x >= 0:
        print()
        if x == 1:
            vetor_conta = cadastrar(vetor_conta)
        elif x == 2:
            apresentar(vetor_conta)
        elif x == 3:
            nome = input('Digite o nome completo para consultar: ')
            consultar(vetor_conta, nome)
        elif x == 4:
            n = int(input('Digite o número da conta para alterar: '))
            alterar(vetor_conta, n)
        elif x == 5:
            excluir(vetor_conta)
        elif x == 6:
            break
        else:
            print('Comando Inválido. Tente Novamente.\n')
        x = menu()
main()