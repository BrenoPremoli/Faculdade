# 1. Faça um programa que calcule e apresente a média de alturas de uma sala de 35 alunos. Informe também quantos alunos e quais (índice/posição) são os que possuem idade superior a 25 anos.​ Use dois vetores, um para altura e outro para idade. Não use nenhuma função pronta da linguagem Python.

alturas = [] 
idades = []
soma_alturas = 0
for i in range(4):
    alturas.append(float(input('Digite uma altura: ')))
    idades.append(int(input('Digite uma idade: ')))
    soma_alturas = soma_alturas + alturas[i]
media = soma_alturas / len(alturas)
print(f'A média de alturas é {media:.2f}\n\n')
cont = 0
for i in range(4):
    if idades[i] > 25:
        cont = cont + 1
        print('O aluno nº',i+1, 'possui mais que 25 anos. A idade dele é',idades[i] )
print('\nForam encontrados',cont, 'alunos com idade superior a 25 anos.')