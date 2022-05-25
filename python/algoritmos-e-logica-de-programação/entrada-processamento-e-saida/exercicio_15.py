# 15. O custo ao consumidor de um carro novo é a soma do preço de fábrica com o percentual de lucro do distribuidor e dos impostos aplicados ao preço de fábrica. Faça um programa que receba o preço de fábrica de um veículo, o percentual de lucro do distribuidor e o percentual de impostos, calcule e mostre:
# o valor correspondente ao lucro do distribuidor;
# o valor correspondente aos impostos;
# o preço final do veículo.

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