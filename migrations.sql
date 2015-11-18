CREATE DATABASE serofed CHARACTER SET utf8;
USE serofed;
CREATE TABLE articles (
id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
category_id BIGINT UNSIGNED NOT NULL,
article_name VARCHAR(255) NOT NULL,
content TEXT NOT NULL,
create_date DATETIME
);
CREATE TABLE categories (
id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
category_name VARCHAR(255) NOT NULL,
parent BIGINT UNSIGNED NOT NULL,
section TINYINT NOT NULL,
position INT NOT NULL
);
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('1', 'Мусоргский', '0', '1', '1');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('2', 'Материалы', '1', '1', '2');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('3', 'Отзывы', '1', '1', '3');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('4', 'Выписки', '1', '1', '4');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('5', 'Скрябин', '0', '1', '5');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('6', 'Материалы', '5', '1', '6');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('7', 'Отзывы', '5', '1', '7');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('8', 'Выписки', '5', '1', '8');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('9', 'Рахманинов', '0', '1', '9');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('10', 'Материалы', '9', '1', '10');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('11', 'Отзывы', '9', '1', '11');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('12', 'Выписки', '9', '1', '12');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('13', 'История Музыки', '0', '1', '13');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('14', 'Зарубежье', '13', '1', '14');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('15', 'Разное', '13', '1', '15');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('16', 'Блок', '0', '2', '16');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('17', 'Материалы', '16', '2', '17');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('18', 'Отзывы', '16', '2', '18');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('19', 'Выписки', '16', '2', '19');

INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('20', 'Розанов', '0', '2', '20');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('21', 'Материалы', '20', '2', '21');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('22', 'Отзывы', '20', '2', '22');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('23', 'Выписки', '20', '2', '23');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('24', 'Современные записки', '0', '2', '24');
UPDATE `serofed`.`categories` SET `category_name`='Русское зарубежье' WHERE `id`='14';
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('25', 'Номера', '24', '2', '25');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('26', 'Отзывы', '24', '2', '26');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('27', 'Материалы', '24', '2', '27');
UPDATE `serofed`.`categories` SET `category_name`='Рахманинов' WHERE `id`='1';
UPDATE `serofed`.`categories` SET `category_name`='Мусоргский' WHERE `id`='9';
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('28', 'Русская литература ХIХ века', '0', '2', '28');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('29', 'Материалы', '28', '2', '29');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('30', 'История литературы', '0', '2', '30');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('31', 'Разное', '30', '2', '31');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('32', 'Зацепления', '0', '3', '32');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('33', 'Публикации', '32', '3', '33');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('34', 'Отклики', '32', '3', '34');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('35', 'Математика', '0', '3', '35');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('36', 'Публикации', '35', '3', '36');
INSERT INTO `serofed`.`categories` (`id`, `category_name`, `parent`, `section`, `position`) VALUES ('37', 'Разное', '0', '3', '37');

UPDATE `serofed`.`categories` SET `category_name`='Рахманинов и его эпоха' WHERE `id`='1';
UPDATE `serofed`.`categories` SET `category_name`='Отзывы современников' WHERE `id`='2';
UPDATE `serofed`.`categories` SET `category_name`='Хроника жизни и творчества' WHERE `id`='3';
UPDATE `serofed`.`categories` SET `category_name`='Музыкальная жизнь русского зарубежья' WHERE `id`='4';
UPDATE `serofed`.`categories` SET `category_name`='Работы Федякина Романа Васильевича' WHERE `id`='33';

ALTER TABLE articles ADD article_year SMALLINT UNSIGNED NOT NULL;