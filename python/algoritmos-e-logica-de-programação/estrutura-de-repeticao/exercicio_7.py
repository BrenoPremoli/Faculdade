#entrada
salario = float(input("Informe seu salário: "))
perImposto = float(input("Informe a porcentagem de seu imposto: "))

#processamento
imposto = salario * perImposto / 100
salarioAReceber = salario + 50 - imposto

#saída
print("Seu a valor a ser recebido será de R$", salarioAReceber)
