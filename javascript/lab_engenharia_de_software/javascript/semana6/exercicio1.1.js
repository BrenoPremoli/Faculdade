document.addEventListener('DOMContentLoaded', function () {
    let expressao = ''; 
    let resultado = ''; 

    function adicionar(numero) {
        expressao += numero;
        atualizarTela();
    }

    function calcular() {
            resultado = eval(expressao);
            expressao = resultado.toString(); 
            atualizarTela();
    }

    function limpar() {
        expressao = '';
        resultado = '';
        atualizarTela();
    }

    function inverterSinal() {
        if (expressao !== '0') {
            if (expressao !== '') {
                if (expressao.startsWith('-')) {
                    expressao = expressao.substring(1); 
                } else {
                    expressao = '-' + expressao;
                }
                atualizarTela();
            }
        }
    }
    
    function atualizarTela() {
        let total = document.getElementById('total');
        if (!total) {
            total = document.createElement('p');
            total.id = 'total';
            document.getElementById('calculadora').appendChild(total);
        }
        total.textContent = expressao || resultado;
    }

    function criarBotao(texto, classe, funcao) {
        let botao = document.createElement('button');
        botao.textContent = texto;
        botao.className = classe;
        botao.addEventListener('click', funcao);
        return botao;
    }

    let div = document.getElementById('calculadora');

    let tabela = document.createElement('table');

    let linha1 = document.createElement('tr');

    let acButton = document.createElement('td');
    acButton.appendChild(criarBotao('AC', 'cor2', function () {
        limpar();
    }));
    linha1.appendChild(acButton);

    let invertButton = document.createElement('td');
    invertButton.appendChild(criarBotao('+/-', 'cor2', function () {
        inverterSinal();
    }));
    linha1.appendChild(invertButton);

    let porcemButton = document.createElement('td');
    porcemButton.appendChild(criarBotao('%', 'cor2', function () {
        adicionar('%');
    }));
    linha1.appendChild(porcemButton);

    let divideButton = document.createElement('td');
    divideButton.appendChild(criarBotao('/', 'cor1', function () {
        adicionar('/');
    }));
    linha1.appendChild(divideButton);

    tabela.appendChild(linha1);


    let linha2 = document.createElement('tr');

    let button9 = document.createElement('td');
    button9.appendChild(criarBotao('9', 'cor3', function () {
        adicionar('9');
    }));
    linha2.appendChild(button9);
    
    let button8 = document.createElement('td');
    button8.appendChild(criarBotao('8', 'cor3', function () {
        adicionar('8');
    }));
    linha2.appendChild(button8);
    
    let button7 = document.createElement('td');
    button7.appendChild(criarBotao('7', 'cor3', function () {
        adicionar('7');
    }));
    linha2.appendChild(button7);

    let multiplicaButton = document.createElement('td');
    multiplicaButton.appendChild(criarBotao('*', 'cor1', function () {
        adicionar('*');
    }));
    linha2.appendChild(multiplicaButton);

    tabela.appendChild(linha2);


    let linha3 = document.createElement('tr');

    let button4 = document.createElement('td');
    button4.appendChild(criarBotao('4', 'cor3', function () {
        adicionar('4');
    }));
    linha3.appendChild(button4);

    let button5 = document.createElement('td');
    button5.appendChild(criarBotao('5', 'cor3', function () {
        adicionar('5');
    }));
    linha3.appendChild(button5);

    let button6 = document.createElement('td');
    button6.appendChild(criarBotao('6', 'cor3', function () {
        adicionar('6');
    }));
    linha3.appendChild(button6);

    let menosButton = document.createElement('td');
    menosButton.appendChild(criarBotao('-', 'cor1', function () {
        adicionar('-');
    }));
    linha3.appendChild(menosButton);

    tabela.appendChild(linha3);


    let linha4 = document.createElement('tr');

    let button1 = document.createElement('td');
    button1.appendChild(criarBotao('1', 'cor3', function () {
        adicionar('1');
    }));
    linha4.appendChild(button1);

    let button2 = document.createElement('td');
    button2.appendChild(criarBotao('2', 'cor3', function () {
        adicionar('2');
    }));
    linha4.appendChild(button2);

    let button3 = document.createElement('td');
    button3.appendChild(criarBotao('3', 'cor3', function () {
        adicionar('3');
    }));
    linha4.appendChild(button3);

    let maisButton = document.createElement('td');
    maisButton.appendChild(criarBotao('+', 'cor1', function () {
        adicionar('+');
    }));
    linha4.appendChild(maisButton);

    tabela.appendChild(linha4);


    let linha5 = document.createElement('tr');

    let colspan2 = document.createElement('td');
    colspan2.setAttribute('colspan', '2');
    
    let button0 = document.createElement('button');
    button0.textContent = '0';
    button0.className = 'botao0';
    button0.addEventListener('click', function () {
        adicionar('0');
    });
    linha5.appendChild(button0);
    
    colspan2.appendChild(button0); 
    linha5.appendChild(colspan2); 
    
    let virgulaButton = document.createElement('td');
    virgulaButton.appendChild(criarBotao(',', 'cor3', function () {
        adicionar('.');
    }));
    linha5.appendChild(virgulaButton); 
    
    let igualButton = document.createElement('td');
    igualButton.appendChild(criarBotao('=', 'cor1', function () {
        calcular();
    }));
    linha5.appendChild(igualButton);
    
    tabela.appendChild(linha5);

    div.appendChild(tabela);
});