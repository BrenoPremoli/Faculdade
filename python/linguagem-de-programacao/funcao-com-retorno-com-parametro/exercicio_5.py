# 5. (Função com retorno com parâmetro) Faça um programa contendo uma função/método que receba um valor de porcentagem de aumento e um salário via parâmetro, aplique este aumento ao salário do funcionário. Na parte principal do programa, na chamada da função, utilize um laço de repetição para ler 10 salários, chame a função para aplicar o aumento e gerar o novo salário, ainda dentro da estrutura de repetição acumule os novos salários e ao final apresente quanto será gasto no novo salário. Também apresente qual será a diferença entre o que se pagava para todos os funcionário e o que será pago após o aumento.

def calcular_aumento(porc, salario):
    novo = salario + (salario * porc / 100)
    return novo 

def main():
    total_novo = 0
    total_antigo = 0
    porcentagem = float(input('Informe a porcentagem: '))
    print()
    for i in range(1,3):
        s = float(input('Informe o salário: R$ '))
        total_antigo = total_antigo + s
        calcular_aumento(porcentagem, s)
        total_novo = total_novo + calcular_aumento(porcentagem,s)
    print()
    print('Total após o aumento: R$ {:.2f}'.format(total_novo))
    diferenca = total_novo - total_antigo
    print('Diferença entre os salários: {:.2f}'.format(diferenca))

main()