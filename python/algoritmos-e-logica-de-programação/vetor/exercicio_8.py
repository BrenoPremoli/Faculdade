# 8. Criar um algoritmo que leia dados para um vetor de 100 elementos inteiros, imprimir o maior, o menor, o percentual de números pares e a média dos elementos do vetor. Obs.: percentual = quantidade contada * 100 / quantidade total. Não use nenhuma função pronta da linguagem Python.

inteiros = [] 
pares = []
maior = 0
menor = 0
soma = 0
for i in range(4):
  inteiros.append(int(input('Digite um número inteiro: ')))
  soma = soma + inteiros[i]
  if inteiros[i] % 2 == 0:
    pares.append(inteiros[i])
  if inteiros[i] > maior:
    maior = inteiros[i]
    menor = inteiros[i]
  elif inteiros[i] < menor:
    menor = inteiros[i]
  elif inteiros[i] > maior:
    maior = inteiros[i]
  if inteiros[i] < menor:
    menor = inteiros[i]
media = soma / len(inteiros)
percentual = len(pares) * 100 / 4
print('Maior valor:',maior)
print('Menor valor:',menor)
print('Percentual de números pares:',percentual,'%')
print(f'Média dos elementos do vetor: {media:.2f}')
