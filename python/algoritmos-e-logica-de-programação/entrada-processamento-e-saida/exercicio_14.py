# 14. Faça um programa que receba o ano de nascimento de uma pessoa e o ano atual, calcule e mostre:
# a idade atual da pessoa;
# quantos anos ela terá em 2050.

#entrada
anoDeNascimento = int(input("Digite o ano em que você nasceu: "))

#processamento
idadeAtual = 2021 - anoDeNascimento
idadeFuturo = 2050 - anoDeNascimento

#saída
print("Hoje você tem",idadeAtual,"anos.")
print("Em 2050 você terá",idadeFuturo,"anos.")