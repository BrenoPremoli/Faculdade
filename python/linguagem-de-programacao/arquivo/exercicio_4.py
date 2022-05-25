# 4. Baixe o arquivo futebol.txt que esta na pasta Material do aula do Teams. Leia este arquivo e o apresente. Com os dados lidos, armazene na estrutura Futebol (posicao_jogo, altura, peso, imc), calcule o IMC (Índice de Massa Corporal), armazene na estrutura e também em outro arquivo, mas agora chamado futebol_imc.txt. Apresente este novo arquivo.

def main():
    arquivo_fut = open('futebol.txt', 'r')
    arquivo_fut_imc = open('futebol_imc.txt', 'w')
    arquivo_fut_imc.close()
    print('----- Apresentação dos dados dos jogadores -----\n')
    print('Posição\t\tAltura\t\tPeso\n')
    for linha in arquivo_fut.readlines():
        posicao, altura, peso = linha.strip().split(',')
        print(posicao,'\t',altura,'\t\t',peso)
        posicao1 = posicao
        altura1 = float(altura)
        peso1 = float(peso)
        imc = peso1 / (altura1 ** 2)
        arquivo_fut_imc = open('futebol_imc.txt', 'a')
        arquivo_fut_imc.write('{}; {:.2f}; {:.1f}; {:.2f}\n'.format(posicao1, altura1, peso1, imc))
    arquivo_fut_imc = open('futebol_imc.txt', 'r')
    print('\n----- Apresentação dos dados dos jogadores com IMC -----\n')
    print('Posição\t\tAltura\t\tPeso\t\tIMC\n')
    for linha in arquivo_fut_imc.readlines():
        posicao, altura, peso, imc = linha.strip().split('; ')
        print(posicao,'\t',altura,'\t\t',peso,'\t\t',imc)
    arquivo_fut_imc.close()

main()