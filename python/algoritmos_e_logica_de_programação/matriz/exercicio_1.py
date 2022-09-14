# 1. Faça um programa que leia uma matriz 2x3 (2 linhas, 3 colunas). Apresente os elementos da matriz e seus respectivos índices.

matriz = []  # ................................................... Lendo a matriz
for lin in range(2):
    linha = []
    for col in range(3): 
        linha.append(int(input('Digite o valor ['+ str(lin) + '][' + str(col) + ']: ')))
    matriz.append(linha)
for lin in range(2):  # ................................................... Apresentando a matriz
    for col in range(3): 
        print(matriz[lin][col], end='\t')
    print()