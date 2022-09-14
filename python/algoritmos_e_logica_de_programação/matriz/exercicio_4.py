# 4. Faça um programa para armazenar em uma matriz 5x2 preços. Encontre e apresente os ÍNDICES dos valores menores que 23 reais.

preco = [] # ................................................... Lendo a matriz
for lin in range(5):
    linha = []
    for col in range(2): 
        linha.append(float(input('Digite o preço ['+ str(lin) + '][' + str(col) + ']: R$ ')))
    preco.append(linha)
print()
print('Valores dos preços.')
for lin in range(5):  # ................................................... Apresentando a matriz
    for col in range(2):
      print('R$',f'{preco[lin][col]:.2f}',end='\t''\t')
    print()
print()
for lin in range(5):  # ................................................... Apresentando a matriz
    for col in range(2): 
      if preco[lin][col] < 23:
        print('Preço menor que 23 detectado.''\n''Preço: R$',preco[lin][col],'\n''Índice: ['+ str(lin) + '][' + str(col) + ']')
        print('Linha:',lin)
        print('Coluna:',col)
        print()