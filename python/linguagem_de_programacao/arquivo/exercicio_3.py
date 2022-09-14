# 3. Elabore uma estrutura para representar e armazenar 10 alunos (matricula, nome, telefone). Utilize os recursos de arquivo para armazenar estes dados permanentemente. O nome do arquivo deve ser o mesmo da estrutura. Construa um menu com as seguintes opções, cada uma delas deve ter uma função e a main para chamar todas elas.
#Menu de opções:
#Cadastrar alunos
#Visualizar todos os dados
#Sair

class tipo_aluno_est:
    matricula = 0
    nome = ''
    telefone = 0

def cadastrar(vet_alun):
    arquivo = open('tipo_aluno_est.txt', 'w')
    print('\nCadastro de Alunos\n')
    for i in range(3):
        a = tipo_aluno_est()
        a.matricula = int(input('Digite a matrícula: '))
        a.nome = input('Digite o nome: ')
        a.telefone = int(input('Digite o telefone: '))
        print()
        vet_alun.append(a)
        arquivo.write('{}; {}; {}\n'.format(a.matricula, a.nome, a.telefone))
    arquivo.close()
    return vet_alun

def visualizar():
    arquivo = open('tipo_aluno_est.txt', 'r')
    print('\nApresentação dos dados dos Alunos\n')
    print('Matrícula\tNome\tTelefone')
    for linha in arquivo.readlines():
        matricula, nome, telefone = linha.strip().split('; ')
        print(matricula,'\t\t',nome,'\t',telefone)
    print()
    arquivo.close()

def main():
    op = 1
    while op > 0:
        print('Gerenciamento de Alunos\n')
        print('1. Cadastrar')
        print('2. Visualizar')
        print('3. Sair\n')
        op = int(input('Digite a opção: '))
        if op == 1:
            vetor_aluno = []
            vet_aluno = vetor_aluno
            cadastrar(vet_aluno)
        elif op == 2:
            visualizar()
        elif op == 3:
            print('\nSaindo...')
            break
        else:
            print('\nComando inválido. Tente novamente.\n')

main()