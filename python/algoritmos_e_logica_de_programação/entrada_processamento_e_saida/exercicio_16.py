# 16. Faça um programa que receba o número de horas trabalhadas e o valor do salário mínimo, calcule e mostre o salário a receber, seguindo estas regras:
# a hora trabalhada vale a metade do salário mínimo.
# o salário bruto equivale ao número de horas trabalhadas multiplicado pelo valor da hora trabalhada.
# o imposto equivale a 3% do salário bruto.
# o salário a receber equivale ao salário bruto menos o imposto.

#entrada
horas = int(input("Digite o número de horas trabalhadas: "))
salarioMinimo = float(input("Digite o valor do salário míninmo: "))

#processamento
horaTrabalhada = salarioMinimo / 2
salarioBruto = horas * horaTrabalhada 
imposto = salarioBruto * (3 / 100)
salarioAReceber = salarioBruto - imposto 

#saída
print("O valor do salário líquido é de: R$",salarioAReceber)