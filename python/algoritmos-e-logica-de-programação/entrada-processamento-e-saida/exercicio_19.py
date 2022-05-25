#entrada
salarioMinimo = float(input("Digite o valor do salário mínimo: "))
quilowatt = float(input("Digite o valor de quilowatts consumidos pela residência: "))

#processamento
kw = salarioMinimo / 5
valorResidencia = kw * quilowatt
valorDesconto = valorResidencia * (15 / 100)
valorDescontado = valorResidencia - valorDesconto

#saída
print("O valor de cada quilowatt é: R$",kw)
print("O valor a ser pago por essa residência é: R$", valorResidencia)
print("O valor a ser pago com desconto de 15% é de: R$", valorDescontado)
