# 2. Faça um algoritmo que mostre o cumprimento ‘Olá ‘ para o nome de alguém (4 pessoas). Exemplo ‘Olá Mariana’. Pode implementar com o comando while ou for.

alunos = 1
while alunos <= 4:
  nome = input("Digite seu nome: ")
  print(alunos,"Olá,",nome)
  alunos = alunos + 1
print("\n")
for alunos in range (1,5):
  nome = input("Digite seu nome: ")
  print(alunos,"Olá,",nome)
  