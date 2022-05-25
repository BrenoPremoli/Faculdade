# 1. (Função com retorno sem parâmetro) Faça um programa contendo uma função/método que leia um número e o multiplique por 2 retornando o resultado e o apresente.

def multiplicar():
    numero = int(input('Digite um número: '))
    r = numero * 2
    return r

def main():
    #1ª forma de chamar uma função com retorno....OU...
    resultado = multiplicar()
    print('O resultado é',resultado)

    #2ª forma de chamar uma função com retorno.........
    print('O resultado é',multiplicar())
    
main()