CREATE DATABASE db_animal;

CREATE TABLE mst_animals (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, name VARCHAR(50), description VARCHAR(500));

CREATE TABLE images (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, animal_id INT NOT NULL, image VARCHAR(50));

INSERT INTO mst_animals (name, description) VALUES ('ゴリラ', '優しい性格で、バナナや葉だけではなく、昆虫も食べる雑食動物です。');
INSERT INTO mst_animals (name, description) VALUES ('ホッキョクグマ', '泳ぎが大得意で、何十kmも海を泳ぐことができます。');
INSERT INTO mst_animals (name, description) VALUES ('ニホンザル', '群れを作り集団生活をしています。知能が高く学習能力があります。');
INSERT INTO mst_animals (name, description) VALUES ('シマウマ', '名前の由来であるその縞模様は、外敵から身を守る保護色といわれています。');
INSERT INTO mst_animals (name, description) VALUES ('ツキノワグマ', '特徴は胸の三日月形の模様です。昼にも活動しますが、実は夜行性です。');
INSERT INTO mst_animals (name, description) VALUES ('ヒョウ', 'ご飯は木の上で食べることもあります。食事の時間にはその姿が見られるかもしれません。');

INSERT INTO images (animal_id, image) VALUES (1, 'animals_photo1.jpg');
INSERT INTO images (animal_id, image) VALUES (2, 'animals_photo2.jpg');
INSERT INTO images (animal_id, image) VALUES (3, 'animals_photo3.jpg');
INSERT INTO images (animal_id, image) VALUES (4, 'animals_photo4.jpg');
INSERT INTO images (animal_id, image) VALUES (5, 'animals_photo5.jpg');
INSERT INTO images (animal_id, image) VALUES (6, 'animals_photo6.jpg');
