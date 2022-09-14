# 2. (Função com retorno com parâmetro) Faça um programa contendo uma função/método que receba dois números via parâmetro, some os dois valores, retorne e apresente o resultado.

def somar(n1,n2):
    s = n1 + n2
    return s

def main():
    num1 = int(input('Informe o primeiro número: '))
    num2 = int(input('Informe o segundo número: '))
    print()
    print('Soma dos números: {}'.format(somar(num1,num2)))

main()
  