# 2. Elabore uma estrutura para representar e armazenar 10 produtos (código, nome, preço). Utilize os recursos de arquivo para armazenar estes dados permanentemente. O nome do arquivo deve ser o mesmo da estrutura.Construa um menu com as seguintes opções, cada uma delas deve ter uma função e a main para chamar todas elas.
#Menu de opções:
#Cadastrar produtos
#Visualizar todos os dados
#Sair

class tipo_produto_est: 
    codigo = 0
    nome = ''
    preco = 0.0

def cadastrar(vet_prod):
    arquivo = open('tipo_produto_est.txt', 'w')
    print('\nCadastro de Produtos\n')
    for i in range(3):
        p = tipo_produto_est()
        p.codigo = int(input('Digite a código: '))
        p.nome = input('Digite o nome: ')
        p.preco = float(input('Digite o preço: R$ '))
        print()
        vet_prod.append(p)
        arquivo.write('{}; {}; R$ {:.2f}\n'.format(p.codigo, p.nome, p.preco))
    arquivo.close()
    return vet_prod

def visualizar():
    arquivo = open('tipo_produto_est.txt', 'r')
    print('\nApresentação dos dados dos funcionários\n')
    print('Código\tNome\tPreço')
    for linha in arquivo.readlines():
        codigo, nome, preco = linha.strip().split("; ")
        print(codigo,'\t',nome,'\t',preco)
    print()
    arquivo.close()

def main():
    op = 1
    while op > 0:
        print('Gerenciamento de Funcionários\n')
        print('1. Cadastrar')
        print('2. Visualizar')
        print('3. Sair\n')
        op = int(input('Digite a opção: '))
        if op == 1:
            vetor_produto = []
            vetor_produto = cadastrar(vetor_produto)
        elif op == 2:
            visualizar()      
        elif op == 3:
            print('\nSaindo...')
            break
        else:
            print('\nComando inválido. Tente novamente.\n')   

main()