# 6. (Função com retorno com parâmetro) Faça um programa contendo algumas funções:
# a) Função para construir um menu de opções para uma calculadora, como neste exemplo:
# Menu de cálculos
# 1.   Número ao quadrado
# 2.   Número ao cubo
# 3.   Raiz do número
# 4.   Raiz cúbica do número
# Qual é a opção desejada?
# b) Desenvolva uma função para cada opção de cálculo.
# Observação: Na chamada da função deve-se utilizar uma estrutura de repetição que permita diversos cálculos, quando o usuário quiser sair da calculadora digitará qualquer valor diferente dos números do menu.
# A função da construção do menu, chamará todas as outras passando a elas o valor digitado.

def menu(escolha):
    print('----------------------------')
    print('Menu de cálculos')
    print('1. Número ao quadrado')
    print('2. Número ao cubo')
    print('3. Raiz do número')
    print('4. Raiz cúbica do número')
    print('----------------------------')
    escolha = int(input('Qual é a opção desejada? '))
    print()
    return escolha

def menu1(n1):
    quadrado = n1 * n1
    return quadrado

def menu2(n2):
    cubo = n2 * n2 * n2
    return cubo

def menu3(n3):
    raiz_quadrado = n3 ** (1/2)
    return raiz_quadrado

def menu4(n4):
    raiz_cubo = n4 ** (1/3)
    return raiz_cubo

def main():
    esc = 1
    while esc >= 1 and esc <= 4:
        esc = menu(esc)
        if esc == 1:
            num1 = int(input('Digite um número: '))
            print('{} ao quadrado: {}'.format(num1,menu1(num1)))
        elif esc == 2:
            num2 = int(input('Digite um número: '))
            print('{} ao cubo: {}'.format(num2,menu2(num2)))
        elif esc == 3:
            num3 = int(input('Digite um número: '))
            print('Raíz quadrada de {}: {:.0f}'.format(num3,menu3(num3)))
        elif esc == 4:
            num4 = int(input('Digite um número: '))
            print('Raíz cúbica de {}: {:.0f}'.format(num4,menu4(num4)))
        else:
            print('Programa Encerrado.')

main()