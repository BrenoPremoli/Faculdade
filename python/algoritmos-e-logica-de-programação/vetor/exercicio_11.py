# Faça um programa que:
#preencha um vetor com quinze elementos inteiros
#verifique a existência de elementos iguais a 30, mostrando os índices/posições em que apareceram.

inteiros = [] 
for i in range(5):
  inteiros.append(int(input('Digite um número inteiro: ')))
for i in range(5):
  if inteiros[i] == 30:
    print('Número encontrado','- Posição:',i+1)