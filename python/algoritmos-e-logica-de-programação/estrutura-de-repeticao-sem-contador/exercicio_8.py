# 8. Faça um programa para o curso de ADS (6 módulos) que calcule e apresente os seguintes itens:
# Quantidade de homens e mulheres de cada módulo;
# Média de idades de cada módulo;
# Quantidade de homens e mulheres do curso todo;
# Média de idades do curso todo.

modulo = 0
total_m = 0
total_f = 0
total_media = 0
for modulo in range(1,7): # esta laço representa o curso inteiro
  contador = contador + 1
  m = 0
  f= 0
  soma_idade_m = 0
  soma_idade_f = 0
  idade = int(input('Informe a idade: '))
  if idade > 0:
    while idade > 0: # este laço representa cada módulo
      sexo = str(input("Digite seu sexo ('m' para 'Masculino' ou 'f' para 'Feminino'): "))
      if sexo == 'm' or sexo == 'M':
        m = m + 1
        soma_idade_m = soma_idade_m + idade
      elif sexo == 'f' or sexo == 'F':
        f = f + 1
        soma_idade_f = soma_idade_f + idade
      idade = int(input('Informe a idade: '))

    media = (soma_idade_m + soma_idade_f) / (f + m)
    print("\n")
    print("Módulo",modulo)
    print("Quantidade de homens:",m)
    print("Quantidade de mulheres:",f)
    print(f'Média de idade do módulo: {media:.1f} anos.')
    total_m = total_m + m
    total_f = total_f + f
    total_media = total_media + media / 6
print("\n")
print("Total do curso:")
print("Quantidade de homens do curso:",total_m)
print("Quantidade de mulheres do curso:",total_f)
print(f'Média de idade do curso: {total_media:.1f} anos.')
