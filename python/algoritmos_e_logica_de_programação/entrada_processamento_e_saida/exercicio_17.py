# 17. Um trabalhador recebeu seu salário e o depositou em sua conta bancária. Esse trabalhador emitiu dois cheques e agora deseja saber seu saldo atual. O banco criou uma taxa para a operação bancária de retirada que tem que pagar um imposto de 0.38% e o saldo inicial da conta está zerado.

#entrada
salario = float(input("Digite o valor do salário: "))
cheque1 = float(input("Digite o valor do primeiro cheque: "))
cheque2 = float(input("Digite o valor do segundo cheque: "))

#processamento
imposto1 = cheque1 * 0.38 / 100
saque1 = cheque1 + imposto1
imposto2 = cheque2 * 0.38 / 100
saque2 = cheque2 + imposto2
saldoAtual = salario - (saque1 + saque2)

#saída
print("O saldo atual da conta é de: R$",saldoAtual)