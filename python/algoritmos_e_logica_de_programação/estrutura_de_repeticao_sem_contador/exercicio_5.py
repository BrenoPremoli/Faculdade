# 5. Construir um algoritmo para calcular e apresentar a idade atual de algumas pessoas em relação ao ano atual, mas não é informado a quantidade de pessoas, então use como critério de parada (condição da estrutura de repetição, digitar zero no ano de nascimento para sair.

print("Para encerrar, digite zero no ano de nascimento.")
ano_nascimento = int(input("Digite o ano de nascimento: "))
while ano_nascimento > 0:
  ano_atual = int(input("Digite o ano atual: "))
  nome = str(input("Digite seu nome: "))
  idade = ano_atual - ano_nascimento
  print("Nome e idade atual:",nome,"-",idade,"anos.")
  ano_nascimento = int(input("Digite o ano de nascimento: "))