# 7. Escreva um algoritmo que receba 23 números, calcule e exiba a quantidade de números pares e impares. Pode implementar com o comando while ou for.

contador = 1
par = 0
impar = 0
while contador <= 23:
  n = int(input("Digite um número: "))
  contador = contador + 1
  if n % 2 == 0:
    par = par + 1
  else:
    impar = impar + 1
print("A quatidade de números pares é de: ",par)
print("A quatidade de números ímpares é de: ",impar)
print("\n")
par = 0
impar = 0
for contador in range (1,24):
  n = int(input("Digite um número: "))
  if n % 2 == 0:
    par = par + 1
  else:
    impar = impar + 1
print("A quatidade de números pares é de: ",par)
print("A quatidade de números ímpares é de: ",impar)
