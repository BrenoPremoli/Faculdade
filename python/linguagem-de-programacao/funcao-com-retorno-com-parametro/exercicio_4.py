# 4. (Função com retorno com parâmetro) Faça um programa contendo uma função/método que receba duas notas (P1, P2) calcule a média, chame outra função na main que avalie se este aluno esta aprovado ou reprovado retornando a str/string 'Aprovado' ou 'Reprovado'.

def calcular_nota(nota1, nota2):
    media = (nota1 + nota2) / 2
    print()
    print('Média: {:.2f}'.format(media))
    return media
    
def avaliar(n):
    if n >= 6:
        print('ALUNO APROVADO')
    else:
        print('ALUNO REPROVADO') 
    
def main():
    n1 = float(input('Digite a primeira nota: '))
    n2 = float(input('Digite a segunda nota: '))
    x = calcular_nota(n1, n2)
    avaliar(x)

main()