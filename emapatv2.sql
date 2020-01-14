-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2020 a las 02:10:50
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `emapatv2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `usuario`, `clave`) VALUES
(1, 'ronaldo', '12345678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bandeja`
--

CREATE TABLE `bandeja` (
  `dni` int(8) NOT NULL,
  `medidor` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `mensaje` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bandeja`
--

INSERT INTO `bandeja` (`dni`, `medidor`, `estado`, `numero`, `fecha`, `mensaje`) VALUES
(51738984, 'DX10775166', 'PROCEDE', 3, '2020-01-07', 'SU SOLICITUD PROCEDE'),
(51738984, 'DX10775166', 'no procede', 3, '2020-01-09', 'no procede'),
(51738984, 'DX10775166', 'PROCEDE', 3, '2020-01-09', 'procede'),
(51738984, 'DX10775166', 'NO PROCEDE', 3, '2020-01-09', 'hemos rebizado su consumo y es normal..que cunsuma eso par mas informacion llamar al 3232323');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bandeja_operario`
--

CREATE TABLE `bandeja_operario` (
  `dni` int(8) NOT NULL,
  `medidor` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `mensaje` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bandeja_operario`
--

INSERT INTO `bandeja_operario` (`dni`, `medidor`, `fecha`, `asunto`, `mensaje`) VALUES
(51738984, 'DX10775166', '2020-01-07', 'MEDICION DE AGUA', 'ESTOY EN DESACUERDO CON LA MEDICION DE AGUA DE ESTE MES..'),
(51738984, 'DX10775166', '2020-01-09', 'QUE FUE', 'HOLA ESTOY CON PROBLEMAS'),
(51738984, 'DX10775166', '2020-01-09', 'NO ETOY DE ACUERDO CON EL RECIBO', 'NOE SDJDNSANDSA AJDNSNDASJKD JNSJKDJADSSDSA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bd_usuario`
--

CREATE TABLE `bd_usuario` (
  `NUMERO` int(11) NOT NULL,
  `COD_USUARIO` varchar(30) NOT NULL,
  `PROPIETARIO` varchar(30) NOT NULL,
  `DNI` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `COD_CALLE` varchar(30) NOT NULL,
  `CATERTAR` varchar(30) NOT NULL,
  `SECTOR` int(11) NOT NULL,
  `RUTA` varchar(30) NOT NULL,
  `SECUENCIA` varchar(30) NOT NULL,
  `NRO_MEDIDOR` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bd_usuario`
--

INSERT INTO `bd_usuario` (`NUMERO`, `COD_USUARIO`, `PROPIETARIO`, `DNI`, `EMAIL`, `COD_CALLE`, `CATERTAR`, `SECTOR`, `RUTA`, `SECUENCIA`, `NRO_MEDIDOR`) VALUES
(1, '53616', 'ADRIANA PAOLA CUJAR ALARCON', '52710695', '', '33', '507', 7, '10', '5790', 'DA08006100'),
(2, '53627', 'ADRIANA GIRALDO GOMEZ', '51738984', '', '74', '504', 1, '20', '2320', 'DA10775166'),
(3, '53638', 'ADRIANA MARCELA SALCEDO SEGURA', '52355290', '', '70', '504', 8, '10', '660', 'DA15005149'),
(4, '53649', 'ALEXANDER  DUARTE SANDOVAL', '79962291', '', '170', '504', 3, '40', '5770', 'DA15005362'),
(5, '53650', 'ALCIRA SANTANILLA CARVAJAL', '41547273', '', '70', '504', 3, '40', '5730', 'DA17000005'),
(6, '53661', 'AMPARO MONTOYA MONTOYA', '51899077', '', '33', '504', 3, '40', '5020', 'DA17000024'),
(7, '53683', 'ANA MARIA LOZANO SANTOS', '39568175', '', '70', '504', 3, '40', '5080', 'DA17000161'),
(8, '53694', 'ANDREA ARIZA ZAMBRANO', '52755672', '', '70', '504', 3, '40', '6470', 'DA17000162'),
(9, '53707', 'ANDREA CAROLINA ACU?A MENDOZA', '52817196', '', '144', '504', 3, '40', '6510', 'DA17000165'),
(10, '53718', 'ANDREA DEL PILAR CORTES BARRET', '52960227', '', '144', '504', 4, '10', '8920', 'DA17000171'),
(11, '53729', 'ANDREA DEL PILAR GUZMAN ROJAS', '52329187', '', '70', '504', 3, '50', '5520', 'DA17000174'),
(12, '53730', 'ANDREA PAOLA GUTIERREZ ROMERO', '52494004', '', '70', '504', 4, '20', '1050', 'DA17000175'),
(13, '53741', 'ANDREA LILIANA SAMPER MARTINEZ', '52705875', '', '186', '504', 2, '10', '2560', 'DA17002846'),
(14, '53763', 'ANDREA MARCELA BARRAGAN GARCIA', '52987453', '', '186', '504', 1, '40', '3990', 'DA17002888'),
(15, '53774', 'ANDREA YOHANNA PINZON YEPES', '52880406', '', '186', '504', 2, '50', '7900', 'DA17004266'),
(16, '53785', 'AMELIA PEREZ TABARES', '39559801', '', '186', '504', 2, '30', '3120', 'DA17004267'),
(17, '53796', 'ALEJANDRA MARIA AGUDELO SUAREZ', '52453801', '', '73', '504', 6, '10', '2660', 'DA17004268'),
(18, '53809', 'ALVARO CALDERON ARTUNDUAGA', '19442527', '', '73', '504', 3, '10', '780', 'DA17004269'),
(19, '53810', 'AYDA CATALINA PULIDO CHAPARRO', '52198296', '', '193', '504', 7, '20', '5470', 'DA17004270'),
(20, '53821', 'BERTHA XIMENA PATRICIA BARBOSA', '52807753', '', '199', '504', 3, '50', '1020', 'DA17004271'),
(21, '53832', 'BETSABE BAUTISTA VARGAS', '51650895', '', '73', '504', 1, '20', '4810', 'DA17004272'),
(22, '53843', 'CAMILO ALEXANDER BOLIVAR FORER', '80235960', '', '170', '504', 4, '30', '5510', 'DA17004273'),
(23, '53854', 'CAROLINA ISAZA RAMIREZ ', '30396689', '', '73', '504', 7, '30', '5320', 'DA17004274'),
(24, '53865', 'CESAR AUGUSTO RAMIREZ LAVERDE', '79998342', '', '70', '504', 6, '20', '3120', 'DA17004275'),
(25, '53876', 'CELMIRA PATRICIA ARROYAVE CORR', '52265956', '', '33', '507', 1, '40', '3880', 'DA17004276'),
(26, '53887', 'CLAUDIA MARCELA NAVARRETE CORT', '52428220', '', '73', '504', 7, '20', '6130', 'DA17004277'),
(27, '53898', 'CLAUDIA MARCELAS LOZADA ARAGON', '52962491', '', '186', '504', 1, '20', '5620', 'DA17004278'),
(28, '53901', 'CLAUDIA PATRICIA BOLIVAR CARRE', '52517450', '', '144', '504', 4, '30', '7070', 'DA17004279'),
(29, '53912', 'CLAUDIA PATRICIA GALLO CIFUENT', '52427093', '', '198', '505', 3, '30', '3250', 'DA17004280'),
(30, '53923', 'CLAUDIA PILAR VANEGAS ORTIZ', '39625110', '', '193', '504', 4, '30', '2550', 'DA17004281'),
(31, '53934', 'CONSTANZA AGUDELO FORERO', '51963634', '', '71', '504', 2, '10', '4180', 'DA17004282'),
(32, '53945', 'CONSUELO GUERRERO CALDERON', '52329575', '', '73', '504', 7, '10', '5330', 'DA17004283'),
(33, '53956', 'CONSUELO REYES SUAREZ', '51553923', '', '186', '504', 2, '10', '5670', 'DA17004284'),
(34, '53967', 'CRYSHNA CONSUELO MOSCOSO PE?A', '52835436', '', '193', '504', 3, '20', '2690', 'DA17004285'),
(35, '53978', 'DIANA CAROLINA PALACIOS ZAQUE', '35353993', '', '71', '504', 4, '20', '3150', 'DA17004286'),
(36, '53990', 'DIANA MARCELA HERRERA HERRERA', '52146038', '', '71', '504', 2, '30', '1190', 'DA17004287'),
(37, '54004', 'DIANA MILENA SABOGAL RAMIREZ', '30402976', '', '186', '504', 1, '20', '2390', 'DA17004288'),
(38, '54015', 'DIANA PATRICIA AVILA SAENZ', '52771781', '', '74', '504', 3, '10', '8370', 'DA17004289'),
(39, '54026', 'DIANA PATRICIA BENAVIDEZ SOLOR', '52252464', '', '186', '504', 1, '40', '3910', 'DA17004290'),
(40, '54037', 'DIEGO ANDRES VALERO GARAY', '79800914', '', '170', '504', 3, '10', '4070', 'DA17004291'),
(41, '54048', 'DOLLY JANETH PRADA GUZMAN', '28685434', '', '82', '504', 4, '20', '1160', 'DA17004292'),
(42, '54059', 'ELIZABETH CARDENAS MARTINEZ', '39548021', '', '115', '504', 3, '20', '3670', 'DA17004293'),
(43, '54060', 'ELIZABETH JAIMES SANCHEZ', '60263649', '', '71', '504', 6, '20', '480', 'DA17004294'),
(44, '54071', 'ELKIN RONALD PUCHE VEGA', '78703533', '', '73', '504', 2, '10', '300', 'DA17004295'),
(45, '54082', 'ERLEY CAMACHO MENDOZA', '52021541', '', '170', '504', 3, '40', '4430', 'DA17004296'),
(46, '54093', 'ERIKA YINETH VILLALBA OLAYA', '52477124', '', '186', '504', 6, '20', '1060', 'DA17004297'),
(47, '54106', 'ERIKA ANDREA VANEGAS HERRERA', '52357419', '', '186', '504', 5, '20', '2110', 'DA17004298'),
(48, '54117', 'FABIAN RICO RODRIGUEZ', '80525886', '', '74', '504', 3, '20', '610', 'DA17004299'),
(49, '54128', 'FANNY ESMERALDA PAEZ GONZALEZ', '52556028', '', '71', '504', 8, '10', '1200', 'DA17004300'),
(50, '54139', 'FERMIN ARIZA IGLESIAS', '3983136', '', '74', '504', 6, '20', '3860', 'DA17004301'),
(51, '54140', 'FRANCE JURANNI CENDALES LADINO', '52982828', '', '155', '504', 1, '20', '4860', 'DA17004302'),
(52, '54151', 'GABY ELENITH MANZANO URIBE', '40777577', '', '90', '504', 2, '10', '1980', 'DA17004303'),
(53, '54162', 'GILMA ESPINOSA DIAZ', '28892971', '', '117', '504', 4, '20', '240', 'DA17004304'),
(54, '54173', 'GRACIELA TORRES TORRES', '41781216', '', '80', '504', 3, '50', '1840', 'DA17004305'),
(55, '54184', 'GLORIA AMPARO PEREZ OSSA', '51562804', '', '107', '504', 3, '40', '4880', 'DA17004306'),
(56, '54195', 'GLORIA ISABEL MARTINEZ PARRA', '41598716', '', '121', '504', 3, '40', '5800', 'DA17004307'),
(57, '54219', 'GLORIA PATRICIA LOPEZ FIGUEROA', '39687248', '', '83', '504', 2, '10', '3030', 'DA17004308'),
(58, '54220', 'GLORIA ROCIO CABRERA SANCHEZ', '52539108', '', '83', '504', 7, '20', '6320', 'DA17004309'),
(59, '54231', 'GUSTAVO ALBERTO MENDOZA LOPEZ', '19393136', '', '82', '506', 3, '10', '3880', 'DA17004310'),
(60, '54242', 'GUSTAVO ADOLFO DIAZ VERA', '13541790', '', '107', '504', 2, '10', '7380', 'DA17004311'),
(61, '54253', 'HERMES JACOBO GARCIA GUACANEME', '79514499', '', '82', '504', 2, '10', '6530', 'DA17004312'),
(62, '54264', 'INGRID MAGALY GONZALEZ ROMERO', '52504235', '', '25', '506', 3, '10', '6130', 'DA17004313'),
(63, '54275', 'INGRID YANETH ENCISO RODRIGUEZ', '52334827', '', '23', '504', 2, '10', '6780', 'DA17004314'),
(64, '54286', 'ISABEL GUIOMAR ANGELINA VILLAR', '41365113', '', '23', '505', 5, '30', '810', 'DA17004315'),
(65, '54297', 'JAVIER ORLANDO CORREDOR GARCIA', '19273241', '', '143', '505', 6, '20', '1940', 'DA17004316'),
(66, '54300', 'JENNY PAOLA RODRIGUEZ MORENO', '52324374', '', '87', '505', 1, '20', '4970', 'DA17004317'),
(67, '54311', 'JENNY TRUJILLO TOLEDO', '51937530', '', '121', '504', 3, '40', '5990', 'DA17004318'),
(68, '54322', 'JESUS ALVEIRO VERGEL GRECO', '1979784', '', '83', '504', 1, '20', '2740', 'DA17004319'),
(69, '54333', 'JOHANNA ULLOA GUARIN', '52386987', '', '4', '504', 8, '10', '970', 'DA17004320'),
(70, '54344', 'JORGE HERNANDO DUE?AS GOMEZ', '19296439', '', '23', '504', 3, '10', '4590', 'DA17004321'),
(71, '54355', 'JORGE HUMBERTO REINA RUEDA', '79055667', '', '82', '504', 3, '10', '4810', 'DA17004322'),
(72, '54366', 'JUAN DE JESUS VALENCIA AREVALO', '79503076', '', '3', '504', 3, '50', '2880', 'DA17004323'),
(73, '54377', 'KAREN IVETTE MANOSALVA GOMEZ', '52848172', '', '83', '504', 2, '40', '4680', 'DA17004324'),
(74, '54399', 'KETTY LOPEZ CONEO', '45761623', '', '82', '504', 5, '20', '1730', 'DA17004325'),
(75, '54402', 'KETTY LOZANO PEREA', '54255464', '', '143', '507', 4, '30', '1090', 'DA17004326'),
(76, '54413', 'LARISA HELENA GONZALES PATARRO', '52113219', '', '2', '504', 3, '40', '6030', 'DA17004327'),
(77, '54424', 'LAURA GISELA RODRIGUEZ LEGUIZA', '52419858', '', '143', '504', 3, '50', '3480', 'DA17004328'),
(78, '54435', 'LEONARDO GARZON RAMIREZ', '79381517', '', '118', '504', 2, '40', '4060', 'DA17004329'),
(79, '54446', 'LEONOR MELO LOPEZ', '40384475', '', '120', '505', 3, '30', '2080', 'DA17004330'),
(80, '54457', 'LIBIA ROSMIRA GONZALEZ NI?O', '52279000', '', '23', '504', 3, '50', '2920', 'DA17004331'),
(81, '54468', 'LILIA DE JESUS BORDA', '51864061', '', '33', '504', 2, '40', '560', 'DA17004332'),
(82, '54479', 'LINA JHINET ESPITIA LEON', '52424544', '', '182', '507', 3, '40', '5160', 'DA17004333'),
(83, '54480', 'LINA PAOLA VARGA RIVEROS', '52355729', '', '142', '504', 7, '20', '4990', 'DA17004334'),
(84, '54491', 'LIGIA YANETD GUERRERO MAHECHA', '52056904', '', '118', '505', 2, '30', '1970', 'DA17004335'),
(85, '54504', 'LUCRECIA PINEDA VARGAS', '51642781', '', '4', '504', 1, '40', '2240', 'DA17004336'),
(86, '54515', 'LUZ MARINA MORALES GARCIA', '52056236', '', '81', '505', 4, '30', '2090', 'DA17004337'),
(87, '54526', 'LUIS ALEJANDRO VANEGAS VASQUEZ', '79712892', '', '83', '504', 7, '10', '5370', 'DA17004338'),
(88, '54537', 'LUIS FERNANDO TORRADO LEMUS', '79841386', '', '143', '504', 4, '30', '2100', 'DA17004339'),
(89, '54548', 'LUISA FERNANDA SANCHEZ', '52849625', '', '19', '504', 4, '30', '5570', 'DA17004340'),
(90, '54559', 'LUISA FERNANDA SANCHEZ PRADO', '52849626', '', '3', '507', 2, '40', '2400', 'DA17004341'),
(91, '54560', 'LUISA FERNANDA MONTENEGRO VANE', '52365690', '', '107', '504', 5, '20', '1720', 'DA17004342'),
(92, '54571', 'LUIS FELIPE REINOSA LOPEZ', '16079301', '', '121', '504', 2, '40', '3140', 'DA17004343'),
(93, '54582', 'LUZ ELENA VARGAS BALAGUERA', '52515572', '', '148', '504', 2, '40', '4160', 'DA17004344'),
(94, '54593', 'LUZ AMANDA LEON BERNAL', '52384245', '', '83', '504', 3, '40', '8230', 'DA17004345'),
(95, '54606', 'LUZ MARLEN ACOSTA BAEZ', '41646919', '', '83', '505', 7, '30', '6390', 'DA17004346'),
(96, '54617', 'LUZ MARINA DOMINGUEZ RAMOS', '41711908', '', '25', '504', 2, '40', '3680', 'DA17004347'),
(97, '54628', 'LUZ ROSARIO ARENAS LOPEZ', '52112753', '', '21', '507', 2, '50', '7620', 'DA17004348'),
(98, '54639', 'LUZ MARITZA ROJAS PINILLA', '35324428', '', '21', '504', 2, '50', '7710', 'DA17004349'),
(99, '54651', 'LUZ MARINA LAGOS CAMACHO', '46660281', '', '83', '504', 3, '10', '7880', 'DA17004350'),
(100, '54662', 'LUZ NANCY LANZA ANGULO', '52158883', '', '118', '504', 2, '50', '7930', 'DA17004351'),
(101, '54673', 'MADIAN BOLIVAR SASTOQUE', '39523439', '', '142', '504', 4, '10', '9010', 'DA17004352'),
(102, '54708', 'MAGDA LILIANA ALAIX ACOSTA', '51983065', '', '120', '504', 3, '10', '6370', 'DA17004353'),
(103, '54719', 'MARCELA DE LOS ANGELES GARCIA ', '51814402', '', '83', '504', 3, '10', '1890', 'DA17004354'),
(104, '54720', 'MARIA CONSTANZA NI?O RODRIGUEZ', '51817113', '', '21', '504', 2, '10', '4760', 'DA17004355'),
(105, '54731', 'MARTHA CONSUELO GOMEZ CORREDOR', '51798156', '', '143', '504', 3, '20', '1130', 'DA17004356'),
(106, '54742', 'MARIA DEL PILAR BARAJAS TABIMA', '52046965', '', '120', '504', 2, '30', '660', 'DA17004357'),
(107, '54753', 'MARIA DEL PILAR CASTILLO PINIL', '51911248', '', '82', '504', 3, '20', '2330', 'DA17004358'),
(108, '54764', 'MARIA DEL PILAR ESPITIA MARTIN', '52150493', '', '22', '504', 8, '10', '4050', 'DA17004359'),
(109, '54775', 'MARIA DEL ROSARIO LOZANO MURIL', '51706582', '', '120', '504', 3, '10', '7570', 'DA17004360'),
(110, '54786', 'MARIA ELENA LOPEZ CHAPARRO', '52371313', '', '4', '504', 4, '30', '810', 'DA17004361'),
(111, '54797', 'MARIA ELENA SALGADO MORENO', '35316316', '', '4', '505', 2, '30', '1320', 'DA17004362'),
(112, '54800', 'MARIA LILIANA MARTINEZ RIVADEN', '51624873', '', '121', '506', 3, '20', '2310', 'DA17004363'),
(113, '54811', 'MARIA ISABEL MENDEZ TORRES', '52254963', '', '182', '504', 7, '40', '5240', 'DA17004364'),
(114, '54822', 'MARY LUZ CORTES MU?OZ', '39779435', '', '3', '504', 6, '10', '3660', 'DA17004365'),
(115, '54833', 'MARIBEL PATI?O ROMERO', '51688372', '', '4', '505', 2, '40', '940', 'DA17004366'),
(116, '54844', 'MARTHA ADRIANA VILLARREAL MASM', '52109956', '', '25', '504', 1, '40', '1820', 'DA17004367'),
(117, '54855', 'MARTHA CECILIA TRIVI?O MELLIZO', '39705027', '', '4', '504', 7, '20', '6010', 'DA17004368'),
(118, '54866', 'MARTHA ELVIRA ZAMBRANO BALLEN', '41779627', '', '5', '504', 7, '40', '4440', 'DA17004369'),
(119, '54877', 'MARTHA JEANETH AVILA MEDINA', '52113518', '', '3', '504', 7, '20', '4800', 'DA17004370'),
(120, '54888', 'MARTHA PATRICIA FORERO SILVA', '35532487', '', '4', '504', 2, '10', '6640', 'DA17004371'),
(121, '54899', 'MARTHA VILLAMIL GONZALEZ', '51840813', '', '142', '504', 2, '10', '2950', 'DA17004372'),
(122, '54902', 'MARTHA STELLA AGUILLON GERENAS', '51741657', '', '81', '505', 2, '10', '580', 'DA17004373'),
(123, '54913', 'MIGUEL ANGEL CHAPARRO BECERRA', '4216436', '', '121', '505', 3, '40', '4930', 'DA17004374'),
(124, '54924', 'MIGUEL EDUARDO PEREZ MENDEZ', '79578211', '', '146', '504', 3, '40', '7170', 'DA17004375'),
(125, '54935', 'MICHAEL ALEXANDER MURCIA LEGUI', '79720139', '', '87', '504', 2, '30', '470', 'DA17004376'),
(126, '54946', 'MILTON JOSE PERILLA BERNAL', '79109337', '', '142', '504', 2, '30', '2550', 'DA17004377'),
(127, '54957', 'MIRLEDIS JOHANA CERA BELE?O', '1 128051381', '', '25', '504', 2, '30', '510', 'DA17004378'),
(128, '54968', 'MONICA MONROY CAICEDO', '52704972', '', '143', '504', 5, '30', '630', 'DA17004379'),
(129, '54979', 'MONICA ALEJANDRA RIOS CORDOBA', '52538168', '', '5', '504', 2, '30', '2100', 'DA17004380'),
(130, '54980', 'MONICA LOURDES CORTINA SILVA', '51811492', '', '182', '504', 3, '10', '5460', 'DA17004381'),
(131, '55005', 'MONICA LILIANA NAVAS CALDERON', '52825001', '', '83', '504', 3, '10', '5650', 'DA17004382'),
(132, '55016', 'MONICA QUINTERO PARRA', '52077729', '', '2', '504', 3, '10', '2820', 'DA17004383'),
(133, '55027', 'MONICA YENIFER CUELLAR RAMIREZ', '52537361', '', '6', '504', 3, '10', '6120', 'DA17004384'),
(134, '55038', 'NANCY MIREYA GONZALEZ TAUTIVA', '52410631', '', '83', '504', 2, '30', '620', 'DA17004385'),
(135, '55049', 'NANCY MARCELA HERNANDEZ PINILL', '52084899', '', '19', '504', 3, '20', '2220', 'DA17004386'),
(136, '55061', 'NATALIA ELVIRA TORRIJOS VELASQ', '52702346', '', '121', '505', 7, '30', '6440', 'DA17004387'),
(137, '55072', 'NAYSHLEY ELVIRA ROMERO TAPIA', '39759256', '', '5', '504', 1, '20', '4100', 'DA17004388'),
(138, '55083', 'NESTOR ELIAS SABOGAL DIAZ', '79518873', '', '143', '504', 5, '20', '1350', 'DA17004389'),
(139, '55094', 'NESTOR LEONARDO PATI?O NEIRA', '79421554', '', '83', '504', 4, '30', '1050', 'DA17004390'),
(140, '55107', 'NESTOR IVAN BARRIOS JARAMILLO', '79943723', '', '283', '504', 4, '30', '1300', 'DA17004391'),
(141, '55118', 'NIDIA LUZ ATEHORTUA GIRALDO', '51566452', '', '5', '504', 7, '30', '30', 'DA17004392'),
(142, '55130', 'NORMA BEATRIZ JURADO CORTES', '51796140', '', '143', '507', 4, '30', '1600', 'DA17004393'),
(143, '55141', 'NORMA CONSTANZA RAMIREZ PAEZ', '52326324', '', '107', '504', 2, '30', '110', 'DA17004394'),
(144, '55152', 'OLGA MERCEDES HIGUERA RODRIGUE', '51769939', '', '4', '507', 7, '30', '4920', 'DA17004395'),
(145, '55163', 'PAOLA ANDREA DIAZ TELLEZ', '52430169', '', '121', '504', 3, '10', '2860', 'DA17004396'),
(146, '55185', 'PAOLA ANDREA GALVIS ZAMORA', '36291038', '', '121', '504', 7, '20', '6260', 'DA17004397'),
(147, '55196', 'PAOLA SUSANA NI?O AGUILAR', '52866895', '', '143', '504', 3, '20', '460', 'DA17004398'),
(148, '55221', 'PAULO ANDRES TORO', '75071106', '', '143', '504', 8, '10', '3160', 'DA17004399'),
(149, '55232', 'PIEDAD CONSTANZA MORALES YARUR', '51761652', '', '83', '504', 2, '40', '2450', 'DA17004400'),
(150, '55243', 'REINALDO VALBUENA CARRERO', '79445103', '', '89', '504', 2, '10', '20', 'DA17004401'),
(151, '55254', 'ROCIO MORA RODRIGUEZ', '52145558', '', '25', '504', 4, '30', '2220', 'DA17004402'),
(152, '55265', 'ROSA RODRIGUEZ LEON', '20590542', '', '142', '506', 2, '10', '7270', 'DA17004403'),
(153, '55276', 'ROSA TULIA AMEZQUITA RIPE', '51975319', '', '6', '504', 2, '10', '1710', 'DA17004404'),
(154, '55287', 'ROCIO LILIANA VELASQUEZ BEJARA', '52378165', '', '5', '504', 2, '40', '680', 'DA17004405'),
(155, '55298', 'RUBY JACQUELINE ALFONSO VILLAM', '51837253', '', '23', '504', 2, '40', '870', 'DA17004406'),
(156, '55301', 'SANDRA BEATRIZ SARMIENTO BEJAR', '52150342', '', '118', '506', 5, '20', '1470', 'DA17004407'),
(157, '55312', 'SANDRA MILENA SUAREZ AMAYA', '52492169', '', '143', '504', 6, '20', '2310', 'DA17004408'),
(158, '55323', 'SANDRA MILENA COLMENARES RINCO', '52491797', '', '143', '507', 7, '10', '5160', 'DA17004409'),
(159, '55334', 'SANDRA PATRICIA HERRERA SANABR', '39540379', '', '82', '504', 2, '40', '5080', 'DA17004410'),
(160, '55345', 'SANDRA CRISTINA DUE?AS RUIZ', '51753113', '', '83', '504', 2, '20', '2360', 'DA17004411'),
(161, '55356', 'SANDRA PATRICIA GARZON JIMENEZ', '52186791', '', '143', '504', 2, '30', '2970', 'DA17004412'),
(162, '55367', 'SANDRA YUCELY  GONZALEZ HERNAN', '51943068', '', '21', '504', 7, '10', '5440', 'DA17004413'),
(163, '55378', 'SANDRA PATRICIA MANOSALVA AGUD', '52152243', '', '118', '504', 3, '20', '3040', 'DA17004414'),
(164, '55389', 'SONIA ESPERANZA ALFONSO PE?A', '51774527', '', '143', '504', 7, '40', '3800', 'DA17004415'),
(165, '55390', 'SONIA NELVY MARCELA CUBIDES CA', '65766923', '', '182', '505', 3, '10', '3290', 'DA17004416'),
(166, '55403', 'SONIA PATRICIA CAMARGO URREA', '52274801', '', '182', '507', 2, '40', '2120', 'DA17004417'),
(167, '55414', 'TANIA MARCELA MANJARRES GARCIA', '52363757', '', '25', '504', 2, '10', '1880', 'DA17004418'),
(168, '55425', 'TANIA JIMENA TRUJILLO PEREZ', '55175073', '', '120', '504', 1, '20', '3160', 'DA17004419'),
(169, '55447', 'VICTORIA EDITH SANCHEZ TORRES', '65732503', '', '120', '504', 4, '10', '7720', 'DA-1700442'),
(170, '55458', 'VICTORIA EUGENIA CASTA?EDA QUI', '51838866', '', '23', '504', 1, '20', '1490', 'DA17004420'),
(171, '55470', 'WILDER JAVIER RINCON', '80392314', '', '118', '507', 1, '20', '2940', 'DA17004421'),
(172, '55481', 'WILSON HERNANDEZ MOLANO', '79461806', '', '143', '504', 4, '30', '990', 'DA17004422'),
(173, '55492', 'YADIRA XIMENA MORENO SARMIENTO', '52416398', '', '23', '505', 4, '20', '4640', 'DA17004423'),
(174, '55516', 'YANIRA ARIAS IZQUIERDO', '52094336', '', '83', '505', 1, '40', '1980', 'DA17004424'),
(175, '55527', 'YEIMI YAMILE CASTILLO ROJAS', '52932132', '', '21', '505', 1, '20', '370', 'DA17004425'),
(176, '55538', 'YULIAN VIVIANA ARIZA MOSQUERA', '1099202504', '', '82', '505', 1, '10', '1760', 'DA17004426'),
(177, '55549', 'YURY LISSETH ESPITIA VILLALVA', '53089546', '', '83', '505', 1, '10', '1770', 'DA17004428'),
(178, '55550', 'ZANDRA LUCIA ALFONSO PE?A', '39778867', '', '22', '505', 1, '10', '1780', 'DA17004429'),
(179, '53616', 'ADRIANA PAOLA CUJAR ALARCON', '52710695', '', '33', '507', 7, '10', '5790', 'DA08006100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data`
--

CREATE TABLE `data` (
  `NUMERO` int(11) NOT NULL,
  `COD_USUARIO` varchar(30) NOT NULL,
  `PROPIETARIO` varchar(30) NOT NULL,
  `DNI` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `COD_CALLE` varchar(30) NOT NULL,
  `SECTOR` int(11) NOT NULL,
  `RUTA` varchar(30) NOT NULL,
  `SECUENCIA` varchar(30) NOT NULL,
  `NRO_MEDIDOR` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `data`
--

INSERT INTO `data` (`NUMERO`, `COD_USUARIO`, `PROPIETARIO`, `DNI`, `EMAIL`, `COD_CALLE`, `SECTOR`, `RUTA`, `SECUENCIA`, `NRO_MEDIDOR`) VALUES
(6, '53661', 'ROMARIO VEGA CCORIMANYA', '16121027', 'rvcromario@gmail.com', '33', 3, '40', '5020', '16121027'),
(5, '53650', 'ALCIRA SANTANILLA CARVAJAL', '41547273', '', '70', 3, '40', '5730', '41547273'),
(2, '53627', 'ADRIANA GIRALDO GOMEZ', '51738984', '', '74', 1, '20', '2320', '51738984'),
(3, '53638', 'ADRIANA MARCELA SALCEDO SEGURA', '52355290', '', '70', 8, '10', '660', '52355290'),
(1, '53616', 'ADRIANA PAOLA CUJAR ALARCON', '52710695', '', '33', 7, '10', '5790', '52710695'),
(4, '53649', 'ALEXANDER  DUARTE SANDOVAL', '79962291', '', '170', 3, '40', '5770', '79962291');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `nombre` varchar(30) NOT NULL,
  `year` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `m3` int(11) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`nombre`, `year`, `numero`, `mes`, `m3`, `saldo`) VALUES
('DX10775166', 2019, 1, 'ENERO', 5, 20),
('DX10775167', 2019, 1, 'ENERO', 5, 20),
('DX10775166', 2019, 2, 'FEBRERO', 5, 40),
('DX10775166', 2019, 3, 'MARZO', 6, 20),
('DX10775167', 2019, 2, 'FEBRERO', 6, 30),
('DX10775167', 2019, 3, 'MARZO', 5, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medidor`
--

CREATE TABLE `medidor` (
  `id` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `catertar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medidor`
--

INSERT INTO `medidor` (`id`, `numero`, `nombre`, `catertar`) VALUES
('52710695', 1, 'DA08006100', '506'),
('52355290', 1, 'DA15005149', '507'),
('79962291', 1, 'DA15005362', '507'),
('16121027', 1, 'DA17000024', '502'),
('52710695', 2, 'DC08006199', '507'),
('51738984', 1, 'DX10775166', '502'),
('51738984', 2, 'DX10775167', '504'),
('51738984', 3, 'DX10775168', '505'),
('51738984', 4, 'DX10775169', '506');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevos_usuarios`
--

CREATE TABLE `nuevos_usuarios` (
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `dni` int(8) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `numero_celular` int(15) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nuevos_usuarios`
--

INSERT INTO `nuevos_usuarios` (`nombres`, `apellidos`, `dni`, `correo`, `clave`, `numero_celular`, `fecha`) VALUES
('ROMARIO', 'vega ccoori', 9999999, 'romario@gmail.com', '1234', 959595959, '2020-01-02'),
('mario', 'vega colores', 79233421, 'romario@gmail.com', '121212', 842326, '2020-01-06'),
('Romario', 'vega ccorimnaya', 41547273, 'romario@gmail.com', '1234', 949231232, '2020-01-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `dni` int(8) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombres`, `apellidos`, `dni`, `correo`, `clave`) VALUES
('ADRIANA PAOLA', 'CUJAR ALARCON', 52710695, 'adriana@gmail.com', '1234'),
('ADRIANA', 'GIRALDO GOMEZ', 51738984, 'paola@gmail.com', '1234'),
('ADRIANA MARCELA', 'SALCEDO SEGURA', 52355290, 'marcela@gmail.com', '1234'),
('ALEXANDER', 'DUARTE SANDOVAL', 79962291, 'rvc@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `medidor`
--
ALTER TABLE `medidor`
  ADD PRIMARY KEY (`nombre`),
  ADD KEY `id` (`id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`nombre`) REFERENCES `medidor` (`nombre`);

--
-- Filtros para la tabla `medidor`
--
ALTER TABLE `medidor`
  ADD CONSTRAINT `medidor_ibfk_1` FOREIGN KEY (`id`) REFERENCES `data` (`DNI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;