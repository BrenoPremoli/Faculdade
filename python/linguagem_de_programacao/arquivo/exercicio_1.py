# 1. Elabore uma estrutura para representar e armazenar 10 produtos (código, nome, preço). Utilize os recursos de arquivo para armazenar estes dados permanentemente. O nome do arquivo deve ser o mesmo da estrutura.

class tipo_produto: 
    codigo = 0
    nome = ''
    preco = 0.0

def main():
    vetor_produto = []
    arquivo = open('tipo_produto.txt', 'w')
    print('Cadastro de Produtos\n')
    for i in range(3):
        p = tipo_produto()
        p.codigo = int(input('Digite a código: '))
        p.nome = input('Digite o nome: ')
        p.preco = float(input('Digite o preço: R$ '))
        print()
        vetor_produto.append(p)
        arquivo.write('{}; {}; R$ {:.2f}\n'.format(p.codigo, p.nome, p.preco ))
    arquivo.close()   
    arquivo = open('tipo_produto.txt', 'r')
    print('Apresentação dos dados dos produtos\n')
    print('Código\tNome\tPreço')
    for linha in arquivo.readlines():
        codigo, nome, preco = linha.strip().split("; ")
        print(codigo,'\t',nome,'\t',preco)
    arquivo.close()

main()