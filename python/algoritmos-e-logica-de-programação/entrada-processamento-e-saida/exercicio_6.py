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