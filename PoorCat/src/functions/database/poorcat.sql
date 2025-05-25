CREATE DATABASE poorcat;

USE poorcat;

CREATE TABLE usuario(
cpf INT(13) PRIMARY KEY,
nome VARCHAR(150) NOT NULL,
email VARCHAR(50) NOT NULL UNIQUE,
senha VARCHAR(8) NOT NULL,
data_nasc DATE NOT NULL,
ocupacao VARCHAR(100) NOT NULL,
grau_en VARCHAR(100) NOT NULL,
ini_cont VARCHAR(10) NOT NULL,
economia double,
salario double
);      

CREATE TABLE categoria(
sigla CHAR(5) PRIMARY KEY NOT NULL,
nome VARCHAR(100) NOT NULL,
saldo DOUBLE,
teto double
);
        
CREATE TABLE gasto(
cod INT (3) PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
data_gasto DATE NOT NULL,
valor DOUBLE NOT NULL,
cpf_usuario INT(13) NOT NULL,
sig_cat CHAR(5) NOT NULL 
);

ALTER TABLE gasto ADD FOREIGN KEY (cpf_usuario) REFERENCES usuario(cpf);
ALTER TABLE gasto ADD FOREIGN KEY (sig_cat) REFERENCES categoria(sigla);

CREATE TABLE lembrete(
cod INT(3) PRIMARY KEY AUTO_INCREMENT,
texto VARCHAR(200) NOT NULL
);

INSERT INTO usuario(cpf, nome, email, senha, data_nasc, ocupacao, grau_en, ini_cont, economia, salario) VALUES (123456781, 'Daniele', 'dani@email.com', '123', '07/19/2002', 'estudante', 'superior', '10', 0.0, 1200.00);
INSERT INTO categoria(sigla, nome, saldo, teto) VALUES ('MERC', 'MERCADO', 1000, 1000);
INSERT INTO categoria(sigla, nome, saldo, teto) VALUES ('HOSP', 'HOSPITAL', 1000, 1000);
INSERT INTO categoria(sigla, nome, saldo, teto) VALUES ('MANU', 'MANUTENCAO', 1000, 1000);
INSERT INTO gasto(nome, data_gasto, valor, cpf_usuario, sig_cat) VALUES ('mercado', '2023/10/10', 100, '123456781', 'MERC');
INSERT INTO gasto(nome, data_gasto, valor, cpf_usuario, sig_cat) VALUES ('mercado', '2023/11/10', 1000, '123456781', 'MERC');

DELETE FROM gasto WHERE cod = 17;

SELECT * FROM usuario WHERE email = 'dani@email.com' AND senha = '123';

SELECT g.sig_cat, g.nome, g.valor, g.data_gasto FROM gasto g;
SELECT * FROM gasto INNER JOIN usuario ON gasto.cpf_usuario = usuario.cpf;
SELECT c.teto, c.saldo FROM categoria AS c INNER JOIN gasto ON c.sigla = gasto.sig_cat;

INSERT INTO categoria(sigla, nome, saldo, teto) VALUES ('MERC', 'MERCADO', 1000, 1000);
