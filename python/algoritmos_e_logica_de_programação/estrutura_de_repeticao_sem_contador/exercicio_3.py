# 3. Faça um programa que receba a altura de várias pessoas. Encontre e apresente a altura da pessoa mais alta e da mais baixa. Para encerrar a entrada de dados, zero na altura, mas esta não poderá ser considerada como resposta da altura da pessoa mais baixa.

altura = float (input('Informe a altura: '))
alto = altura
baixa = altura
while altura > 0:
    if altura >= alto:
        alto = altura
    if altura <= baixa:
        baixa = altura
    altura = float (input('Informe a altura: '))
print(f'Pessoa mais alta tem {alto:.2f} metros')
print(f'Pessoa mais baixa tem {baixa:.2f} metros')