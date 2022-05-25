# 8. Elabore duas estruturas, como é apresentado a seguir:
# CLIENTE	DOCUMENTOS
# cod_cli	num_doc
# nome	    cod_cli
# fone	    dia_venc
#           dia_pag
#           valor
#           juros

# Sabe-se que um documento só pode ser cadastrado para um cliente que já exista.
# Considere que podem existir, no máximo, 15 clientes e 30 documentos. Crie um vetor para clientes e outro para documentos.
# Crie um menu para a realização de cada uma das operações especificadas a seguir:

# SISTEMA GERENCIADOR DE CLIENTES E DOCUMENTOS 
# Cadastrar clientes
# Relatório de clientes
# Cadastrar documentos
# Relatório de documentos
# Excluir clientes sem documentos
# Excluir documentos individuais pelo número
# Excluir documentos por cliente
# Excluir documentos por período
# Alterar as informações dos clientes
# Mostrar o total de documentos de determinado cliente
# Sair
# Qual opção deseja?

#.................................................................................................

# Para cada item do menu, desenvolva uma função.
# A seguir são apresentados os detalhes de implementação de cada opção do menu:
# Cadastrar clientes — não pode existir mais que um cliente com o mesmo código.
# Relatório de clientes - listar todos os clientes cadastrados.
# Cadastrar documentos — ao cadastrar um documento, se o dia de pagamento for maior que o dia de vencimento, calcular o campo ‘juros’ do registro documentos (5% sobre o valor original do documento).
# Relatório de documentos - listar todos os documentos cadastrados.
# Excluir clientes — um cliente só poderá ser excluído se não existir nenhum documento associado a ele.
# Excluir documentos individuais — por meio de seu número. Caso o documento não exista, o programa deverá mostrar a mensagem "Documento não encontrado".
# Excluir documentos por cliente — o programa deverá informar o código do cliente e excluir todos os seus documentos. Caso o cliente não exista, deverá mostrar a mensagem "Cliente não encontrado".
# Excluir documentos por período — o programa deverá informar o dia inicial e o dia final e excluir todos os documentos que possuam data de vencimento nesse período.
# Alterar as informações sobre os clientes — só NÃO altere o código do cliente.
# Mostrar o total de documentos de determinado cliente.

class cliente:
    codigo = 0
    nome = ''
    telefone = 0

class documento:
    numero = 0
    codigo = 0
    dia_vencimento = 0
    dia_pagamento = 0
    valor = 0.0
    juros = 0.0

def menu():
    print('1. Cadastrar clientes')
    print('2. Relatório de clientes')
    print('3. Cadastrar documentos')
    print('4. Relatório de documentos')
    print('5. Excluir clientes sem documentos')
    print('6. Excluir documentos individuais pelo número')
    print('7. Excluir documentos por cliente')
    print('8. Excluir documentos por período')
    print('9. Alterar as informações dos clientes')
    print('10. Mostrar o total de documentos de determinado cliente')
    print('11. Sair')
    print()
    escolha = int(input('Escolha uma opção: '))
    return escolha

def cadastrar_cliente(vet_cliente):
    for i in range(3): #for i in range(15)
        c = cliente()
        c.codigo = int(input('Digite o código do cliente: '))
        c.nome = input('Digite o nome do cliente: ')
        c.telefone = int(input('Digite o telefone do cliente: '))
        vet_cliente.append(c)
        cont = 0
        for i in range(len(vet_cliente)):
            if vet_cliente[i].codigo == c.codigo:
                indice_cliente = i
                cont = cont + 1
        if cont >= 2: 
            print()
            print('Número do código de cliente repetido: {}. Cadastro deletado.'.format(vet_cliente[i].codigo))
            vet_cliente.pop(indice_cliente)
        print()
    return vet_cliente

def relatorio_cliente(vet_cliente):
    if len(vet_cliente) > 0:
        for i in range(len(vet_cliente)):
            print('Código do cliente: {} \tNome do cliente: {} \tTelefone: {}'.format(vet_cliente[i].codigo, vet_cliente[i].nome, vet_cliente[i].telefone))
    else:
        print('Não há cadastro de cliente(s).')
    print()
    
def cadastrar_documento(vet_documento, vet_cliente):
    for i in range(4): #for i in range(30)
        d = documento()
        d.numero = int(input('Digite o número do documento: '))
        d.codigo = int(input('Digite o código do cliente: '))
        d.dia_vencimento = int(input('Digite o dia de vencimento: '))
        d.dia_pagamento = int(input('Digite o dia de pagamento: '))
        d.valor = float(input('Digite o valor: R$ '))
        d.juros = 5
        if d.dia_pagamento > d.dia_vencimento:
            d.valor = d.valor + (d.valor * d.juros / 100)
        vet_documento.append(d)
        cont_mais = 0
        for i in range(len(vet_cliente)):
            if vet_cliente[i].codigo != d.codigo:
                cont_mais = cont_mais + 1
        if cont_mais == len(vet_cliente):
            for i in range(len(vet_documento)):
                if d.codigo == vet_documento[i].codigo:
                    print()
                    print('Número do código de cliente inexistente: {}. Cadastro deletado.'.format(d.codigo))
                    x = i
                    vet_documento.pop(x)
        print()
    return vet_documento

def relatorio_documento(vet_documento): 
    if len(vet_documento) > 0:
        for i in range(len(vet_documento)):
            print('Número do documento: {} \tCódigo do cliente: {} \tDia de vencimento: {} \tDia de pagamento: {} \tValor: R$ {}'.format(vet_documento[i].numero, vet_documento[i].codigo, vet_documento[i].dia_vencimento, vet_documento[i].dia_pagamento, vet_documento[i].valor, vet_documento[i].juros))
    else:
        print('Não há cadastro de cliente(s).')
    print()

def excluir_cliente(vet_cliente, vet_documento): 
    if len(vet_cliente) > 0:
        cont_cli = len(vet_cliente)
        for i in range(len(vet_cliente)):
            cont = 0
            cont_cli = cont_cli - 1
            for i in range(len(vet_documento)):
                if vet_cliente[cont_cli].codigo != vet_documento[i].codigo:
                    cont = cont + 1
                if cont == len(vet_documento):
                    print('Nenhum documento associado ao cliente: {}. Cadastro deletado.'.format(vet_cliente[cont_cli].codigo))
                    vet_cliente.pop(cont_cli)
    else:
        print('Não há cadastro de cliente(s).')
    print()

def excluir_document_indi(number, vet_documento):
    if len(vet_documento) > 0:
        cont = 0
        cont_doc = len(vet_documento)
        print()
        for i in range(len(vet_documento)):
            cont_doc = cont_doc - 1
            if number == vet_documento[cont_doc].numero:
                print('Documento excluído pelo código - Número do documento: {} \tCódigo do cliente: {} \tDia de vencimento: {} \tDia de pagamento: {} \tValor: R$ {}'.format(vet_documento[cont_doc].numero, vet_documento[cont_doc].codigo, vet_documento[cont_doc].dia_vencimento, vet_documento[cont_doc].dia_pagamento, vet_documento[cont_doc].valor, vet_documento[cont_doc].juros))
                vet_documento.pop(cont_doc)
                cont = cont + 1
        if cont == 0:
            print('Documento não encontrado.')
    else:
        print('\nNão há cadastro de cliente(s).')
    print()

def excluir_document_client(code, vet_documento):
    if len(vet_documento) > 0:
        cont = 0
        cont_doc = len(vet_documento)
        print()
        for i in range(len(vet_documento)):
            cont_doc = cont_doc - 1
            if code == vet_documento[cont_doc].codigo:
                print('Documento excluído - Número do documento: {} \tCódigo do cliente: {} \tDia de vencimento: {} \tDia de pagamento: {} \tValor: R$ {}'.format(vet_documento[cont_doc].numero, vet_documento[cont_doc].codigo, vet_documento[cont_doc].dia_vencimento, vet_documento[cont_doc].dia_pagamento, vet_documento[cont_doc].valor, vet_documento[cont_doc].juros))
                vet_documento.pop(cont_doc)
                cont = cont + 1
        if cont == 0:
            print('Cliente não encontrado.')
    else:
        print('\nNão há cadastro de cliente(s).')
    print()

def excluir_document_period(day_i, day_f, vet_documento):
    if len(vet_documento) > 0:
        cont = 0
        cont_doc = len(vet_documento)
        print()
        for i in range(len(vet_documento)):
            cont_doc = cont_doc - 1
            if vet_documento[cont_doc].dia_vencimento >= day_i and vet_documento[cont_doc].dia_vencimento <= day_f:
                print('Documento excluído - Número do documento: {} \tCódigo do cliente: {} \tDia de vencimento: {} \tDia de pagamento: {} \tValor: R$ {}'.format(vet_documento[cont_doc].numero, vet_documento[cont_doc].codigo, vet_documento[cont_doc].dia_vencimento, vet_documento[cont_doc].dia_pagamento, vet_documento[cont_doc].valor, vet_documento[cont_doc].juros))
                vet_documento.pop(cont_doc)
                cont = cont + 1
        print(1
              )
        if cont == 0:
            print('Não há documentos nesse período.\n')
    else:
        print('\nNão há cadastro de cliente(s).\n')
        
def alterar(code, vet_cliente):
    if len(vet_cliente) > 0:
        cont = 0
        print()
        for i in range(len(vet_cliente)):
            if code == vet_cliente[i].codigo:
                print('Alteração cadastral\n')
                vet_cliente[i].nome = input('Digite seu nome: ')
                vet_cliente[i].telefone = int(input('Digite seu telefone: '))
                print('\nAlteração feita com sucesso.\n')
                cont = cont + 1
        if cont == 0:
            print('Cliente não encontrado.\n')
    else:
        print('\nNão há cadastro de cliente(s).\n')

def mostrar_doc_cliente(code, vet_documento):
    if len(vet_documento) > 0:
        cont = 0
        print()
        for i in range(len(vet_documento)):
            if code == vet_documento[i].codigo:
                print('Número do documento: {} \tCódigo do cliente: {} \tDia de vencimento: {} \tDia de pagamento: {} \tValor: R$ {}'.format(vet_documento[i].numero, vet_documento[i].codigo, vet_documento[i].dia_vencimento, vet_documento[i].dia_pagamento, vet_documento[i].valor, vet_documento[i].juros))
                cont = cont + 1
        if cont == 0:
            print('Não encontrado.\n')
        else:
            print('\nNúmero de documentos do cliente: {}\n'.format(cont))
    else:
        print('\nNão há cadastro de cliente(s).\n')


def main():
    vetor_cliente = []
    vetor_documento = []
    x = menu()
    while x >= 1:
        print()
        if x == 1:
            vetor_cliente = cadastrar_cliente(vetor_cliente)
        elif x == 2:
            relatorio_cliente(vetor_cliente)
        elif x == 3:
            vet_documento = cadastrar_documento(vetor_documento, vetor_cliente)
        elif x == 4:
            relatorio_documento(vetor_documento)
        elif x == 5:
            excluir_cliente(vetor_cliente, vetor_documento)
        elif x == 6:
            numero = int(input('Digite o número do documento a ser excluído: '))
            excluir_document_indi(numero, vetor_documento)
        elif x == 7:
            codigo = int(input('Digite o número de código do cliente para os documentos do mesmo serem excluídos: '))
            excluir_document_client(codigo, vetor_documento)
        elif x == 8:
            dia_i = int(input('Digite o dia inicial: '))
            dia_f = int(input('Digite o dia final: '))
            excluir_document_period(dia_i, dia_f, vetor_documento)
        elif x == 9:
            codigo = int(input('Digite o número de código do cliente para alterar as informações: '))
            alterar(codigo, vetor_cliente)
        elif x == 10:
            codigo = int(input('Digite o número de código do cliente para ver o total de documentos: '))
            mostrar_doc_cliente(codigo, vetor_documento)
        elif x == 11:
            break
        else:
            print('Comando Inválido. Tente Novamente.\n')
        x = menu()

main()