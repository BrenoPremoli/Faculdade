# 6. Faça um algoritmo que calcule e apresente a média de alturas superior a 1,80 de 10 alunos. Informe também quantos e quais (índice/posição) são os alunos. Não use nenhuma função pronta da linguagem Python.

alturas = [] 
soma_alturas = 0
cont = 0
for i in range(5):
  alturas.append(float(input('Digite sua altura: '))) 
  if alturas[i] > 1.8:
    soma_alturas = soma_alturas + alturas[i]
    cont = cont + 1
media = soma_alturas / cont
print(f'Média das altuas superiores à 1.80: {media:.2f}')
print('Total de alunos com mais de 1,80m:',cont)
for i in range(5):
  if alturas[i] > 1.8:
    print('Posição de um aluno com mais de 1,80m:',i+1)