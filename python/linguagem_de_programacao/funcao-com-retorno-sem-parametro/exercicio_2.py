# 2. (Função com retorno sem parâmetro) Faça um programa contendo uma função/método para subtrair dois números, retornar o resultado e o apresentando.

def subtrair():
    n1 = int(input('Informe um número: '))
    n2 = int(input('Informe outro número: '))
    r = n1 - n2
    print()
    return r

def main():
    print('Resultado da subtração: {}'.format(subtrair()))

main()

  