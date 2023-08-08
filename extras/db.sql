USE ESTOQUE;

CREATE TABLE Usuarios (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    role ENUM('admin', 'gerente', 'funcionario') NOT NULL
);

CREATE TABLE Fornecedores (
    supplier_id INT PRIMARY KEY AUTO_INCREMENT,
    supplier_name VARCHAR(100) NOT NULL,
    contact_name VARCHAR(100) NOT NULL,
    contact_email VARCHAR(100) NOT NULL,
    contact_phone VARCHAR(20) NOT NULL
);

CREATE TABLE Suprimentos (
    supply_id INT PRIMARY KEY AUTO_INCREMENT,
    supply_name VARCHAR(100) NOT NULL,
    description TEXT,
    price_per_unit DECIMAL(10, 2) NOT NULL,
    quantity_in_stock INT NOT NULL
);

CREATE TABLE Transacoes (
    transaction_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    supply_id INT,
    supplier_id INT,
    transaction_type ENUM('compra', 'venda') NOT NULL,
    transaction_date DATETIME NOT NULL,
    quantity INT NOT NULL,
    total_price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES Usuarios(user_id),
    FOREIGN KEY (supply_id) REFERENCES Suprimentos(supply_id),
    FOREIGN KEY (supplier_id) REFERENCES Fornecedores(supplier_id)
);