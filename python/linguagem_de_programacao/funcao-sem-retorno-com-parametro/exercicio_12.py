# 12. Faça uma função/método para verificar uma senha, contando/apresentando quantos dígitos numéricos e quantas letras existem. Aqui deverá ocorrer, PASSAGEM DE PARÂMETRO POR VALOR.

def verificar(senha):
    contNum = 0
    contLet = 0
    for i in range(len(senha)):
        if senha[i].isdecimal() == True:
            contNum = contNum + 1
        elif senha[i].isalpha() == True:
            contLet = contLet + 1
    print('Números existentes: {}'.format(contNum))
    print('Letras existentes: {}'.format(contLet))
    
def main():
  sen = str(input('Digite uma senha: '))
  verificar(sen)

main()