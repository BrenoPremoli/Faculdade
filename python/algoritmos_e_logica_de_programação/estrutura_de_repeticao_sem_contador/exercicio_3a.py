# 3.a) Faça um programa que receba a altura e o nome de várias pessoas. Encontre e apresente a altura da pessoa mais alta e da mais baixa. Para encerrar a entrada de dados, zero na altura, mas esta não poderá ser considerada como resposta da altura da pessoa mais baixa.
altura = float (input('Informe a altura: '))
alto = altura
baixa = altura
while altura > 0:
    nome = input('Informe o nome: ')
    if altura >= alto:
        alto = altura
        nome_alto = nome
    if altura <= baixa:
        baixa = altura
        nome_baixa = nome
    altura = float (input('Informe a altura: '))
print(f'{nome_alto} é mais alta e tem {alto:.2f} metros')
print(f'{nome_baixa} é mais baixa e tem {baixa:.2f} metros')