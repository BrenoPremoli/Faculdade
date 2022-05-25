# 3. Faça um programa que carregue um vetor com a média de dez alunos, calcule e mostre a MÉDIA DA SALA e quantos alunos estão acima e abaixo da média da sala. Não use nenhuma função pronta da linguagem Python.

media = [] 
acima = 0
abaixo = 0
soma_media = 0
for i in range(5):
  media.append(float(input('Digite sua média: ')))
  soma_media = soma_media + media[i]
media_sala = soma_media / len(media)
for i in range(5):
  if media[i] > media_sala:
    acima = acima + 1
  elif media[i] < media_sala:
    abaixo = abaixo + 1
print(f'Média da sala: {media_sala:.2f}')
print(f'Alunos acima da média da sala: {acima:.0f}')
print(f'Alunos abaixo da média da sala: {abaixo:.0f}')