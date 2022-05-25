# 20. Faça um programa que receba um número real, encontre e mostre:
# a parte inteira desse número;
# a parte fracionária desse número;
# o arredondamento desse número.

#entrada
n = float(input("Digite um número: "))

#processamento
parteInteira = n // 1
parteFracionaria = n - parteInteira
numeroArredondado = round(n)

#saída
print("Parte inteira: ",parteInteira)
print("Parte fracionária: ",parteFracionaria)
print("Número arredondado: ",numeroArredondado)