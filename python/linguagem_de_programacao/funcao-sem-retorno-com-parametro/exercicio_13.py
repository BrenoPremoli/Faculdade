# 13. Uma senha deve ser criada a partir da seguinte regra:
# Dois primeiros números
# Um caracter especial
# Cinco letras
# Faça uma função/método para verificar esta senha esta correta ou não, use FATIAMENTO DE STR Aqui deverá ocorrer, PASSAGEM DE PARÂMETRO POR VALOR.

def verificar(senha):
    if senha[0:2].isdecimal() == True and senha[0:2].isalpha() == False:
        print('1ª Condição Verdadeira')
    else:
        print('1ª Condição Falsa')
    if not senha[2:3].isdecimal() == True and not senha[2:3].isalpha() == True:
        print('2ª Condição Verdadeira')
    else:
        print('2ª Condição Falsa')
    if senha[3:8].isalpha() == True and senha[3:8].isdecimal() == False:
        print('3ª Condição Verdadeira')
    else:
        print('3ª Condição Falsa')
    print()
    if senha[0:2].isdecimal() == True and senha[0:2].isalpha() == False and not senha[2:3].isdecimal() == True and not senha[2:3].isalpha() == True and senha[3:8].isalpha() == True and senha[3:8].isdecimal() == False:
        print('SENHA CORRETA')
    else:
        print('SENHA INCORRETA')
    print()
    print('Caracteres da 1ª condição:',senha[0:2])
    print('Caracteres da 2ª condição:',senha[2:3])
    print('Caracteres da 3ª condição:',senha[3:8])

def main():
    sen = input('Digite uma senha: ')
    verificar(sen)

main()

