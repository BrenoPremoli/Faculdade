# 12. Faça um programa que:
# preencha um vetor com dez números reais
# não use nenhuma função pronta da linguagem Python.

# Calcule e mostre:
# a quantidade de números negativos
# a soma dos números positivos desse vetor
# não use nenhuma função pronta da linguagem Python

reais = [] 
negativos = []
soma = 0
for i in range(5):
  reais.append(float(input('Digite um número real: ')))
  if reais[i] < 0:
    negativos.append(reais[i])
  elif reais[i] >= 0:
    soma = soma + reais[i]
print('Quantidade de números negativos:',len(negativos))
print('Soma dos números positivos:',soma)