-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2024 a las 18:51:21
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quizculturageneral`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dni` int(8) NOT NULL,
  `corre_electronico` varchar(100) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `edad` int(3) NOT NULL,
  `puntaje` int(3) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`id`, `nombre`, `apellido`, `dni`, `corre_electronico`, `departamento`, `edad`, `puntaje`, `fecha_creacion`) VALUES
(43, 'alex', 'oyolo', 43256743, 'arau.jo7672@gmail.com', 'lima', 69, NULL, '2024-05-23 04:39:42'),
(46, 'alex', 'oyolo', 43256743, 'arau.jo7672@gmail.com', 'lima', 72, 1, '2024-05-23 04:50:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(255) NOT NULL,
  `respuesta_correcta` varchar(255) NOT NULL,
  `respuestas_incorrectas` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`respuestas_incorrectas`)),
  `categoria` varchar(100) NOT NULL,
  `dificultad` enum('facil','medio','dificil') NOT NULL,
  `fecha` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `pregunta`, `respuesta_correcta`, `respuestas_incorrectas`, `categoria`, `dificultad`, `fecha`) VALUES
(2, '¿Quién fue el último soberano inca?', 'Atahualpa', '[\"Lloque Yupanqui\", \"Sinchi Roca\", \"Mayta Cápac\"]', 'Historia', 'facil', '2024-05-31'),
(3, '¿Cuál es la capital del Perú? ', 'Lima ', '[\"Cusco\",\"Arequipa\",\"Trujillo\" ]', 'Historia', 'facil', '2024-05-31'),
(4, '¿Qué civilización construyó la ciudadela de Machu Picchu? ', 'Los Incas ', '[\"Los Moche\",\"Los Wari\",\"Los Nazca\" ]', 'Historia', 'facil', '2024-05-31'),
(5, '¿Cuál es el plato típico más representativo del Perú? ', 'Ceviche ', '[\"Tacos\",\"Arepas\",\"Cau-Cau\" ]', 'Gastronomia', 'facil', '2024-05-31'),
(6, '¿En qué año se declaró la independencia del Perú? ', '1821 ', '[\"1810\",\"1830\",\"1845\" ]', 'Historia', 'medio', '2024-05-31'),
(7, '¿Qué danza tradicional es originaria de la región Puno y se baila durante la festividad de la Virgen de la Candelaria? ', 'Diablada ', '[\"Marinera\",\"Huayno\",\"Tondero\" ]', 'Historia', 'dificil', '2024-05-31'),
(8, '¿Cuál es la principal lengua indígena hablada en el Perú, aparte del español? ', 'Quechua ', '[\"Guaraní\",\"Náhuatl\",\"Mapudungun\" ]', 'Historia', 'medio', '2024-05-31'),
(9, '¿Qué famoso escritor peruano ganó el Premio Nobel de Literatura en 2010?', 'Mario Vargas Llosa ', '[\"Gabriel García Márquez\",\"Julio Ramón Ribeyro\",\"Cesar Vallejo\" ]', 'Literatura', 'dificil', '2024-05-31'),
(10, '¿Cuál es la bebida alcohólica tradicional del Perú? ', 'Pisco ', '[\"Tequila\",\"Cachaca\",\"Ron\" ]', 'Gastronomia', 'facil', '2024-05-31'),
(11, '¿Qué figura es representada en las Líneas de Nazca y es una de las más famosas?', 'Mono ', '[\"Cóndor\",\"Astronauta\",\"Araña\" ]', 'Historia', 'medio', '2024-05-31'),
(12, '¿Cuál es el festival religioso más importante en Cusco que se celebra en junio?', 'Inti Raymy ', '[\"Carnaval de Cajamarca\",\"Semana Santa\",\"Fiesta de la Vendimia\" ]', 'Historia', 'facil', '2024-05-31'),
(13, '¿Cuál es el sitio arqueológico ubicado en el norte del Perú conocido por sus pirámides truncas y murales coloridos?', 'Huaca de la Luna', '[\"Caral\",\"Chan Chan\",\"Sacsayhuamán\" ]', 'Historia', 'medio', '2024-05-31'),
(14, '¿Qué producto agrícola, originario de Perú, es conocido como \"el oro de los Incas\" debido a su valor nutricional?', 'Quinua', '[\"Maíz\",\"Papa\",\"Kiwicha\" ]', 'Historia', 'medio', '2024-05-31'),
(15, '¿En qué región del Perú se celebra el famoso Festival Internacional de la Vendimia?', 'Ica', '[\"Cusco\",\"Arequipa\",\"Puno\" ]', 'Historia', 'dificil', '2024-05-31'),
(16, '¿Qué río peruano, considerado el más largo del mundo, atraviesa la selva amazónica?', 'Río Amazonas', '[\"Río Urubamba\",\"Río Mantaro\",\"Río Ucayali\" ]', 'Geografía', 'medio', '2024-05-31'),
(17, '¿Cuál es el nombre del antiguo centro ceremonial de la cultura Moche ubicado cerca de Trujillo?', 'Huaca del Sol y de la Luna', '[\"Kuelap\",\"Chan Chan\",\"Chavín de Huántar\" ]', 'Historia', 'medio', '2024-05-31'),
(18, '¿Quién fue el último emperador inca que resistió la conquista española antes de ser capturado y ejecutado en 1572?', 'Túpac Amaru I', '[\"Huayna Cápac\",\"Manco Inca\",\"Túpac Amaru II\" ]', 'Historia', 'dificil', '2024-05-31'),
(19, '¿Cuál es el nombre del sitio arqueológico preincaico ubicado en la región de Ayacucho, considerado uno de los centros ceremoniales más antiguos de América?', 'Huari', '[\"Caral\",\"Chavín de Huántar\",\"Sechín\" ]', 'Historia', 'dificil', '2024-05-31'),
(20, '¿Qué estilo musical afroperuano es conocido por su percusión con cajón y se originó en la costa central del Perú?', 'Festejo', '[\"Huayno\",\"Marinera\",\"Vals Criollo\" ]', 'Música', 'dificil', '2024-05-31'),
(21, '¿Quién es el autor de \"La ciudad y los perros\"? ', 'Mario Vargas Llosa', '[\"José María Arguedas\",\"Alfredo Bryce Echenique\",\" César Vallejo\" ]', 'Literatura', 'medio', '2024-05-31'),
(22, '¿Cuál es la obra más conocida de José María Arguedas? ', 'Los ríos profundos', '[\"El pez en el agua\",\"Pantaleón y las visitadoras\",\" La casa verde\" ]', 'Literatura', 'medio', '2024-05-31'),
(23, '¿En qué año se publicó \"Trilce\" de Cesar Vallejo? ', '1922 ', '[\"1919\",\"1930\",\"1936\" ]', 'Literatura', 'medio', '2024-05-31'),
(24, '¿Quién escribió \"Un mundo para Julius\"? ', 'Alfredo Bryce Echenique ', '[\"Julio Ramón Ribeyro\",\"Mario Vargas Llosa\",\"César Vallejo\" ]', 'Literatura', 'medio', '2024-05-31'),
(25, '¿\"El zorro de arriba y el zorro de abajo\" es una obra de? ', ' José María Arguedas', '[\"Mario Vargas Llosa\",\"Alfredo Bryce Echenique\",\"César Vallejo\" ]', 'Literatura', 'medio', '2024-05-31'),
(26, '¿Cuál de las siguientes obras pertenece a Ricardo Palma? ', 'Tradiciones peruanas', '[\"La casa verde\",\"Conversación en La Catedral\",\"La tía Julia y el escribidor\" ]', 'Literatura', 'medio', '2024-05-31'),
(27, '¿Qué poeta peruano escribió \"Los heraldos negros\"?', 'César Vallejo', '[\"Mario Vargas Llosa\",\"José María Arguedas\",\"Alfredo Bryce Echenique\" ]', 'Literatura', 'medio', '2024-05-31'),
(28, '¿En cuál novela de Mario Vargas Llosa se aborda la dictadura del general Manuel Odría?', 'Conversación en La Catedral', '[\"La ciudad y los perros\",\"La casa verde\",\"Pantaleón y las visitadoras\" ]', 'Literatura', 'dificil', '2024-05-31'),
(29, '¿Quién es el autor de \"La palabra del mudo\"?', 'Julio Ramón Ribeyro', '[\"Cesar Vallejo\",\"Mario Vargas Llosa\",\"Alfredo Bryce Echenique\" ]', 'Literatura', 'medio', '2024-05-31'),
(30, '¿Qué novela de Ciro Alegría narra las luchas de los indígenas por sus tierras?', 'El mundo es ancho y ajeno ', '[\"La serpiente de oro\",\"Los perros hambrientos\",\"Paco Yunque\" ]', 'Literatura', 'dificil', '2024-05-31'),
(31, '¿En qué región del Perú se encuentra el Cañón del Colca? ', 'Arequipa', '[\"Puno\",\"Ayacucho\",\"Cusco\" ]', 'Geografía', 'medio', '2024-05-31'),
(32, '¿Qué desierto se encuentra al sur de Perú?', 'Desierto de Atacama ', '[\"Desierto de Sechura\",\"Desierto de La Joya\",\"Desierto de Olmos\" ]', 'Geografía', 'medio', '2024-05-31'),
(33, '¿Cuál es la ciudad más poblada de la selva peruana?', 'Iquitos', '[\"Pucallpa\",\"Tarapoto\",\"Puerto Maldonado\" ]', 'Geografía', 'medio', '2024-05-31'),
(34, '¿En qué departamento se encuentra el Lago Titicaca?', 'Puno ', '[\"Cusco\",\"Arequipa\",\"Tacna\" ]', 'Geografía', 'facil', '2024-05-31'),
(35, '¿Cuál es el volcán más alto del Perú? ', 'Coropuna', '[\"Misti\",\"Sabancaya\",\"Huascarán\" ]', 'Geografía', 'dificil', '2024-05-31'),
(36, '¿Qué región peruana es conocida por la producción de pisco? ', 'Ica ', '[\"Lima\",\"Arequipa\",\"Cusco\" ]', 'Geografía', 'facil', '2024-05-31'),
(37, '¿En qué región se encuentran las Líneas de Nazca?', 'Ica', '[\"La Libertad\",\"Ancash\",\"Piura\" ]', 'Geografía', 'facil', '2024-05-31'),
(38, '¿Cuál es la cordillera más importante que atraviesa el Perú?', 'Cordillera de los Andes', '[\"Cordillera Blanca\",\"Cordillera Negra\",\"Cordillera Occidental\" ]', 'Geografía', 'facil', '2024-05-31'),
(39, '¿Quién fue el primer presidente del Perú?', 'José de la Riva-Agüero ', '[\"Ramón Castilla\",\"Agustín Gamarra\",\"Francisco Xavier de Luna Pizarro\" ]', 'Historia', 'facil', '2024-05-31'),
(40, '¿Qué presidente peruano implementó la reforma agraria en la década de 1960?', 'Juan Velasco Alvarado', '[\" Fernando Belaúnde Terry\",\"Alan García\",\"Alejandro Toledo\" ]', 'Historia', 'medio', '2024-05-31'),
(41, '¿Quién fue el presidente del Perú durante la guerra del Pacífico?', 'Mariano Ignacio Prado', '[\"Nicolás de Piérola\",\"Miguel Iglesias\",\"Andrés Avelino Cáceres\" ]', 'Historia', 'medio', '2024-05-31'),
(42, '¿Qué presidente peruano recibió el Premio Nobel de la Paz en 2006?', 'Ollanta Humala', '[\" Valentín Paniagua\",\"Alejandro Toledo\",\"Alan García\" ]', 'Historia', 'medio', '2024-05-31'),
(43, '¿Quién fue el presidente del Perú en el primer gobierno de 1985-1990?', 'Alan García', '[\"Alberto Fujimori\",\"Fernando Belaúnde Terry\",\"Valentín Paniagua\" ]', 'Historia', 'medio', '2024-05-31'),
(44, '¿Qué presidente peruano fue destituido en el año 2000?', 'Alberto Fujimori', '[\"Alejandro Toledo\",\"Valentín Paniagua\",\"Alan García\" ]', 'Historia', 'medio', '2024-05-31'),
(45, '¿Quién fue el primer presidente peruano elegido democráticamente tras la caída del gobierno militar en 1980?', 'Fernando Belaúnde Terry', '[\"Alan García\",\"Valentín Paniagua\",\"Alejandro Toledo\" ]', 'Historia', 'medio', '2024-05-31'),
(46, '¿Qué presidente peruano promovió la construcción de la Carretera Marginal de la Selva? ', ' Juan Velasco Alvarado', '[\"Alan García\",\"Alberto Fujimori\",\"Alejandro Toledo\" ]', 'Historia', 'medio', '2024-05-31'),
(47, '¿Qué presidente peruano lideró el país durante el conflicto con Ecuador en 1995?', 'Alberto Fujimori ', '[\"Alan García\",\"Alejandro Toledo\",\"Ollanta Humala\" ]', 'Historia', 'medio', '2024-05-31'),
(48, '¿Quién es el máximo goleador histórico de la selección peruana de fútbol? ', 'Paolo Guerrero', '[\"Teófilo Cubillas\",\"Jefferson Farfán\",\"Claudio Pizarro\" ]', 'Deporte', 'medio', '2024-05-31'),
(49, '¿En qué año la selección peruana de fútbol ganó la Copa América por primera vez?', '1939', '[\"1975\",\"1983\",\"1997\" ]', 'Deporte', 'facil', '2024-05-31'),
(50, '¿En qué Juegos Olímpicos Perú ganó su primera medalla de oro?', 'Los Ángeles 1984', '[\"Berlín 1936\",\"Londres 1948\",\"Helsinki 1952\" ]', 'Deporte', 'dificil', '2024-05-31'),
(51, '¿Qué tenista peruano alcanzó el puesto número 5 del ranking mundial ATP en 1977?', 'Alejandro Olmedo', '[\"Luis Horna\",\"Jaime Yzaga\",\"Guillermo Vilas\" ]', 'Deporte', 'dificil', '2024-05-31'),
(52, '¿Quién es el único tetracampeón del fútbol peruano? ', 'Alianza Lima ', '[\"Cienciano\",\"Sporting Cristal\",\"Universitario de deportes\" ]', 'Deportes', 'medio', '2024-05-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `dni` int(8) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `full_name`, `dni`, `password`, `email`) VALUES
(3, 'Xiomara Tipte', 74185296, '123456789', 'example@gmail.com'),
(4, 'Alex Oyolo', 123, '123', 'example2@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
