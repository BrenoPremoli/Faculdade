# 1. Construir um algoritmo para calcular e apresentar o total de salários pagos de funcionários, mas não é informado a quantidade de pessoas, então use como critério de parada (condição da estrutura de repetição, digitar zero no salário para sair.

print('Algoritmo correto e SEM gambiarra.............')
salario = float (input('Informe o salário e para sair digite zero: '))
total = 0
while salario > 0:
    total = total + salario
    salario = float (input('Informe o salário e para sair digite zero.....: ')) 
print(f'O total de salário pagos foi R$ {total:.2f}')
# Estrutura de repetição com gambiarra
print('Algoritmo correto e COM gambiarra.............')
salario = 1
total = 0
while salario > 0:
    salario = float (input('Informe o salário e para sair digite zero.....: '))
    if salario > 0:
        total = total + salario
print(f'GAMBIARRA............O total de salário pagos foi R$ {total:.2f}')