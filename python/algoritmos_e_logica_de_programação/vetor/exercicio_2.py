# 2. Faça um programa que carregue um vetor de dez elementos que contenha o nome de pessoas e outro que contenha o peso, encontre qual a pessoa mais gorda e mais magra e apresente o nome o peso das mesmas.​ Use dois vetores, um para peso e outro para nome. Não use nenhuma função pronta da linguagem Python.

nome = [] 
peso = []
for i in range(5):
  nome.append(str(input('Digite seu nome: ')))
  peso.append(float(input('Digite seu peso (em Kg): ')))
  if i == 0:
    peso_maior = peso[i]
    peso_menor = peso[i]
    nome_maior = nome[i]
    nome_menor = nome[i]
  if peso[i] > peso_maior:
    peso_maior = peso[i]
    nome_maior = nome[i]
  elif peso[i] < peso_menor:
    peso_menor = peso[i]
    nome_menor = nome[i]
print('A pessoa mais magra é',nome_menor,'com o peso de',peso_menor,'Kg.')
print('A pessoa mais gorda é',nome_maior,'com o peso de',peso_maior,'Kg.')

  