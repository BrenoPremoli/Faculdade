# 2. Faça um programa que carregue uma matriz 2 x 2, que representa o salário de 4 funcionários, calcule e mostre a soma total de todos os elementos que será o montante pago pela empresa a esses funcionários.

matriz = [] # ................ Lendo a matriz
soma = 0
for lin in range(2):
    linha = []
    for col in range(2): 
        linha.append(int(input('Digite o valor ['+ str(lin) + '][' + str(col) + ']: ')))
    matriz.append(linha)
for lin in range(2):  # .................. Apresentando a matriz
    for col in range(2): 
        soma = soma + matriz[lin][col]  # ................ Soma dos salários
        print('R$ 'f'{matriz[lin][col]:.2f}', end='\t')
    print()
print('\n'f'Montante pago pela empresa: R$ {soma:.2f}')

  