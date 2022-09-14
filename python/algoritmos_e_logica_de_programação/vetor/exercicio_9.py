# 9. Faça um programa que:
# preencha um vetor com seis elementos numéricos inteiros.
# não use nenhuma função pronta da linguagem Python.

# Calcule e mostre:
# todos os números pares;
# a quantidade de números pares;
# todos os números ímpares;
# a quantidade de números ímpares

inteiros = [] 
pares = []
impares = []
for i in range(6):
  inteiros.append(int(input('Digite um número inteiro: ')))
  if inteiros[i] % 2 == 0:
    pares.append(inteiros[i])
  elif inteiros[i] % 2 != 0:
    impares.append(inteiros[i])
print('Números pares:',pares)
print('Quantidade de números pares:',len(pares))
print('Números ímpares:',impares)
print('Quantidade de números ímpares:',len(impares))
