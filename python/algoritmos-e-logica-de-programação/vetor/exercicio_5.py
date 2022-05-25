# 5. Faça um programa que carregue um vetor com dez nomes e faça uma verificação se um determinado nome esta nesse vetor. Não use nenhuma função pronta da linguagem Python.

nomes = [] 
for i in range(5):
  nomes.append(str(input('Digite um nome: ')))
nome = input('Digite um nome para fazer a busca: ')
if nome in (nomes):
  print('Nome encontrado.')
else:
  print('Nome não encontrado')