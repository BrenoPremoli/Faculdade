CREATE TABLE status (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255)
);

INSERT INTO status (nome) VALUES ('Todo');
INSERT INTO status (nome) VALUES ('Doing');
INSERT INTO status (nome) VALUES ('Done');

CREATE TABLE tarefa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255),
    descricao TEXT,
    atividades TEXT,
    statusId INT,
    prioridade ENUM('Verde', 'Amarelo', 'Vermelho'),
    dataInicio DATETIME DEFAULT CURRENT_TIMESTAMP,
    dataConclusao DATETIME DEFAULT CURRENT_TIMESTAMP,
    dataCadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (statusId) REFERENCES Status(id)
);
