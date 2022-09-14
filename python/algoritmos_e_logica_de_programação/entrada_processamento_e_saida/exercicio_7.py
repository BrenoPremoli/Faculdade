# 7. Faça um programa que receba o salário base de um funcionário, calcule e mostre seu salário a receber, sabendo-se que o funcionário tem gratificação de 50,00 sobre o salário base e paga imposto que deve ser lido e é aplicado sobre o salário base.

#entrada
salario = float(input("Informe seu salário: "))
perImposto = float(input("Informe a porcentagem de seu imposto: "))

#processamento
imposto = salario * perImposto / 100
salarioAReceber = salario + 50 - imposto

#saída
print("Seu a valor a ser recebido será de R$", salarioAReceber)
