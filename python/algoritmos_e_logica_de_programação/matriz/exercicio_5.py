# 5. Faça um programa que leia números inteiros m e n e os elementos de uma matriz A de números inteiros de dimensão m x n e conte o número de elementos que são iguais a zero.

m = int(input('Digite um número inteiro (total de linhas): ')) #OK
n = int(input('Digite um número inteiro (total de colunas): '))
A = []
cont = 0
for lin in range(m):
  linha = []
  for col in range(n):
    linha.append(float(input('Digite um número ['+ str(lin) + ']['+ str(col) + ']: ')))
  A.append(linha)
print()
print('Matriz')
for lin in range(m):
  for col in range(n):
    print(A[lin][col],end='\t')
  print()
for lin in range(m):
  for col in range(n):
    if A[lin][col] == 0:
      cont = cont + 1
print()  
if cont > 0:
  print('Números de elementos igual a 0:',cont)
else:
  print('Nenhum elemento "0" foi encontrado.')