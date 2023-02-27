create Database literie3000

use literie3000;

-- Table qui regroupe
create table matelas
(
id INT primary key auto_increment,
marque_id int,
image Varchar(255),
dimension_id  int,
prix int
prix_promo int
);

-- Table de données
create table marque
(
id INT primary key auto_increment,
name Varchar(50) 
);

create table prix
(
id primary key int auto_increment,
prix int ,
);

create table dimension
(
id primary key int auto_increment,
namedim Varchar(50) 
);

-- rempli les colones

Insert into dimension
(namedim)
VALUES 
('90 X 190'),
('140 X 190'),
('160 X 200'),
('200 X 200')

insert into prix
(namedim)

VALUES 
('90 X 190'),
('140 X 190'),
('160 X 200'),
('200 X 200');

insert into marque 
(name)
VALUES
('EPEDA'),
('DREAMWAY'),
('BULTEX'),
('DORSOLINE'),
('MEMORYLINE');

-- Données Communes

insert into matelas
(marque_id, image, dimension_id, prix,prix_promo)
VALUES
(1,"",1,759,529),
(2,"",1,809,709),
(3,"",2,759,529),
(1,"",3,1019,509);

