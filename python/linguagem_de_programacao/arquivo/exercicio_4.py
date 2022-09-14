# 4. Baixe o arquivo futebol.txt que esta na pasta Material do aula do Teams. Leia este arquivo e o apresente. Com os dados lidos, armazene na estrutura Futebol (posicao_jogo, altura, peso, imc), calcule o IMC (Índice de Massa Corporal), armazene na estrutura e também em outro arquivo, mas agora chamado futebol_imc.txt. Apresente este novo arquivo.

class futebol:
    posicao = ''
    altura = 0.0
    peso = 0.0
    imc = 0.0

def main():
    cont = 0
    vet = []
    arquivo_fut = open('futebol.txt', 'r')
    arquivo_fut_imc = open('futebol_imc.txt', 'w')
    arquivo_fut_imc.close()
    print('----- Apresentação dos dados dos jogadores -----\n')
    print('Posição\t\tAltura\t\tPeso\n')
    for linha in arquivo_fut.readlines():
        f = futebol()
        posicao, altura, peso = linha.strip().split(',')
        print(posicao,'\t',altura,'\t\t',peso)
        f.posicao = str(posicao)
        f.altura = float(altura)
        f.peso = float(peso)
        f.imc = f.peso / (f.altura ** 2)
        vet.append(f)
    while cont < len(vet):
        arquivo_fut_imc = open('futebol_imc.txt', 'a')
        arquivo_fut_imc.write('{}; {:.2f}; {:.1f}; {:.2f}\n'.format(vet[cont].posicao, vet[cont].altura, vet[cont].peso, vet[cont].imc))
        cont = cont + 1
    arquivo_fut_imc = open('futebol_imc.txt', 'r')
    print('\n----- Apresentação dos dados dos jogadores com IMC -----\n')
    print('Posição\t\tAltura\t\tPeso\t\tIMC\n')
    for linha in arquivo_fut_imc.readlines():
        posicao, altura, peso, imc = linha.strip().split('; ')
        print(posicao,'\t',altura,'\t\t',peso,'\t\t',imc)
    arquivo_fut_imc.close()

main()