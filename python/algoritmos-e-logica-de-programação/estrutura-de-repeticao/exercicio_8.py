#entrada
deposito = float(input("Qual o valor a ser depositado?(em R$) "))
juros = float(input("Qual a taxa de juros?(em %) "))

#processamento
rendimento = 30 * (juros / 100)
valorTotal = deposito + rendimento

#saída
print("Seu depósito obteve rendimento de R$",rendimento,"nesse mês.")
print("Seu valor total é de R$",valorTotal)