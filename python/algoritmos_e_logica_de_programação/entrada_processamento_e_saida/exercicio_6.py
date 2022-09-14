# 6. Faça um programa que receba o salário base de um funcionário, calcule e mostre o salário a receber, sabendo-se que o funcionário tem gratificação de 5% sobre o salário base e paga imposto de 7% também sobre o salário base.

#entrada
salarioBase = float(input("Informe seu salário base: "))

#processamento
gratificacao = salarioBase * (5 / 100)
imposto = salarioBase * (7 / 100)
salarioAReceber = salarioBase + (gratificacao - imposto)

#saída
print("A gratificação é de R$", gratificacao)
print("O imposto é de R$", imposto)
print("O seu salário será de R$", salarioAReceber)