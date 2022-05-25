#entrada
horas = int(input("Digite o número de horas trabalhadas: "))
salarioMinimo = float(input("Digite o valor do salário míninmo: "))

#processamento
horaTrabalhada = salarioMinimo / 2
salarioBruto = horas * horaTrabalhada 
imposto = salarioBruto * (3 / 100)
salarioAReceber = salarioBruto - imposto 

#saída
print("O valor do salário líquido é de: R$",salarioAReceber)