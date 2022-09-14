# 4. Faça um programa que receba a idade e a altura de várias pessoas. Calcule e exiba a média das alturas das pessoas com mais de 20 anos. Para encerrar a entrada de dados, digite uma idade negativa ou igual a zero.

print("Para encerrar a entrada de dados, digite uma idade negativa ou igual a zero.")
idade = int(input("Informe sua idade: "))
soma_altura = 0
soma_pessoas = 0
while idade > 0:
  altura = float(input("Informe sua altura: "))
  if idade > 20:
    soma_altura = soma_altura + altura 
    soma_pessoas = soma_pessoas + 1
  idade = int(input("Informe sua idade: "))
media = soma_altura / soma_pessoas
if media > 0:
  print(f'A média das alturas de pessoas com mais de 20 anos é de {media:.2f} metros.')
else:
  print("Entrada de dados encerrada.")