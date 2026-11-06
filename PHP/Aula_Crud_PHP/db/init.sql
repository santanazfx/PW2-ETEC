-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS aulaphp
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE aulaphp;
DROP TABLE clientes;


-- Criação da tabela clientes
CREATE TABLE IF NOT EXISTS clientes (
    IdCliente INT AUTO_INCREMENT PRIMARY KEY,
    NomeCliente VARCHAR(50) NOT NULL,
    SobrenomeCliente VARCHAR(50) NOT NULL,
    Turma ENUM( 'ADM','DS','QUI','OUT') DEFAULT 'DS' NOT NULL,
    Sexo ENUM('M', 'F', 'NA') DEFAULT 'NA' NOT NULL,
    RmAluno CHAR(5) NOT NULL, `Data_Cadastro`
    DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
