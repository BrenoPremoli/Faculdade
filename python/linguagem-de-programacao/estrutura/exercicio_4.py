# 4. Uma escola precisa montar o cadastro geral de seus alunos. Este cadastro deverá conter as seguintes informações por aluno: nome completo, data de nascimento, telefone, endereço e série atual. Levando em conta que esta escola possui no máximo 500 alunos, como você faria para estruturar estas informações num sistema de gerenciamento para a escola? Implemente utilizando estrutura. Também use a criação de funções para cada operação. Use o menu a seguir:
# Menu de opções:
# Cadastrar alunos
# Consulta por nome
# Visualizar todos os dados
# Sair

class aluno:
    nome = ''
    dia = 0
    mes = 0
    ano = 0
    telefone = 0
    endereco = ''
    serie = 0

def menu():
    print('1. Cadastrar alunos')
    print('2. Consulta por nome')
    print('3. Visualizar todos os dados')
    print('4. Sair')
    print()
    opcao = int(input('Qual opção deseja? '))
    return opcao

def cadastrar(vet):
    for i in range(2): # for i in range(500)
        a = aluno()
        a.nome = input('Digite o nome completo: ')
        a.dia = int(input('Digite o número do dia de nascimento: '))
        a.mes = int(input('Digite o número do mês de nascimento: '))
        a.ano = int(input('Digite o ano de nascimento: '))
        a.telefone = int(input('Digite o número de telefone: '))
        a.endereco = input('Digite o endereço: ')
        a.serie = int(input('Digite a série: '))
        vet.append(a)              
        print()
    return vet

def consultar(name, vet):
    cont = 0
    if len(vet) > 0:
        for i in range(len(vet)): 
            if name == vet[i].nome:
                cont = cont + 1
                print('\nNome encontrado.\n\nNome do aluno: {} \tData de nascimento: {}/{}/{} \tTelefone: {} \tEndereço: {} \tSérie: {}\n'.format(vet[i].nome,vet[i].dia,vet[i].mes,vet[i].ano,vet[i].telefone,vet[i].endereco,vet[i].serie))
        if cont == 0:
            print('\nNome não encontrado.\n')
    else:
        print('\nAluno(s) não cadastrado(s).\n')

def apresentar(vet):
    if len(vet) > 0:
        for i in range(len(vet)):
            print('Nome do aluno: {} \tData de nascimento: {}/{}/{} \tTelefone: {} \tEndereço: {} \tSérie: {} série'.format(vet[i].nome,vet[i].dia,vet[i].mes,vet[i].ano,vet[i].telefone,vet[i].endereco,vet[i].serie))
        print()
    else:
        print('Aluno(s) não cadastrado(s).\n')

def main():
    vetor_aluno = []
    x = menu()
    while x >= 0:
        print()
        if x == 1:
            vetor_aluno = cadastrar(vetor_aluno)
        elif x == 2:
            nome = input('Digite o nome completo para consultar: ')
            consultar(nome, vetor_aluno)
        elif x == 3:
            apresentar(vetor_aluno) 
        elif x == 4:
            print('Saindo...')
            break
        else:
            print('Comando Inválido. Tente Novamente.\n')
        x = menu()

main()