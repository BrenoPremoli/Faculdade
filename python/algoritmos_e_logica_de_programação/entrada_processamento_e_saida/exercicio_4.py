# 4. Faça um programa que:
# receba o salário de um funcionário
# calcule e mostre o novo salário, sabendo-se que este sofreu um aumento de 25%.

#entrada
salario = float(input("Informe seu salário: "))

#processamento
novoSalario = salario + (salario * 25 / 100)

#saída
print("Seu novo salário será de R$",novoSalario)
