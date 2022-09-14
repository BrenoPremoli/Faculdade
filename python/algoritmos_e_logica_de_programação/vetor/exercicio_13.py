# 13. Faça um programa que:
# receba dez números inteiros e armazene-os em um vetor
# classifique os números em dois vetores, um com números pares e o outra com os ímpares
# não use nenhuma função pronta da linguagem Python

inteiros = [] 
pares = []
impares = []
for i in range(5):
  inteiros.append(int(input('Digite um número inteiro: ')))
  if inteiros[i] % 2 == 0:
    pares.append(inteiros[i])
  elif inteiros[i] % 2 != 0:
    impares.append(inteiros[i])
print('Pares:',pares)
print('ímpares:',impares)