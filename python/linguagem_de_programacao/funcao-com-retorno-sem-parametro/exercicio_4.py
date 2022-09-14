# 4. (Função com retorno sem parâmetro) Faça um programa contendo uma função/método que leia o lado de um quadrado e retorne sua área, area = lado².

def calcular():
    lado = float(input('Digite o lado do quadrado: '))
    area = lado * lado
    print()
    return area

def main():
    print('Área do quadrado: {:.2f}'.format(calcular()))

main()