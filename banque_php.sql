DROP DATABASE IF EXISTS banque_php;
CREATE DATABASE IF NOT EXISTS banque_php CHARACTER SET 'utf8' ;
USE banque_php;

DROP USER IF EXISTS 'BanquePHP'@'localhost';
CREATE USER 'BanquePHP'@'localhost' IDENTIFIED BY 'MdPadmin';
GRANT ALL PRIVILEGES ON banque_php. * TO 'BanquePHP'@'localhost';


CREATE TABLE customer (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    customer_name VARCHAR(20) NOT NULL,
    customer_lastname VARCHAR(20) NOT NULL,
    birth_date DATE NOT NULL,
    street_number INT(5) NOT NULL,
    street VARCHAR(255) NOT NULL,
    postal_code VARCHAR(15) NOT NULL,
    city VARCHAR(100) NOT NULL,
    phone INT(13) NOT NULL,
    mail VARCHAR(255) NOT NULL UNIQUE,
    customer_password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE account (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    account_type VARCHAR(50) NOT NULL,
    create_date TIMESTAMP NOT NULL,
    account_number VARCHAR(11) NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    uncover_permission INT(20),
    customer_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (customer_id) REFERENCES customer(id) ON DELETE CASCADE
);

CREATE TABLE operation (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    operation_date TIMESTAMP NOT NULL,
    operation_type VARCHAR(15) NOT NULL,
    operation_amount DECIMAL(10,2) NOT NULL,
    label VARCHAR(50) NOT NULL,
    account_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (account_id) REFERENCES account(id) ON DELETE CASCADE
);

CREATE TABLE credit_card (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    account_id INT UNSIGNED NOT NULL,
    card_number VARCHAR(16) NOT NULL,
    crypto INT(3) NOT NULL,
    card_type VARCHAR(15) NOT NULL,
    payement_perm INT(5) NOT NULL,
    debit_perm INT(5) NOT NULL,
    without_contact VARCHAR(5) NOT NULL,
    code INT(4) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (account_id) REFERENCES account(id) ON DELETE CASCADE
);

INSERT INTO customer (customer_name, customer_lastname, birth_date, street_number, street, postal_code, city, phone, mail, customer_password)
VALUES 
('Martin','DURAND', '1975-05-12', 5,'rue de la Soif', '60000', 'Beauvais', 0689455612, 'martin.durand@mail.fr', '$2y$10$A2QEiKYGpHsZtusrfuojp.cJwFaNDEUVgc1CQwYkDm45GSDdZn40a'),
('Berangère', 'Gallard', '1992-11-08', 12, 'avenue du champs', '60590', 'Trie-Château', 0621325465, 'berangere.gallard@mail.fr', '$2y$10$srqxgtMCIB85zCpVVKIGDeKfudm4CK31mvVubO8h3CQMXlnYcvq76'),
('Gerard', 'SEIGNEUR', '1964-05-26', 1, 'bis rue du long du mur', '27140', 'Bazincourt-sur-Epte', 0665548798, 'gerard.seigneur@mail.fr', '$2y$10$oOuCd20JKl2Ehtap8sOqh.v1BVTGaelN/8rQ5pUqKuu.rpH3uHPOe');

INSERT INTO account (account_type, create_date, account_number, amount, uncover_permission, customer_id)
VALUES
('Compte Courant', NOW(), '72548659321', -56.65, 200, 1),
('Compte Courant', NOW(), '45782154789', 852.68, 250, 2),
('Livret A', NOW(), '12756354578', 1345.6, null, 1),
('Compte Courant', NOW(), '58496712345', 1654.32, 500, 3),
('Compte professionnel', NOW(), '12345678901', 4586.59, 3000, 3),
('Livret epargne', NOW(), '87656584235', 8564.54, null, 3);

INSERT INTO credit_card (account_id, card_number, crypto, card_type, payement_perm, debit_perm, without_contact, code)
VALUES
(1, '1234567890123456', 987, 'Electron', 300, 200, 'yes', 4546),
(2, '4567890123456789', 654, 'MasterCard', 500, 500, 'yes', 7894),
(4, '7890123456789012', 124, 'MasterCard', 800, 500, 'yes', 7531), 
(5, '6543210987654321', 954, 'GoldPro', 2500, 1500, 'no', 8642);

INSERT INTO operation (operation_type, operation_amount, label,account_id)
VALUES
('Virement',58.3, 'Remboursement facture',1),
("Paiement Carte", -56.4, 'Amazon', 1),
("Virement",562.36, 'Accompte du mois de Juin',2),
('Paiement Carte', -895.25,'Achat fournitures',5),
('Virement', 200, 'premier versement',3),
('Virement', 200, 'premier versement',4),
('virement',100, 'premier versement',6)