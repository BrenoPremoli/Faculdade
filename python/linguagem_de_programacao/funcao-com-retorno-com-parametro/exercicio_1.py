# 1. (Função com retorno com parâmetro) Faça um programa contendo uma função/método que receba por parâmetro um número e o multiplique por 2, retorne e apresente o resultado da função.

def multiplicar(numero):
    r = numero * 2
    return r

def main():
    n = int(input('Informe o número: '))
    print('O resultado da multiplicação é',multiplicar(n))

    # outra forma de chamar a função com retorno
    x = multiplicar(n)
    print('O resultado da multiplicação é...:',x)
    # supondo que fosse necessário utilizar o valor desta função
    # daqui em diante, segue um exemplo
    if x > 5:
        print('É maior que 5')
        w = x + 1000
        print('W = ',w)

main()

#=============================================================================================================================================================
# Python deixa RETORNAR mais que uma variável como resultado
def multiplicar(numero):
    r = numero * 2
    return r,numero # <<<<<

def main():
    n = int (input('Informe o número: '))
    x,y = multiplicar(n)  # <<<<<
    print(x,y)
    
main()