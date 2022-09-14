# 4. Faça um programa que carregue um vetor de oito elementos numéricos inteiros, calcule e mostre os números pares e suas respectivas índices/posições. Não use nenhuma função pronta da linguagem Python.

numeros = [] 
for i in range(6):
  numeros.append(int(input('Digite um número: ')))
for i in range(6):
  if numeros[i] % 2 == 0:
    print('Número par:',numeros[i],'- Posição:',i+1)