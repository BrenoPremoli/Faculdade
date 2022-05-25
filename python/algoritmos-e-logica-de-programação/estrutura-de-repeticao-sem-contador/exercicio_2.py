# 2. Faça um programa que receba a altura de 5 pessoas. Encontre e apresente a altura da pessoa mais alta e da mais baixa.

pessoas = 0
while pessoas < 5:
    altura = float (input('Informe a altura: '))
    if pessoas == 0:
        alto = altura
        baixa = altura
    if altura >= alto:
        alto = altura
    if altura <= baixa:
        baixa = altura
    pessoas = pessoas + 1
print(f'Pessoa mais alta tem {alto:.2f} metros')
print(f'Pessoa mais baixa tem {baixa:.2f} metros')
  