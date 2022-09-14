# 22. Faça um programa que receba o custo de um espetáculo teatral e o preço do convite desse espetáculo. Esse programa deverá calcular e mostrar a quantidade de convites que devem ser vendidos para que, pelo menos, o custo do espetáculo seja alcançado.

#entrada
custo = float(input("Digite o custo do espetáculo teatral: "))
precoDoConvite = float(input("Digite o preço do convite para o espetáculo: "))

#processamento
quantidadeDeConvites = custo / precoDoConvite

#saída
print("A quantidade de convites que devem ser vendidos para alcançar o preço do espetáculo é de:",quantidadeDeConvites)