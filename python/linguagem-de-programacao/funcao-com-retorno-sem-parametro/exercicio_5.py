# 5. (Função com retorno sem parâmetro) Faça um programa contendo uma função/método que verifique se um número é par, retorne mostrando a str/string ‘É par’ ou se ‘É ímpar’.

def verificar():
    n = int(input('Digite um número: '))
    if n % 2 == 0:
        valor = 'É par'
    else:
        valor ='É ímpar'
    print()
    return valor

def main():
    print(verificar())
    
main()