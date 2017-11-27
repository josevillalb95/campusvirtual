-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `aula`;
CREATE TABLE `aula` (
  `id_aula` varchar(24) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `id_tarea` int(11) NOT NULL AUTO_INCREMENT,
  `grado` varchar(20) NOT NULL,
  PRIMARY KEY (`id_aula`),
  UNIQUE KEY `id_tarea` (`id_tarea`)
) ENGINE=MyISAM DEFAULT CHARSET=armscii8;

INSERT INTO `aula` (`id_aula`, `id_docente`, `id_tarea`, `grado`) VALUES
('22Primero',	22,	10,	'Primero'),
('22cinco',	22,	9,	'cinco'),
('23Tercero',	23,	8,	'Tercero'),
('23Primero',	23,	7,	'Primero'),
('22Cuarto',	22,	11,	'Cuarto'),
('251-BAT',	25,	12,	'1-BAT'),
('271BAT',	27,	13,	'1BAT'),
('392ESO',	39,	14,	'2ESO'),
('414ESO',	41,	15,	'4ESO'),
('443ESO',	44,	16,	'3ESO');

DROP TABLE IF EXISTS `persona`;
CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contra` varchar(40) NOT NULL,
  `user` varchar(40) NOT NULL,
  `tipo` varchar(15) NOT NULL DEFAULT '',
  `grado` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_persona`)
) ENGINE=MyISAM DEFAULT CHARSET=armscii8;

INSERT INTO `persona` (`id_persona`, `nombre`, `apellido`, `email`, `contra`, `user`, `tipo`, `grado`) VALUES
(1,	'irene',	'admi',	'edukeos@gmail.com',	'0192023a7bbd73250516f069df18b500',	'adminirene',	'administrador',	NULL),
(24,	'pablito',	'clavito',	'pablit@gmail.com',	'202cb962ac59075b964b07152d234b70',	'pablitoclavito',	'estudiante',	'Tercero'),
(23,	'juan',	'peluso',	'peluso@gmail.com',	'202cb962ac59075b964b07152d234b70',	'puluso',	'profesor',	'cinco'),
(22,	'julio',	'cesar',	'julioprofe@gmail.com',	'202cb962ac59075b964b07152d234b70',	'julioprofe',	'profesor',	'Tercero'),
(21,	'milo',	'bebe',	'milito@gmail.com',	'202cb962ac59075b964b07152d234b70',	'milobebe',	'estudiante',	'Primero'),
(28,	'pepo',	'ullua',	'pepo@gmail.com',	'202cb962ac59075b964b07152d234b70',	'pepo',	'estudiante',	'1BAT'),
(27,	'zico',	'rome',	'zico@gmail.com',	'202cb962ac59075b964b07152d234b70',	'zico',	'profesor',	'1BAT'),
(29,	'pocho',	'lavesi',	'pochito@gmail.com',	'202cb962ac59075b964b07152d234b70',	'pocho',	'estudiante',	'1BAT'),
(30,	'CAMILA',	'DASD',	'DASD@GMAI.COM',	'202cb962ac59075b964b07152d234b70',	'CAM',	'estudiante',	'1ESO'),
(32,	'JASDJASD',	'SADASD',	'',	'202cb962ac59075b964b07152d234b70',	'PEEP',	'estudiante',	'1ESO'),
(33,	'juan',	'lili',	'prueba@gmail.com',	'202cb962ac59075b964b07152d234b70',	'juanli',	'estudiante',	'1ESO'),
(34,	'juan',	'gimenez',	'juangimenez@gmail.com',	'202cb962ac59075b964b07152d234b70',	'juang',	'profesor',	'1ESO'),
(35,	'pablo',	'fernandez',	'pabli@gmail.com',	'202cb962ac59075b964b07152d234b70',	'pabloprofe',	'profesor',	'1ESO'),
(36,	'pedrio',	'jer',	'jose@fas.com',	'202cb962ac59075b964b07152d234b70',	'per',	'estudiante',	'1ESO'),
(37,	'jhaDH',	'KLJASLKDJ2@DSAD.COM',	'',	'202cb962ac59075b964b07152d234b70',	'WRQW',	'estudiante',	'1ESO'),
(38,	'JOSE2',	'ASODJO',	'SDE2@GMAIL.COM',	'202cb962ac59075b964b07152d234b70',	'DAMBER',	'estudiante',	'4ESO'),
(39,	'luciano',	'perez',	'lucho@gmail.com',	'202cb962ac59075b964b07152d234b70',	'luchoprofe',	'profesor',	'2ESO'),
(40,	'albert',	'jirafales',	'alber@gmail.com',	'202cb962ac59075b964b07152d234b70',	'albert',	'estudiante',	'2ESO'),
(41,	'emilio',	'atias',	'emi@gmail.com',	'202cb962ac59075b964b07152d234b70',	'emiliopro',	'profesor',	'4ESO'),
(42,	'bartolome',	'mitre',	'bart@gmail.com',	'202cb962ac59075b964b07152d234b70',	'bart',	'estudiante',	'4ESO'),
(43,	'federico',	'kurty',	'fede@gmail.com',	'202cb962ac59075b964b07152d234b70',	'fede',	'estudiante',	'4ESO'),
(44,	'rivadavia',	'caece',	'caece@gmai.com',	'202cb962ac59075b964b07152d234b70',	'proferiva',	'profesor',	'3ESO'),
(45,	'mariano',	'moreno',	'more@gmail.com',	'202cb962ac59075b964b07152d234b70',	'moreno',	'estudiante',	'3ESO');

DROP TABLE IF EXISTS `respuesta`;
CREATE TABLE `respuesta` (
  `id_respuesta` int(11) NOT NULL AUTO_INCREMENT,
  `id_tarea` varchar(10) NOT NULL,
  `respuesta` varchar(3500) CHARACTER SET armscii8 NOT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_respuesta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `respuesta` (`id_respuesta`, `id_tarea`, `respuesta`, `fecha`, `id_usuario`) VALUES
(17,	'11',	'ahora siiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiijejje',	'2017-11-25',	28),
(18,	'11',	'me parece que si ',	'2017-11-25',	29),
(19,	'13',	'despacioto ',	'2017-11-25',	40),
(20,	'10',	'oasjdojaoreje',	'2017-11-25',	21),
(21,	'14',	'la ballena tiene 302 dientes ',	'2017-11-25',	42),
(22,	'14',	'',	'2017-11-25',	43),
(23,	'14',	'',	'2017-11-25',	43),
(24,	'14',	'la ballena tiene 104 dientes ',	'2017-11-25',	43),
(25,	'15',	'rectangulo ',	'2017-11-25',	45),
(26,	'16',	'por su condicion fisica y porque es depredador',	'2017-11-25',	45);

DROP TABLE IF EXISTS `tarea`;
CREATE TABLE `tarea` (
  `id_tarea` int(11) NOT NULL AUTO_INCREMENT,
  `tarea` varchar(3500) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_respuesta` varchar(14) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  PRIMARY KEY (`id_tarea`)
) ENGINE=MyISAM DEFAULT CHARSET=armscii8;

INSERT INTO `tarea` (`id_tarea`, `tarea`, `id_docente`, `fecha`, `id_respuesta`) VALUES
(11,	'zico le cortaron el pelo y parece una rata',	27,	'2017-11-28',	'271BAT'),
(10,	'4534rgd',	22,	'2017-11-16',	'22Primero'),
(12,	'kkkkkkkkkkkkkkkkkkkkkka',	27,	'2017-11-17',	'271BAT'),
(8,	'ves que anda lo mas biennnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn',	22,	'2017-11-23',	'22Primero'),
(7,	'joseeeeeeeeeeeeeeeeeeeee',	22,	'2017-11-14',	'22Cuarto'),
(6,	'pepe anda',	22,	'2017-11-16',	'22Cuarto'),
(13,	'como se llama la cancion que conpuso luis fonsi y daddy yankee',	39,	'2017-11-30',	'392ESO'),
(14,	'cuantos dientes tiene una ballena? ',	41,	'2017-11-29',	'414ESO'),
(15,	'como se llama los rectangulos que tienen un lado recto ',	44,	'2017-11-29',	'443ESO'),
(16,	'porque el leon es el rey de la selva',	44,	'2017-12-06',	'443ESO');

-- 2017-11-27 13:12:13
