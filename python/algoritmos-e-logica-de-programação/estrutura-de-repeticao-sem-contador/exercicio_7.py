# 7. No final do ano muitas pessoas compram presentes. Faça um programa que registre alguns dados das pessoas, usando como critério de parada a letra ‘n’, para a pergunta “Deseja cadastrar outro (‘s’/’n’)?”, para identificar o perfil dos compradores numa loja de roupas e apresente como resultado a:
# a) Quantidade de mulheres e de homens;
# b) Quantidade de mulheres e de homens abaixo e acima de 18 anos.

m = 0
f = 0
m_maior = 0
f_maior = 0
m_menor = 0
f_menor = 0
parada = (input("Deseja cadastrar os dados? Digite 's' para 'Sim' ou 'n' para 'Não': "))
while parada == 's' or parada == 'S':
  sexo = str(input("Digite seu sexo ('m' para 'Masculino' ou 'f' para 'Feminino'): "))
  if sexo == 'm' or sexo == 'M':
    idade_m = int(input("Digite sua idade: "))
    m = m + 1
    if idade_m > 18:
      m_maior = m_maior + 1
    elif idade_m < 18:
      m_menor = m_menor + 1 
  elif sexo == 'f' or sexo == 'F':
    idade_f = int(input("Digite sua idade: "))
    f = f + 1
    if idade_f > 18:
      f_maior = f_maior + 1
    elif idade_f < 18:
      f_menor = f_menor + 1
  else:
    print("Não corresponde.")
  parada = (input("Deseja cadastrar os dados? Digite 's' para 'Sim' ou 'n' para 'Não': ")) 
print("Quantidade de homens:",m)
print("Quantidade de mulheres:",f)
print("Quantidade de homens acima dos 18 anos:",m_maior)
print("Quantidade de mulheres acima dos 18 anos:",f_maior)
print("Quantidade de homens abaixo dos 18 anos:",m_menor) 
print("Quantidade de mulheres abaixo dos 18 anos:",f_menor)    


