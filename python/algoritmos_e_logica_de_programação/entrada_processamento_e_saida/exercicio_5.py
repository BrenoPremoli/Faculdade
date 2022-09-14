# 5. Faça um programa que receba o salário de um funcionário e o percentual de aumento, calcule e mostre o valor do aumento e o novo salário.

#entrada
salarioAtual = float(input("Informe seu salário atual: "))
porcentagemDeAumento = float(input("Informe a porcentagem de aumento: "))

#processamento
novoSalario = salarioAtual + (salarioAtual * porcentagemDeAumento / 100)
aumento = novoSalario - salarioAtual

#saída
print("O valor de aumento de seu salário foi de R$", aumento)
print("Seu novo salário é R$",novoSalario)