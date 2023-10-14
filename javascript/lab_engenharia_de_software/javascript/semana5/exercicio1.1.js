document.addEventListener('DOMContentLoaded', function () {

    let div = document.getElementById('contador'); 

    function atualizaContador(contadorId, valor) {
        let contador = document.getElementById(contadorId);
        contador.textContent = valor;
    }

    function soma() {
        let total = document.getElementById('total');
        total.textContent = contadorM + contadorH;
    }

    function zera() {
        contadorH = 0;
        contadorM = 0;
        atualizaContador('contaHomem', contadorH);
        atualizaContador('contaMulher', contadorM);
        soma();
    }

    let contadorH = 0;
    let contadorM = 0;

    let imgH = document.createElement('img');
    imgH.src = 'imagens/male.png';

    let buttonAumentaHomem = document.createElement('button');
    buttonAumentaHomem.id = 'aumentaHomem';
    let imgAumentaHomem = document.createElement('img');
    imgAumentaHomem.src = 'imagens/+.png';
    let spanContaHomem = document.createElement('span');
    spanContaHomem.id = 'contaHomem';
    spanContaHomem.textContent = '0';

    let buttonDiminuiHomem = document.createElement('button');
    buttonDiminuiHomem.id = 'diminuiHomem';
    let imgDiminuiHomem = document.createElement('img');
    imgDiminuiHomem.src = 'imagens/-.png';

    buttonAumentaHomem.appendChild(imgAumentaHomem);
    buttonAumentaHomem.addEventListener('click', () => {
        contadorH++;
        atualizaContador('contaHomem', contadorH);
        soma();
    });

    buttonDiminuiHomem.appendChild(imgDiminuiHomem);
    buttonDiminuiHomem.addEventListener('click', () => {
        if (contadorH > 0) {
            contadorH--;
            atualizaContador('contaHomem', contadorH);
            soma();
        }
    });

    let imgM = document.createElement('img');
    imgM.src = 'imagens/female.png';

    let buttonAumentaMulher = document.createElement('button');
    buttonAumentaMulher.id = 'aumentaMulher';
    let imgAumentaMulher = document.createElement('img');
    imgAumentaMulher.src = 'imagens/+.png';
    let spanContaMulher = document.createElement('span');
    spanContaMulher.id = 'contaMulher';
    spanContaMulher.textContent = '0';

    let buttonDiminuiMulher = document.createElement('button');
    buttonDiminuiMulher.id = 'diminuiMulher';
    let imgDiminuiMulher = document.createElement('img');
    imgDiminuiMulher.src = 'imagens/-.png';

    buttonAumentaMulher.appendChild(imgAumentaMulher);
    buttonAumentaMulher.addEventListener('click', () => {
        contadorM++;
        atualizaContador('contaMulher', contadorM);
        soma();
    });

    buttonDiminuiMulher.appendChild(imgDiminuiMulher);
    buttonDiminuiMulher.addEventListener('click', () => {
        if (contadorM > 0) {
            contadorM--;
            atualizaContador('contaMulher', contadorM);
            soma();
        }
    });

    div.appendChild(imgH);
    div.appendChild(buttonAumentaHomem);
    div.appendChild(spanContaHomem);
    div.appendChild(buttonDiminuiHomem);
    div.appendChild(imgM);
    div.appendChild(buttonAumentaMulher);
    div.appendChild(spanContaMulher);
    div.appendChild(buttonDiminuiMulher);

    let h2 = document.createElement('h2');
    h2.textContent = 'HomensㅤㅤMulheres';
    document.body.appendChild(h2);

    let h3 = document.createElement('h3');
    let spanTotal = document.createElement('span');
    spanTotal.id = 'total';
    spanTotal.textContent = '0';
    h3.textContent = 'Total: ';
    h3.appendChild(spanTotal);
    document.body.appendChild(h3);

    let p = document.createElement('p');
    let buttonZera = document.createElement('button');
    buttonZera.id = 'zera';
    let imgZera = document.createElement('img');
    imgZera.src = 'imagens/zera.png';
    buttonZera.appendChild(imgZera);
    buttonZera.addEventListener('click', () => {
        zera();
    });
    p.appendChild(buttonZera);
    document.body.appendChild(p);
    
});