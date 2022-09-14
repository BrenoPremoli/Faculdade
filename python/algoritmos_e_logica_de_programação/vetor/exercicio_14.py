# 14. Faça um programa que:
# preencha um vetor com quinze números

# Determine e mostre:
# o maior número e a posição por ele ocupada no vetor
# o menor número e a posição por ele ocupada no vetor
# Não use nenhuma função pronta da linguagem Python

numeros = [] 
maior = 0
menor = 0
indice = 0
pos_maior = 0
pos_menor = 0
for i in range(5):
  numeros.append(int(input('Digite um número: ')))
  indice = indice + 1
  if numeros[i] > maior:
    maior = numeros[i]
    pos_maior = indice
  elif numeros[i] < menor:
    menor = numeros[i]
    pos_menor = indice
print('Maior valor:',maior)
print('Posição do maior valor:',pos_maior)
print('Menor valor:',menor)
print('Posição do menor valor:',pos_menor)