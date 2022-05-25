# 8. Faça um algoritmo que calcule e exiba o salário reajustado de dez funcionários de acordo com a seguinte regra (pode implementar com o comando while ou for):
# Salário até 300, reajuste de 50%;
# Salários maiores que 300, reajuste de 30%.

funcionario = 1
while funcionario <= 10:
  salario = float(input("Digite seu salário: "))
  funcionario = funcionario + 1
  if salario <= 300:
    novo_salario = salario * (50 / 100)
    reajuste = salario + novo_salario
    print("Seu novo salário é de: R$",reajuste)
  else:
    novo_salario = salario * (30 / 100)
    reajuste = salario + novo_salario
    print("Seu novo salário é de: R$",reajuste)
print("\n")

for funcionario in range (1,11):
  salario = float(input("Digite seu salário: "))  
  if salario <= 300:
    novo_salario = salario * (50 / 100)
    reajuste = salario + novo_salario
    print("Seu novo salário é de: R$",reajuste)
  else:
    novo_salario = salario * (30 / 100)
    reajuste = salario + novo_salario
    print("Seu novo salário é de: R$",reajuste)
