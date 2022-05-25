# 7. (Função com retorno sem parâmetro) Faça uma função/método que leia e armazene 5 elementos inteiros no vetor A, deverá ser gerado um vetor B, de mesmo tamanho, que armazenará o fatorial de cada elemento de A. Não use função pronta de cálculo de fatorial. Retorne/apresente o vetor B.

def calcular():
    vetor = []
    vetorx5 = []
    n = int(input('Informe o valor de N termos: '))
    fat = 1
    cont = 1
    soma = 1
    while cont <= n:
        vetor.append(cont)
        fat = cont * fat
        vetorx5.append(fat)
        cont = cont + 1
        soma = soma + (1 / fat)
    return vetorx5
def main():
    print('Vetor B: {}'.format((calcular())))

main()

