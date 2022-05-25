# 3. (Função com retorno sem parâmetro) Faça um programa contendo uma função/método que leia a base e a altura de um triângulo e retorne/apresente sua área A = (base x altura)/2.

def calcular():
    base = float(input('Digite a base do triângulo: '))
    altura = float(input('Digite a altura do triângulo: '))
    area = (base * altura) / 2
    print()
    return area 

def main():
    print('Área do triângulo: {:.2f}'.format(calcular()))

main()