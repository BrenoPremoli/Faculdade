# 9. (Função com retorno sem parâmetro) Foi realizada uma pesquisa sobre algumas características físicas de cinco habitantes de uma região. Foram coletados os seguintes dados de cada habitante: idade, sexo (M - masculino ou F - feminino), cor dos olhos (A - azuis ou C - castanhos), cor dos cabelos (L - louros, P - pretos ou C - castanhos).

# 1. Faça uma função/método que leia esses dados, armazenando-os em vetores (listas);
# 2. Faça uma função/método que determine e devolva a função principal a média de idades das pessoas com olhos castanhos e cabelos pretos;
# 3. Faça uma função/método que determine e devolva a função principal a maior idade entre os habitantes;
# 4. Faça uma função/método que determine e devolva a função principal a quantidade de indivíduos do sexo feminino com idade entre 18 e 35 anos(inclusive) e que tenham olhos azuis e cabelos louros.

idade = []
sexo = []
olho = []
cabelo = []

def ler():
    for i in range(1,3):
        idade.append(int(input('Digite sua idade: ')))
        sexo.append(input('Digite seu sexo ("F" - Feminino ou "M" - Masculino): '))
        olho.append(input('Digite a cor do seu olho ("A" - Azul ou "C" - Castanho): '))
        cabelo.append(input('Digite a cor do seu cabelo ("L" - Loiro, "P" - Preto ou "C" - Castanho): '))
        print()

def media():
    soma_idade = 0
    cont = 0
    cont_vetor = 0
    for n in range(1,3):
        if (olho[cont_vetor] == "C" or olho[cont_vetor] == "c") and (cabelo[cont_vetor] == "P" or cabelo[cont_vetor] == "p"):
            soma_idade = soma_idade + idade[cont_vetor]
            cont = cont + 1
        cont_vetor = cont_vetor + 1
    if cont == 0:
        media_idade =  'Não há pessoas com olhos castanhos e cabelos pretos.'
    else:
        media_idade = soma_idade / cont
    return media_idade

def maior():
    cont_vetor = 0
    maior_idade = 0
    for n in range(1,3):
        if idade[cont_vetor] >= maior_idade:
            maior_idade = idade[cont_vetor]
        cont_vetor = cont_vetor + 1
    return maior_idade

def quantidade():
    cont = 0
    cont_vetor = 0
    for n in range(1,3):
        if (sexo[cont_vetor] == "F" or sexo[cont_vetor] == "f") and idade[cont_vetor] >= 18 and idade[cont_vetor] <= 35 and (olho[cont_vetor] == "A" or olho[cont_vetor] == "a") and (cabelo[cont_vetor] == "L" or cabelo[cont_vetor] == "l"):
            cont = cont + 1
        cont_vetor = cont_vetor + 1
    return cont

def main():
    ler()
    print('Média de idades das pessoas com olhos castanhos e cabelos pretos: {}'.format(media()))
    print('Maior idade entre os habitantes: {:.0f} anos.'.format(maior()))
    print('Quantidade de indivíduos do sexo feminino com idade entre 18 e 35 anos e que tenham olhos azuis e cabelos louros: {:.0f} pessoa(s).'.format(quantidade()))

main()
