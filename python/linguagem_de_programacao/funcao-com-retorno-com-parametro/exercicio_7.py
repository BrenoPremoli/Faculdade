# 7. (Função com retorno com parâmetro) Faça um programa contendo algumas funções:
# a) Função para construir um menu de opções para uma calculadora:

# *** Minha Calculadora ***
# Digite um número.....: 
# Digite outro número..: 
#    + Soma dois números
#    - Subtrai dois números
#    * Multiplica dois números
#    / Divide dois números
# Qual opção deseja?
 
# b) Desenvolva uma função para cada opção de cálculo, mas estas não terão retorno.
# Observação: Na chamada da função deve-se utilizar uma estrutura de repetição que permita diversos cálculos, quando o usuário quiser sair da calculadora digitará qualquer valor diferente dos caracteres do menu.
# A função da construção do menu, chamará todas as outras passando a elas os valores digitados.

def menu():
    n1 = int(input('Digite um número: '))
    n2 = int(input('Digite outro número: '))
    print('+ Soma dois números')
    print('- Subtrai dois números')
    print('* Multiplica dois números')
    print('/ Divide dois números')
    esc = input('Qual opção deseja? ')
    print()
    while esc == '+' or esc == '-' or esc == '*' or esc == '/':
        if esc == '+':
            adicionar(n1,n2)
        elif esc == '-':
            subtrair(n1,n2)
        elif esc == '*':
            multiplicar(n1,n2) 
        elif esc == '/':
            dividir(n1,n2)
        else:
            print('Comando inválido.')
        print()
        esc = menu()

def adicionar(a1, a2):
    a = a1 + a2
    print('Soma:',a)

def subtrair(s1, s2):
    s = s1 - s2
    print('Subtração:',s)

def multiplicar(m1, m2):
    m = m1 * m2
    print('Multiplicação:',m)

def dividir(d1, d2):
    d = d1 / d2
    print('Divisão:',d)

def main():
    menu()
main()

#===================================================================================================
def menu(esc):
    print('*** Minha Calculadora ***')
    print('"+" Soma dois números')
    print('"-" Subtrai dois números')
    print('"*" Multiplica dois números')
    print('"/" Divide dois números')
    print()
    esc = input('Qual opção deseja? ')
    print()
    return esc

def adicionar(a1, a2):
    a = a1 + a2
    print('Soma:',a)

def subtrair(s1, s2):
    s = s1 - s2
    print('Subtração:',s)

def multiplicar(m1, m2):
    m = m1 * m2
    print('Multiplicação:',m)

def dividir(d1, d2):
    d = d1 / d2
    print('Divisão:',d)

def main():
    escolha = '+'
    escolha = menu(escolha)
    while escolha == '+' or escolha == '-' or escolha == '*' or escolha == '/':
        num1 = int(input('Digite um número: '))
        num2 = int(input('Digite outro número: '))
        if escolha == '+':
            adicionar(num1, num2)
        elif escolha == '-':
            subtrair(num1, num2)
        elif escolha == '*':
            multiplicar(num1, num2)
        elif escolha == '/':
            dividir(num1, num2)  
        print()
        escolha = menu(escolha)

main()

