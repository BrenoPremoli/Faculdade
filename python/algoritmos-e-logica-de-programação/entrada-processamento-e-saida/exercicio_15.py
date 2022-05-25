#entrada
preço = float(input("Digite o preço de fábrica do veículo: "))
percentual = float(input("Digite o percentual de lucro dos distribuidor: "))
imposto = float(input("Digite o valor percentual dos impostos aplicados ao preço de fábrica: "))

#processamento
percentualDeLucro = preço * (percentual / 100)
percentualDeImposto = preço * (imposto / 100)
valorTotal = preço + percentualDeLucro + percentualDeImposto

#saída
print("Valor do lucro do distribuidor: R$",percentualDeLucro)
print("Valor do imposto: R$",percentualDeImposto)
print("Valor total a ser pago: R$",valorTotal) 