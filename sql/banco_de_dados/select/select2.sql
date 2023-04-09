CREATE DATABASE ANIVERSARIOS;

USE aniversarios;

CREATE TABLE torneios (
codigoTorneio INT NOT NULL,
nome VARCHAR(30),
vitorias REAL,
melhor REAL,
tamanho REAL,
PRIMARY KEY (codigoTorneio)
);

INSERT INTO torneios (codigoTorneio, nome, vitorias, melhor, tamanho)
VALUES ('01', 'Dolly', '7', '245', '8.5'),
('02', 'Etta', '4', '283', '9'),
('03', 'Irma', '9', '266', '7'),
('04', 'Barbara', '2', '197', '7.5'),
('05', 'Gladys', '13', '273', '8');

CREATE TABLE refeicoes ( 
codigoNome INT NOT NULL,
nome VARCHAR(30), 
data_nascimento DATE, 
entrada VARCHAR(30), 
acompanhamento VARCHAR(30), 
sobremesa VARCHAR(30),
PRIMARY KEY (codigoNome)
);

INSERT INTO refeicoes (codigoNome, nome, data_nascimento, entrada, acompanhamento, sobremesa) 
VALUES ('01', 'Dolly', '1946-01-19', 'steak', 'salad', 'cake'), 
('02', 'Etta', '1938-01-25', 'chicken', 'fries', 'ice cream'), 
('03', 'Irma', '1941-02-18', 'tofu', 'fries', 'cake'), 
('04', 'Barbara', '1948-12-25', 'tofu', 'salad', 'ice cream'), 
('05', 'Gladys', '1944-05-28', 'steak', 'fries', 'ice cream');

/* EXERCÍCIOS */

/* Selecione nome da tabela torneios - ok*/
SELECT nome FROM torneios;

/* Selecione nome, vitorias e melhor da tabela torneios - ok*/
SELECT nome, vitorias, melhor FROM torneios;

/* Selecione tudo da tabela refeições*/
SELECT * FROM refeicoes;

/* Selecione nome da tabela refeições com entrada de tofu - ok*/
SELECT nome FROM refeicoes WHERE entrada = 'tofu';

/* Selecione nome da tabela torneios onde nome seja com letra "a" no fim - ok*/
SELECT nome FROM torneios WHERE nome LIKE '%a';

/* Renomear codigoTorneio para codigo - ok*/
SELECT codigoTorneio AS codigo FROM torneios;

/* Selecione as vitorias da tabela torneios onde o número de vitórias seja maior ou igual a 5 - ok*/
SELECT COUNT(vitorias) FROM torneios WHERE vitorias >= 5;

/* Retornar a média de vitórias da tabela torneios - ok*/
SELECT AVG(vitorias) FROM torneios;

/* Retornar soma de tamanho da tabela torneio - ok*/
SELECT SUM(tamanho) FROM torneios;

/* Retornar soma do codigo da tabela refeições - ok*/
SELECT SUM(codigoNome) FROM refeicoes;

/* Retornar o menor valor melhor da tabela torneios - ok*/
SELECT MIN(melhor) FROM torneios;

/* Retornar o maior valor melhor da tabela torneios - ok*/
SELECT MAX(melhor) FROM torneios;

/* Retornar a primeira sobremesa em ordem alfabética da tabela refeições - ok*/
SELECT MIN(sobremesa) FROM refeicoes;

/* Retornar a última sobremesa em ordem alfabética da tabela refeições - ok*/
SELECT MAX(sobremesa) FROM refeicoes;

/* Conta quantas sobremesas de cada tipo tem em refeições - ok*/
SELECT COUNT(nome), sobremesa FROM refeicoes GROUP BY sobremesa;

/* Mostra o nome e vitórias da tabela torneios em ordem cresecente de vitórias - ok*/
SELECT nome, vitorias FROM torneios ORDER BY vitorias;

/* Mostra o nome e vitórias da tabela torneios em ordem decrescente de vitórias - ok*/
SELECT nome, vitorias FROM torneios ORDER BY vitorias DESC;

/* Função não pode ser executada depois do "WHERE" - ?*/
SELECT COUNT(nome), acompanhamento FROM refeicoes WHERE COUNT(nome) >= 0;

/* Retorna o valor e o nome de cada sobremesa da tabela refeição que foi pedido 2 vezes ou mais - ok*/
SELECT COUNT(nome), sobremesa FROM refeicoes GROUP BY sobremesa HAVING COUNT(nome) >= 2;

/* Junta uma tabela com a outra pegando seus nomes que são o atributo em comum entre as tabelas - ok*/
SELECT refeicoes.codigoNome, refeicoes.nome, refeicoes.data_nascimento, torneios.vitorias 
FROM refeicoes 
JOIN torneios ON refeicoes.nome=torneios.nome;

/* Fazendo inserção na tabela torneios - ok*/
INSERT INTO torneios (codigoTorneio, nome, vitorias, melhor, tamanho) 
VALUES ('06', 'Breno', '20', '300', '10');

/* Fazendo inserção na tabela refeições - ok*/
INSERT INTO refeicoes (codigoNome, nome, data_nascimento, entrada, acompanhamento, sobremesa) 
VALUES ('06', 'Breno', '2003-07-27', 'steak', 'fries', 'ice cream');

/* Junta uma tabela com a outra pegando seus nomes que são o atributo em comum entre as tabelas - ok*/
SELECT refeicoes.codigoNome, refeicoes.nome, refeicoes.data_nascimento, torneios.vitorias 
FROM refeicoes 
JOIN torneios ON refeicoes.nome=torneios.nome;

/* Junta uma tabela com a outra pegando seus nomes que são o atributo em comum entre as tabelas junto ao registro da tabela refeição que é o atributo LEFT - ok*/
SELECT refeicoes.codigoNome, refeicoes.nome, refeicoes.data_nascimento, torneios.vitorias 
FROM refeicoes 
LEFT JOIN torneios ON refeicoes.nome=torneios.nome;

/* Junta uma tabela com a outra pegando seus nomes que são o atributo em comum entre as tabelas junto ao registro da tabela torneios que é o atributo RIGHT - ok*/
SELECT refeicoes.codigoNome, refeicoes.nome, refeicoes.data_nascimento, torneios.vitorias 
FROM refeicoes 
RIGHT JOIN torneios ON refeicoes.nome=torneios.nome;

/* Retorna somente os nomes distintos entre refeiçõe e torneios - ok*/
SELECT nome FROM refeicoes UNION SELECT nome FROM torneios;

/* Retorna todos os valores, inclusive duplicados - ok*/
SELECT nome FROM refeicoes UNION ALL SELECT nome FROM torneios;

/* O número de colunas retornadas por select é diferente - ?*/
SELECT nome FROM refeicoes UNION SELECT nome, vitorias FROM torneios;

/* Lista os nomes com o valor de tamanho maior que "Gladys" - ok*/
SELECT nome, tamanho FROM torneios 
WHERE tamanho > (
SELECT tamanho FROM torneios WHERE nome = 'Gladys'
);

/* Mostra o tamanho dos nomes com número de vitórias acima da média feito pelo atributo AVG - ok*/
SELECT nome, tamanho FROM torneios AS t 
WHERE vitorias > (
SELECT AVG(vitorias) FROM torneios WHERE tamanho <= t.tamanho
);

/* Mostra as refeições do nome com menos vitórias no torneio - ok*/
SELECT nome, entrada, acompanhamento, sobremesa 
FROM refeicoes 
WHERE nome = (SELECT nome FROM torneios 
WHERE vitorias = (SELECT MIN(vitorias) FROM torneios));



