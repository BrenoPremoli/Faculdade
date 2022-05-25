# 11. (Função sem retorno com parâmetro) Faça uma função/método para verificar e contar quantas letras a tem numa frase. Não use NENHUMA função pronta da linguagem Python. Aqui deverá ocorrer, PASSAGEM DE PARÂMETRO POR VALOR.

def contar(frase):
    cont = 0
    for i in range(len(frase)):
        if frase[i] == 'a':
            cont = cont + 1
    print('Total de letras "a" na frase: {}'.format(cont))

def main():
    f = input('Digite uma frase qualquer: ')
    contar(f)

main()