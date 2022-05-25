# 7. Criar um algoritmo que a partir de um vetor de 10 elementos inteiros, crie outros dois vetores que receberão os elementos positivos e negativos e ao final apresente-os. Não use nenhuma função pronta da linguagem Python.

inteiros = [] 
positivos = []
negativos = []
for i in range(6):
  inteiros.append(int(input('Digite um número inteiro: ')))
  if inteiros[i] >= 0:
    positivos.append(inteiros[i])
  elif inteiros[i] < 0:
    negativos.append(inteiros[i])
print('Números inteiros:',inteiros)
print('Números positivos:',positivos)
print('Números negativos:',negativos)

