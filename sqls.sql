DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (

  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `edad` varchar(20) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `dia` int(2) NOT NULL,
  `mes` varchar(15) NOT NULL,
  `anyo` int(4) NOT NULL,
  `ministeriop` varchar(35) NOT NULL,
  `ministerios` varchar(35) NOT NULL,
  `bautizado` varchar(2) NOT NULL,
  `profesion` varchar(35) NOT NULL,
  `estadocivil` varchar(7) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `municipio` varchar(30) NOT NULL,
  `parroquia` varchar(30) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `gci` varchar(5) NOT NULL,
  `lider` varchar(50) NOT NULL,
  `correo` varchar(35) NOT NULL,
  `telefono` varchar(11) NOT NULL,   

	PRIMARY KEY (`cedula`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;