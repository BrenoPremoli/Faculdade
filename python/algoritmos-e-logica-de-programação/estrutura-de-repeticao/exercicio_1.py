# 1. Faça um algoritmo que mostre 10 vezes a frase “Bem vindo a Fatec!”. Pode implementar com o comando while ou for.

contador = 1
while contador <= 10:
  print(contador,"Bem vindo a Fatec!")
  contador = contador + 1
print("\n")
for contador in range (1,11):
  print(contador,"Bem vindo a Fatec!")