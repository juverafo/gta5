DROP DATABASE IF EXISTS gta5;

CREATE DATABASE gta5;

use gta5;

CREATE TABLE category (
  id_category INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  title_category VARCHAR(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE product (
  id_product INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  title_product VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  picture VARCHAR(255) NOT NULL,
  id_category INT,
  FOREIGN KEY (id_category) REFERENCES category(id_category)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE user (
  id_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  pass TEXT NOT NULL,
  mail VARCHAR(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE orders (
  id_order INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  id_user INT,
  date_order TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
  FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE purchase (
  id_purchase INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  id_product INT,
  id_order INT,
  FOREIGN KEY (id_product) REFERENCES product(id_product),
  FOREIGN KEY (id_order) REFERENCES orders(id_order)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;