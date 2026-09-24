-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS aulaphp
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE aulaphp;

-- Criação da tabela cliente
CREATE TABLE IF NOT EXISTS cliente (
    IdCliente INT AUTO_INCREMENT PRIMARY KEY,
    NomeCliente VARCHAR(50) NOT NULL,
    SobrenomeCliente VARCHAR(50) NOT NULL,
    Sexo ENUM('M', 'F', 'N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Garante privilégios do usuário da aplicação sobre o banco
GRANT ALL PRIVILEGES ON aulaphp.* TO 'aluno_user'@'%';
FLUSH PRIVILEGES;
