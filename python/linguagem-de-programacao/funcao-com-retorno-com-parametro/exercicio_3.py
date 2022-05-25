# 3. (Função com retorno com parâmetro) Faça um programa contendo uma função/método que receba um valor de porcentagem de aumento via parâmetro, aplique este aumento a um salário de um funcionário, retorne e apresente o novo salário.

def calcular_aumento(porcentagem, salario):
    novo_salario = salario + (salario * porcentagem / 100)
    return novo_salario

def main():
    porc = float(input('Digite a porcentagem: '))
    s = float(input('Digite o salário: R$ '))
    print()
    print('Novo salário do funcionário: R$ {:.2f}'.format(calcular_aumento(porc, s )))

main()