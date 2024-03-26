
CREATE TABLE especialidade(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(100),
    sigla CHAR(3)
)engine INNODB;
 
CREATE TABLE medico(
    id_medico INTEGER AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    endereco VARCHAR(100) NOT NULL,
    numero CHAR(10),
    bairro VARCHAR(60),
    cidade VARCHAR(80),
    estado CHAR(2),
    crm VARCHAR(20),
    salario DECIMAL(12,2),
    celular VARCHAR(15),
    cod_esp INTEGER REFERENCES especialidade(id)
)engine INNODB;

CREATE TABLE paciente(
    id integer AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    endereco VARCHAR(100),
    numero CHAR(10),
    complemento VARCHAR(50),
    bairro VARCHAR(50),
    cidade VARCHAR(80),
    estado CHAR(2),
    cpf VARCHAR(11),
    rg VARCHAR(9),
    telefone VARCHAR(15),
    celular VARCHAR(15),
    email VARCHAR(100)
) engine INNODB;