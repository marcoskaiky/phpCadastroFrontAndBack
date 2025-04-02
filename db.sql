CREATE TABLE compras ( id INT AUTO_INCREMENT PRIMARY KEY, ativo VARCHAR(10) NOT NULL, quantidade INT NOT NULL, valor_unitario DECIMAL(10,2) NOT NULL, data_compra DATE NOT NULL );
CREATE TABLE dividendos (id INT AUTO_INCREMENT PRIMARY key,ativo varchar(10) not null,valor decimal(10, 2) not null,data_recebimento date NOT NULL);
CREATE TABLE cadastroUser(id INT AUTO_INCREMENT PRIMARY key,nome varchar(50) not null,cpf varchar(11) not null,telefone varchar(11) not null,email varchar(30) not null,musica varchar(30) notnull);
 