# 6. Faça um algoritmo que receba a idade de 10 pessoas, calcule e exiba a quantidade de pessoas maiores de idade, sendo que a maioridade é obtida após completar 18 anos. Pode implementar com o comando while ou for.

contador = 1
cont = 0
while contador <= 10:
  idade = int(input("Digite sua idade: "))
  contador = contador + 1
  if idade >= 18:
    cont = cont + 1
print(cont,"pessoa(s) são maiores de idade.")
print("\n")
cont = 0
for contador in range (1,11):
  idade = int(input("Digite sua idade: "))
  if idade >= 18:
    cont = cont + 1
print(cont,"pessoa(s) são maiores de idade.")