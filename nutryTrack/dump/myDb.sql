CREATE DATABASE NUTRYTRACK;
USE NUTRYTRACK;

CREATE TABLE USUARIOS (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    EMAIL VARCHAR(40) UNIQUE,
    USERNAME VARCHAR(15) UNIQUE,
    PASSWORD VARCHAR(150)
);

CREATE TABLE RECIPES (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(100) UNIQUE,
    PROTEINS INT,
    CARBS INT,
    FATS INT,
    KCALS INT
);

CREATE TABLE REGISTERS (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    USER_ID INT,
    RECIPE_ID INT,
    DATE DATE,
    GRAMS INT
);

ALTER TABLE REGISTERS
ADD CONSTRAINT fk_registers_user
FOREIGN KEY (USER_ID) REFERENCES USUARIOS(ID)
ON DELETE CASCADE;

ALTER TABLE REGISTERS
ADD CONSTRAINT fk_registers_recipe
FOREIGN KEY (RECIPE_ID) REFERENCES RECIPES(ID);

USE NUTRYTRACK;

INSERT INTO RECIPES (NAME, PROTEINS, CARBS, FATS, KCALS) VALUES
('Pechuga plancha', 31, 0, 3, 165),
('Pollo asado', 27, 0, 6, 180),
('Pavo lonchas', 18, 2, 1, 84),
('Ternera magra', 26, 0, 10, 217),
('Cerdo magro', 22, 0, 6, 150),
('Lomo embuchado', 50, 2, 12, 330),
('Jamon serrano', 30, 0, 15, 241),
('Chorizo dulce', 24, 2, 35, 455),
('Salchicha fresca', 14, 1, 30, 350),
('Albondigas carne', 17, 5, 14, 230),

('Salmon plancha', 20, 0, 13, 208),
('Atun al natural', 23, 0, 1, 100),
('Atun en aceite', 26, 0, 20, 290),
('Merluza horno', 18, 0, 2, 90),
('Bacalao fresco', 24, 0, 1, 105),
('Sardinas lata', 25, 0, 10, 208),
('Boqueron frito', 21, 6, 12, 210),
('Gamba cocida', 24, 0, 1, 99),
('Pulpo cocido', 15, 2, 1, 82),
('Calamar plancha', 16, 3, 2, 92),

('Huevo cocido', 13, 1, 11, 155),
('Clara huevo', 11, 0, 0, 52),
('Tortilla francesa', 11, 1, 10, 150),
('Revuelto huevo', 10, 2, 12, 160),
('Huevos fritos', 13, 1, 18, 220),

('Lentejas cocidas', 9, 20, 0, 116),
('Garbanzos cocidos', 9, 27, 3, 164),
('Alubias cocidas', 8, 21, 0, 110),
('Soja texturizada', 50, 30, 1, 330),
('Tofu firme', 12, 3, 6, 120),
('Tempeh soja', 19, 9, 11, 195),
('Hummus casero', 8, 14, 9, 166),
('Falafel frito', 13, 31, 17, 333),
('Edamame', 11, 8, 5, 121),
('Seitan', 25, 14, 2, 170),

('Arroz blanco', 2, 28, 0, 130),
('Arroz integral', 3, 23, 1, 111),
('Pasta cocida', 5, 25, 1, 131),
('Pasta integral', 6, 23, 1, 124),
('Cuscus', 12, 72, 1, 376),
('Quinoa cocida', 4, 21, 2, 120),
('Bulgur cocido', 3, 18, 0, 83),
('Patata cocida', 2, 17, 0, 87),
('Boniato horno', 2, 20, 0, 90),
('Pan integral', 9, 41, 4, 247),

('Avena', 13, 60, 7, 379),
('Cornflakes', 7, 84, 1, 357),
('Granola', 10, 64, 15, 450),
('Muesli', 12, 60, 8, 380),
('Arroz inflado', 7, 80, 1, 380),

('Manzana', 0, 14, 0, 52),
('Platano', 1, 23, 0, 96),
('Pera', 0, 15, 0, 57),
('Naranja', 1, 12, 0, 47),
('Mandarina', 1, 13, 0, 53),
('Melon', 1, 8, 0, 34),
('Sandia', 1, 8, 0, 30),
('Uvas', 1, 17, 0, 69),
('Fresas', 1, 7, 0, 33),
('Kiwi', 1, 15, 0, 61),

('Aguacate', 2, 9, 15, 160),
('Tomate', 1, 3, 0, 18),
('Zanahoria', 1, 10, 0, 41),
('Cebolla', 1, 9, 0, 40),
('Lechuga', 1, 2, 0, 15),
('Espinaca', 3, 4, 0, 23),
('Brocoli', 3, 7, 0, 34),
('Coliflor', 2, 5, 0, 25),
('Calabacin', 1, 3, 0, 17),
('Berenjena', 1, 6, 0, 25),

('Aceite oliva', 0, 0, 100, 884),
('Mantequilla', 1, 1, 82, 717),
('Margarina', 1, 1, 80, 720),
('Mayonesa', 1, 1, 75, 680),
('Pesto', 4, 4, 47, 450),

('Almendras', 21, 22, 50, 579),
('Nueces', 15, 14, 65, 654),
('Avellanas', 15, 17, 61, 628),
('Anacardos', 18, 30, 44, 553),
('Pistachos', 20, 28, 45, 560),
('Cacahuetes', 26, 16, 49, 567),
('Semillas chia', 17, 42, 31, 486),
('Semillas lino', 18, 29, 42, 534),
('Semillas sesamo', 18, 23, 50, 573),
('Pipas girasol', 21, 20, 51, 584),

('Yogur natural', 4, 6, 3, 61),
('Yogur griego', 9, 4, 10, 130),
('Leche entera', 3, 5, 3, 61),
('Leche desnatada', 3, 5, 0, 35),
('Queso fresco', 8, 3, 4, 98),
('Queso curado', 25, 1, 33, 402),
('Requeson', 12, 3, 4, 98),
('Kefir', 3, 4, 3, 60),
('Batido proteico', 25, 5, 2, 140),
('Helado vainilla', 4, 23, 11, 207);



