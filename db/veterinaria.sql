-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-11-2024 a las 01:20:07
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int NOT NULL,
  `propietario` varchar(100) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `paciente` varchar(100) NOT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `dni` varchar(20) DEFAULT NULL,
  `especie` varchar(50) DEFAULT NULL,
  `raza` varchar(50) DEFAULT NULL,
  `sexo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `fechaSeguimientoInicio` date DEFAULT NULL,
  `fechaSeguimientoFin` date DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `propietario`, `direccion`, `telefono`, `paciente`, `fechaNacimiento`, `dni`, `especie`, `raza`, `sexo`, `color`, `fechaSeguimientoInicio`, `fechaSeguimientoFin`, `descripcion`) VALUES
(1, 'makanaki', 'micasa', '9996546', 'latuyaporsiacaso', '2024-10-08', '99776867', 'Felino', 'pitbull', 'femenino', 'nigga', '2024-10-30', '2024-11-27', 'Descripcion para los papus'),
(2, 'karol manchego gonzales ', 'alto d ela alianza ', '900893955', 'mufasa', '2024-08-02', '123456', 'Felino', 'nosaboyio', 'masculino', 'amarillo', '2024-10-03', '2024-11-03', ''),
(3, 'karol manchego gonzales ', 'alto d ela alianza ', '900893955', 'mufasa', '2024-08-02', '123456', 'Felino', 'nosaboyio', 'masculino', 'amarillo', '2024-10-03', '2024-11-03', ''),
(4, 'makanaki', 'alto d ela alianza ', '9996546', 'latuyaporsiacaso', '2024-10-02', '123456', 'Felino', 'pitbull', 'femenino', 'nigga', '2024-10-04', '2024-10-04', ''),
(5, 'karol manchego gonzales ', 'alto d ela alianza ', '900893955', 'mufasa', '2024-05-10', '99776867', 'Felino', 'nosaboyio', 'masculino', 'amarillo', '2024-10-05', '2024-11-07', ''),
(6, 'karol manchego gonzales ', 'alto d ela alianza ', '9996546', 'latuyaporsiacaso', '2024-10-29', '99776867', 'Canino', 'nosaboyio', 'femenino', 'nigga', '2024-10-29', '2024-10-29', ''),
(7, 'makanaki', 'micasa', '9996546', 'latuyaporsiacaso', '2024-10-29', '99776867', 'Canino', 'pitbull', 'femenino', 'amarillo', '2024-10-29', '2024-10-29', ''),
(8, 'makanaki', 'micasa', '9996546', 'latuyaporsiacaso', '2024-10-29', '99776867', 'Canino', 'pitbull', 'femenino', 'amarillo', '2024-10-29', '2024-10-29', ''),
(9, 'makanaki', 'micasa', '9996546', 'latuyaporsiacaso', '2024-10-29', '99776867', 'Canino', 'pitbull', 'femenino', 'amarillo', '2024-10-29', '2024-10-29', ''),
(10, 'makanaki', 'micasa', '9996546', 'latuyaporsiacaso', '2024-10-29', '99776867', 'Canino', 'pi+hgyui', 'femenino', 'amarillo', '2024-10-29', '2024-10-29', ''),
(11, 'makanaki', 'micasa', '9996546', 'latuyaporsiacaso', '2024-10-29', '99776867', 'Canino', 'pi+hgyui', 'femenino', 'amarillo', '2024-10-29', '2024-10-29', ''),
(12, 'DSADSA', 'DSAASDSDA', '12312332123', 'SDSAD', '2024-10-29', '89754675', 'Felino', 'SDAASDASD', 'femenino', 'NEGRO ESCLA', '2024-11-07', '2024-11-19', ''),
(13, 'DSADSA', 'DSAASDSDA', '12312332123', 'SDSAD', '2024-10-29', '89754675', 'Felino', 'SDAASDASD', 'femenino', 'NEGRO ESCLA', '2024-11-07', '2024-11-19', ''),
(14, 'DSADSA', 'DSAASDSDA', '12312332123', 'SDSAD', '2024-10-29', '89754675', 'Felino', 'SDAASDASD', 'femenino', 'NEGRO ESCLA', '2024-11-07', '2024-11-19', ''),
(15, 'DSADSA', 'DSAASDSDA', '12312332123', 'SDSAD', '2024-10-29', '89754675', 'Felino', 'SDAASDASD', 'femenino', 'NEGRO ESCLA', '2024-11-07', '2024-11-19', ''),
(16, 'makanaki', 'micasa', '9996546', 'SDSAD', '2024-11-24', '123456', 'Aves', 'nosaboyio', 'masculino', 'nigga', '2024-11-04', '2024-12-07', 'Fecha: 2024-11-30 - Descripción: holaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\n'),
(17, 'makanaki', 'alto d ela alianza ', '12312332123', 'SDSAD', '2024-11-04', '666777', 'Felino', 'nosaboyio', 'femenino', 'NEGRO ESCLA', '2024-11-16', '2024-11-02', 'Fecha: 2024-11-30 - Descripción: aSWDWQQWWQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQQ\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
