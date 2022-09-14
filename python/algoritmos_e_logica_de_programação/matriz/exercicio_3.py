# 3. Faça um programa que carregue uma matriz 3 x 2, que representa preços de produtos, crie OUTRA matriz que armazene todos os preços com 7% de aumento.

preco = [] # ................................................... Lendo a matriz
for lin in range(3):
    vetor = []
    for col in range(2): 
        vetor.append(float(input('Digite o preço ['+ str(lin) + '][' + str(col) + ']: ')))
    preco.append(vetor)
# len(preco), informa a quantidade de linhas
# len(preco[0]), informa a quantidade de colunas
aumento = []
print('\nApresentando a matriz dos preços................')
for lin in range(len(preco)):  # ................... Apresentando a matriz preço
    vetor = []
    for col in range(len(preco[0])): 
        vetor.append(preco[lin][col] + preco[lin][col] * 7 / 100)
        print(f'{preco[lin][col]:.2f}',end='\t')
    aumento.append(vetor)
    print()
print('\nApresentando a matriz após os aumentos .........')
for lin in range(len(aumento)):  # ................. Apresentando a matriz aumento
    for col in range(len(aumento[0])): 
        print(f'{aumento[lin][col]:.2f}', end='\t')
    print()