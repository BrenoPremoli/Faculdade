# 11. Faça um algoritmo que calcule e informe a média de idades de 5 alunos. Pode implementar com o comando while ou for.

aluno = 1
idade_unidade = 0
while aluno <= 5:
  idade = int(input("Digite a idade do aluno: "))
  idade_unidade = idade_unidade + idade
  aluno = aluno + 1
media = idade_unidade / 5
print(f'O valor médio das idades dos alunos é de: {media:.1f} anos.')
print("\n")

idade_unidade = 0
for aluno in range (1,6):
  idade = int(input("Digite a idade do aluno: "))
  idade_unidade = idade_unidade + idade
media = idade_unidade / 5
print(f'O valor médio das idades dos alunos é de: {media:.1f} anos.')