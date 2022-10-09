-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2022 a las 02:44:45
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `upss`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritos`
--

CREATE TABLE `carritos` (
  `id` varchar(200) DEFAULT NULL,
  `producto_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'Baterias portatiles', 'Baterias portatiles, sit amet consectetur adipisicing elit. Quam, perferendis?', 'collagebat.jpg'),
(2, 'Audifonos', 'Audifonos, sit amet consectetur adipisicing elit. Quam, perferendis?', 'collageaud.jpg'),
(3, 'Cables y Cargadores', 'Cables y Cargadores, sit amet consectetur adipisicing elit. Quam, perferendis?', 'collagecab.jpg'),
(4, 'Memorias USB', 'Memorias USB, sit amet consectetur adipisicing elit. Quam, perferendis?', 'collageusb.jpg'),
(5, 'Bocinas', 'Bocinas, sit amet consectetur adipisicing elit. Quam, perferendis?', 'collageboc.jpg'),
(6, 'Modems', 'Modems, sit amet consectetur adipisicing elit. Quam, perferendis?', 'collagerou.jpg'),
(7, 'Camaras de seguridad', 'Camaras de seguridad , sit consectetur adipisicing elit. Quam, perferendis?', 'collagecam.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` float(8,2) NOT NULL,
  `descripcion` text NOT NULL,
  `caracteristicas` text NOT NULL,
  `cantidad` int(11) NOT NULL,
  `imagen1` varchar(200) NOT NULL,
  `imagen2` varchar(200) NOT NULL,
  `imagen3` varchar(200) NOT NULL,
  `imagen4` varchar(200) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `descripcion`, `caracteristicas`, `cantidad`, `imagen1`, `imagen2`, `imagen3`, `imagen4`, `categoria_id`) VALUES
(1, 'Power Bank Ridgeway 22500 2 puertos usb estada micro usb', 280.00, 'Bateria portatil para viaje y para que te no te quedes sin bateria en tu celular, amigable con mochila/bolsa de mano/bolsillo.', 'Pila portátil ridgeway MA-60C high speed de 22500mAh color negro', 3, '4tetgergx.jpg', '577895.jpg', 'hxdfh4t.jpg', 'imagenobr1.jpg', 1),
(2, 'Power Bank Portatil 30000mah Dual Puerto Con Linterna', 280.00, 'Bateria portatil para viaje y para que te no te quedes sin bateria en tu celular, amigable con mochila/bolsa de mano/bolsillo.', 'Pila portátil ridgeway YD-55 high speed de 30000mAh color negro', 2, '4thlkeg.jpg', 'axbmju5.jpg', 'bbnmre.jpg', 'loltjgj.jpg', 1),
(3, 'POWER BANK 20000 mah con 2 puertos usb entrada micro usb', 280.00, 'Bateria portatil para viaje y para que te no te quedes sin bateria en tu celular, amigable con mochila/bolsa de mano/bolsillo.', 'Pila portátil Power Bank, high speed de 6000mAh color negro', 3, '51TrLwZ-h8L._AC_SL1000_.jpg', '61PB5gL+XTL._AC_SL1000_.jpg', '61Tx4bHVAQL._AC_SL1000_.jpg', '512Irn6E15L._AC_SL1000_.jpg', 1),
(4, 'POWER BANK de 22000 mah 2 puertos usb con entrada tipo C Negro', 280.00, 'Bateria portatil para viaje y para que te no te quedes sin bateria en tu celular, amigable con mochila/bolsa de mano/bolsillo.', 'Pila portátil Power Bank, high speed de 6000mAh color negro', 4, 'olnbvr5u.jpg', 'cdwu7.jpg', 'p78tfbjh.jpg', 'zwrt75.jpg', 1),
(5, 'Bateria Portatol 2A 20000 mah high Speed 2 puertos usb con multiples cables incorporados', 280.00, 'Bateria portatil para viaje y para que te no te quedes sin bateria en tu celular, amigable con mochila/bolsa de mano/bolsillo.', 'Pila portátil Power Bank, high speed de 20000mAh color negro', 2, '61zjo3Y6wRL._AC_SL1473_.jpg', '61nUdpHNcDL._AC_SL1500_.jpg', '71FtfOpnPfL._AC_SL1500_.jpg', '610UF8wgK9L._AC_SL1406_.jpg', 1),
(6, 'Audífonos Bluetooth Deportivos Misik Sport MH608 / In ear / Negro con rojo', 250.00, 'Audifonos compactos para el deporte y a prueba de sudor para que no falte el ritmo de tu musica favorita al momento de hacer ejercicio.', '\"Se aplica la última tecnología Bluetooth 4.1, conexión con smartphones, tablets y otros dispositivos de música con Bluetooth fácilmente y rápidamente. \r\nDiseño ligero y human-oriented asegúrese de que el auricular Bluetooth se ajuste cómodo en tus orejas y no se caiga, perfecto para el ciclismo de para correr y hacer ejercicio en gimnasio. \r\nLarga duración de la batería le permite escuchar música o una llamada de teléfono continuamente hasta 5 horas y 120 horas de tiempo de espera\"', 1, 'gbv56756.jpg', 'tgbc.jpg', '3jmfgbr.jpg', 'ktj4u65u.jpg', 2),
(7, 'STF Audífonos De Diadema Inalámbricos Aurum, Conexión 5.0, Micrófono Incorporado ', 280.00, 'Audifonos de diadema, con una capacidad de 150mah para que disfrutes tu musica por un largo tiempo, plegable y comodo.', '150mah.\r\nBatería bluetooth 5.0 y fácil de cambiar. \r\nPlegable y cómodo.\r\n', 1, '61dBxsqt5pL._AC_SL1000_.jpg', '51IfZf+I-HL._AC_SL1000_.jpg', '31crfTrTFDL._AC_SL1000_.jpg', '71G8xWEKVOL._AC_SL1500_.jpg', 2),
(8, 'Audífonos Inalámbricos De Diadema，B39 Wireless Auriculares | Bluetooth 5.0 | Batería de Larga Duración | Ultraligeros', 350.00, 'Audifonos de diadema comodos y plegables y cable 3.5.', 'Audifonos bluetooth. \r\nDiadema tipo de conexión: bluetooth/aux 3.5. \r\nDispositivos i/o: bluetooth/aux 3.5.\r\nControl de 5 botones, que incluye reproducir / pausar / responder / colgar, ecualizador, siguiente pista / subir volumen, pista anterior / bajar volumen.', 2, '61H6d1BNfUL._AC_SL1500_.jpg', '71OfdYufKuL._AC_SL1500_.jpg', '71VL4KFZnYL._AC_SL1500_.jpg', '71+Tx7K6Q8L._AC_SL1500_.jpg', 2),
(9, 'Ridegeway EAR-840 audifonos inlalambricos con extra bass negro', 280.00, 'Escucha tu musica favorita con estos audifonos con bluetooth 4.2.', 'Cancelación de ruido. \r\nAlas de oreja para un ajuste confortable. \r\nInalámbrico especial para el deporte.', 2, 'ygyhrtu.jpg', '2ffghj.jpg', 'xsf.jpg', '087.jpg', 2),
(10, 'Stereo Sound ear phone with extra bass negro', 130.00, 'Podrás escuchar tu música a través de estos audifonos Bluetooth conectándolo a cualquier dispositivo.', 'Cancelación de ruido. \r\nAlas de oreja para un ajuste confortable. \r\nInalámbrico especial para el deporte.', 1, 'ru45y4.jpg', 'hj5y3.jpg', 'ijnfghj.jpg', 'nry454.jpg', 2),
(11, 'Audifonos Bluetooth Manos Libres Ridgeway Ear-860', 120.00, 'Estos prácticos audífonos inalambricos son compatibles con mas del 99% de los dispositivos inalámbricos del mercado. Proporcionan un tiempo de duración de la batería de 6 horas.', 'Inlamabricos. \r\nCompatible con el 99% de los dispositivos del mercado. \r\nTecnologia Bluetooth 4.1.', 1, '35vfgvt.jpg', 'uybthy.jpg', 'oi5tv4w.jpg', 'jevstvy.jpg', 2),
(12, 'TWS i12 inalámbricos por Bluetooth 4.2, con micrófono para iPhone y Android', 250.00, 'Producto oem, auricular Bluetooth.', 'Los auriculares inalámbricos i12 tws son auriculares Bluetooth de estilo AirPods. \r\nDesde el diseño, hasta su tamaño, la duración de la batería y la alta calidad de audio, todos los aspectos se han mejorado. ', 2, '7ki5u.jpg', 'vbh.jpg', 'ert5yuj.jpg', 'ikfg.jpg', 2),
(13, 'Cable Lightning para Iphone ', 250.00, 'Cable usb lightning de 1m certificado mfi oem, garantizados al 100% original.', 'Este cable USB 2.0 conecta tu iPhone, iPad o iPod con conector Lightning al puerto USB de tu computadora para sincronizarlos y cargarlos. ', 2, 'da0c91ef066ded94cad27a0e75fc.jpg', 'ACCAPP638_FZ.jpg', 'cable-usb-lightning-COMPATIBLE-con-iphone-cables-USB-a-iOS-de-tel-fono-m-vil-de.jpg', '1.jpg', 3),
(14, 'Cable 3 en 1 android IOS tipo-c(edicion Hello Kity)', 350.00, 'Lindo conector de cable 3 en 1 no solo es ideal para cargar todos sus diversos dispositivos desde diferentes sistemas, sino que también agrega estilo a sus accesorios.', 'Calidad de primera mano.\r\nNúcleo de cobre de primera calidad.\r\nNailon trenzado doble.\r\nCompatibilidad universal.', 1, '4710810-650017c.jpg', '4710810-650017d.jpg', 'p0161212318843-item-1994xf4x0540x0540-m.jpg', '4710810-650017b.jpg', 3),
(15, 'Cable usb A a C', 100.00, 'Con este cable, conecta dispositivos USB C a equipos de conexión estándar USB y transfiere datos con gran velocidad, o recarga de forma rápida y segura.', 'Carga rapida. \r\nInterfaz usb tipo c. \r\n1 metro de largo.', 4, 'Cable-Tipo-C-Usb-Datos-Carga-Rapida-Celular-1-Hora-e-20190402235813.0363030015.jpg', 'WIR-1031T-1.jpg', 'WIR-1031T-1-2.jpg', 'IMG_20220826_172455.jpg', 3),
(16, '1Hora combo cargador(Cable usb tipo C v7)', 120.00, 'El kit de carga rápida carga teléfonos y tabletas y con compatibilidad amplia a todo disposito que tenga entrada tipo C.', 'Carga rapida premium oem. \r\nCompatible con cualquier celular, tablet, ipad pro con entrada usb-c, incluye cubo y cable.', 3, 'thturyruyj.jpg', 'IMG_9887_Original.jpg', 'rlgnoae2phr2.jpg', 'imagen_2022-09-29_114213304-removebg-preview.png', 3),
(17, '1Hora combo cargador(Cable USB A a lightning y cubo)', 120.00, 'El kit de carga rápida carga teléfonos y tabletas exclusivamente de Apple.  ', 'Carga rapida premium oem. \r\nCompatible con iPhone, iPad o iPod con conector Lightning.', 1, 'combro-iphone-cable-y-cargador-1-hora-2.jpg', 'eyehe5u5jedjk.jpg', 'combro-iphone-cable-y-cargador-1-hora-2.jpg', 'combo-cargador-y-cable-usb-iphone-1.jpg', 3),
(18, '1Hora combo cargador(Cable USB A a micro usb V9 y cubo)', 120.00, 'Cable de alta calidad de 1 hora para garantizar resistencia, durabilidad y flexibilidad. Es compatible con todos los dispositivos que requieran las entradas de este cable, siendo más funcional y práctico.', 'Carga rapida premium oem. \r\nCompatible con cualquier celular, tablet, con entrada micro usb, incluye cubo y cable.', 1, 'gjdfghdfhd.jpg', 'fhfjgkhglhj.jpg', 'sdgdsgsdh.jpg', '78576wysvdubfu.jpg', 3),
(19, 'Huawei Super Charge accesorio original 18w', 150.00, 'Carga rápida de 5 A: Potencia de carga de hasta 18 W, soporta 4.5 V/5 A. La velocidad de carga es 4 veces más rápida que los cargadores tradicionales.', 'Accesorio original para dispositivos Huawei, a una potencia maxima de 18W.', 4, '2103393-1.jpg', '474hjkcse2.jpg', '987654fghjk.jpg', 'D_NQ_NP_847826-MLM51216178002_082022-V.jpg', 3),
(20, '1Hora Cable usb A a micro usb', 80.00, 'El cable micro USB V7 admite una transferencia de datos rápida y estable de 480 MBPS, que puede transferir música, videos y archivos a su computadora. Son compatibles con cualquier dispositivo con entrada USB.', 'Cable de 1m compatible con la mayoria de dispositivos ya sea celular o tableta con entrada micro usb.', 5, 'fa858256916d40318574fc6811f5f400_15022021034427.jpg', '1horacableusb.jpg', 'D_NQ_NP_783850-MLM31985642570_082019-O.jpg', 'ertwbvrwertuynrth96739546.jpg', 3),
(21, 'Memoria USB Kingston 64GB', 250.00, 'DataTraveler de Kingston alcanza un rendimiento de grado USB 3.0, que facilita el acceso a portátiles, equipos de sobremesa, monitores y otros dispositivos digitales.', 'Capacidad de almacenamiento de 64GB. \r\nConectividad USB 3.0. \r\nTipo de conector: USB-A. \r\nDimensiones: 21mm de ancho, 55mm de alto y 10.1mm de profundidad. \r\nCon tapa extraíble. \r\nRecomendado para transferencias de alta velocidad. \r\nLiviano e ideal para transportar todo tipo de archivos.', 3, 'abvg.jpg', 'D_NQ_NP_761666-MLM26190029100_102017-O.jpg', 'memoria-usb-64gb-kingston-metalica-dtse9-2.jpg', 'vra4wet.jpg', 4),
(22, 'Memoria USB Kingston 32GB', 180.00, 'DataTraveler Exodia de Kingston alcanza un rendimiento de grado USB 3.2 Gen 1, que facilita el acceso a portátiles, equipos de sobremesa, monitores y otros dispositivos digitales.', 'Capacidad de almacenamiento de 32GB. \r\nLiviano e ideal para transportar todo tipo de archivos. \r\nRecomendado para transferencias de alta velocidad. \r\nCon tapa extraíble. \r\nDimensiones: 21.04mm de ancho, 67.3mm de alto y 10.14mm de profundidad. \r\nMaterial: Plástico. \r\nTipo de conector: USB-A. \r\nConectividad USB 3.2 Gen 1.', 2, '44-44.jpg', 'ju55.jpg', 'memoria-usb-kingston-32gb-g4.jpg', 'Memorias-USB-32gb-Kingston-DataTraveler-G4-.jpg', 4),
(23, 'Memoria USB Adata 16GB ', 150.00, 'Capacidad adaptada a tus requerimientos Este pendrive te permitirá almacenar hasta 16 GB para que puedas guardar gran cantidad de información, imágenes u otros tipos de archivos.', 'Capacidad de almacenamiento de 16GB. \r\nLiviano e ideal para transportar todo tipo de archivos. \r\nRecomendado para transferencias de alta velocidad. \r\nDiseño elegante y sin tapa. Dimensiones: 12.2mm de ancho, 39mm de alto y 4.5mm de profundidad. \r\nMaterial: Metal. \r\nTipo de conector: USB-A. \r\nConectividad USB 2.0.', 5, 'fhdtr.jpg', 'nj5y.jpg', '8n7b5.jpg', 'etyjm.jpg', 4),
(24, 'Memoria USB Kingston 8GB ', 110.00, 'DataTraveler de Kingston alcanza un rendimiento de grado USB 2.0, que facilita el acceso a portátiles, equipos de sobremesa, monitores y otros dispositivos digitales.', 'Capacidad de almacenamiento de 8GB. \r\nLiviano e ideal para transportar todo tipo de archivos. \r\nRecomendado para transferencias de alta velocidad. \r\nDiseño elegante y sin tapa. \r\nDimensiones: 12.35mm de ancho, 39mm de alto y 4.55mm de profundidad. \r\nMaterial: Metal. \r\nTipo de conector: USB-A. \r\nConectividad USB 2.0.', 2, '1518884528-93.jpg', '233010.jpg', '232919.jpg', 'memoria-usb-kingston-datatraveler-se9-8gb.jpg', 4),
(25, 'Tarjeta de memoria Kingston SDCS Canvas Select con adaptador SD 16GB', 150.00, 'Diseñada para durar, proteger datos y ampliar el almacenamiento de dispositivos, la tarjeta de memoria Kingston SDCS/16GB Canvas Select te permitirá guardar archivos de forma simple, segura y efectiva.', 'Tarjeta MicroSDHC. \r\nEs a prueba de agua. \r\nSu velocidad de lectura es de 80 MB/s y de escritura 10 MB/s. \r\nPosee adaptador de memoria. \r\nSu resolución máxima de video es Full HD. \r\nAlmacena diferentes tipos de datos. \r\nClase de velocidad: 10.', 1, 'xvfth.jpg', '726256_image.jpg', '1993752.jpg', 'D_NQ_NP_797882-MLV31520872536_072019-O.jpg', 4),
(26, 'Tarjeta de memoria Kingston SDC4 con adaptador SD 8GB', 100.00, 'Diseñada para durar, proteger datos y ampliar el almacenamiento de dispositivos, la tarjeta de memoria Kingston SDC4/8GB te permitirá guardar archivos de forma simple, segura y efectiva.', 'Tarjeta MicroSDHC. \r\nSu velocidad de lectura es de 4MB/s. \r\nPosee adaptador de memoria. \r\nAlmacena diferentes tipos de datos. \r\nClase de velocidad: 4. \r\nEs a prueba de agua.', 2, 'D_NQ_NP_987210-MLM31215353864_062019-O.jpg', 'vrtjty.jpg', 'memoria-8gb-kingston-clase-4-2.jpg', '678oh.jpg', 4),
(27, 'Disco Duro HDD 1TB marca Wester Digital', 450.00, 'El disco duro Western Digital, que te posibilitará almacenar toda tu información de manera fácil y segura. El almacenamiento que necesitas, la cual te permitirá guardar gran cantidad de documentos, películas, música y todos los archivos que necesites.', 'Capacidad de 1TB. \r\nInterfaz SATA. \r\nMarca Wester Digital.', 1, 'zcvn.jpg', 'purple_1.jpg', 'WESTERN_DIGITAL_WD10PURZ.jpg', '61818028c3cbb8df2db9780e_w12226_296536_2254_draft_large.jpg', 4),
(28, 'BS-335 3 INCH ALTAVOZ PORTÁTIL BLUETOOTH', 250.00, 'Altavoz de madera sellado con elegante panel, batería de litio recargable de alta capacidad y compatible con varias entradas de audio.', 'Entrada MSD Y USB. \r\nTecnología bluetooth. \r\nReproductor FM Tiempo de reproducción continuo de 2hrs.', 1, 'eyukg.jpg', '4uykg34.jpg', 'nuivc5.jpg', 'rdgwayfgnc.jpg', 5),
(29, 'MS-1612BT BOCINA PORTATIL BLUETOOTH', 210.00, 'Bocina con radio integrado para cualquier tipo de evento o salida inesperada lleva tu música a donde quieras con bluetooth.', 'Tecnología bluetooth. \r\nReproductor FM USB/TF. \r\nMicrophone 3.5.', 2, 'PARLANTE-SPEAKER-MS-1612BT-02-016.jpg', '2dfc37c7c868181526beacb7fcd19621-427x546.jpg', 'Captura de pantalla 2022-09-30 002417.jpg', 'rty4i.jpg', 5),
(30, 'BS-465(Y636) BOCINA PORTATIL BLUETOOTH', 290.00, 'Bocina portable con radio integrado para cualquier tipo de evento o salida inesperada lleva tu música a donde quieras con bluetooth.', 'Salida 5w x 1 rms\r\nManos libres. \r\nLlamada telefónica. \r\nTarjeta de memoria. \r\nRadio fm. \r\nEntrada aux. \r\nLector de tarjetas sd. \r\n10 metros de alcance.', 1, '002746.jpg', '002933.jpg', 'hrihgtm4.jpg', '002746.jpg', 5),
(31, 'BS-335 3 BOCINA PORTATIL BLUETOOTH', 210.00, 'Bocina portatil bluetooth.', 'Emparejamiento sincornizado con otro modelo igual(BS-331).\r\nRadio fm.\r\nPuerto usb. \r\nSoporte micro sd.', 2, '220543.jpg', '220402.jpg', 'rejoutb3o23.jpg', '305.jpg', 5),
(32, 'Tenda N301 Router Inalambrico Wi-Fi 300 MBps, 2 Antenas 5dBi, Puertos Fast Ethernet, Puerto USB, Boton WPS', 280.00, 'El router inalámbrico N300  está diseñado para hacer que el proceso de configuración resulte muy intuitivo para el usuario. lo cual hace que sea perfecto para actividades cotidianas, como correo electrónico, chat, transmisión de vídeo, juegos en línea y más. ', 'Sencilla configuración, disfrute de una red inalámbrica segura en un minuto. \r\nCifrado de seguridad inalámbrica con tan solo pulsar el botón WPS. \r\nPuede funcionar como cliente para conectar con la red del ISP y compartir la señal de Internet. \r\nVelocidad inalámbrica de 300 Mbps, ideal para aplicaciones sensibles a las interrupciones. \r\nModo de Router cliente - Cliente WISP.', 2, '41ux1qDZ0iL._AC_SS450_.jpg', '41yMgVy+rjL._AC_SL1000_.jpg', 'tenda-n301.jpg', '619PT3qqRAL._AC_SL1000_.jpg', 6),
(33, 'Switch Tp-Link Tl-Sf1008D De Escritorio 8 Puertos Rj45 Fast Ethernet', 225.00, 'El switch Fast Ethernet TL-SF1008D está diseñado para las oficinas pequeñas y reducidos grupos de trabajo. Los 8 puertos soportan MDI/MDIX automático, lo que le evita tener que preocuparse de qué cable debe utilizar: sólo tiene que enchufarlo y listo.', 'Cantidad de Puertos: 8 Puertos. \r\nRJ-45 Ethernet: Fast Ethernet (10/100). \r\nCapacidad de conmutación: 1,6 Gbit/s. \r\nTabla de direcciones MAC: 1000 entradas. \r\nTipo de interruptor: No administrado.  \r\nEnergía sobre Ethernet (PoE): X \r\nCantidad de Puertos: 5 Puertos. \r\nRJ-45 Ethernet: Gigabit Ethernet (10/100/1000).  \r\nCapacidad de conmutación: 10 Gbit/s \r\nTabla de direcciones MAC: 2000 entradas \r\nTipo de interruptor: No administrado \r\nEnergía sobre Ethernet (PoE): X  \r\nMontaje en rack: X', 3, '100031251.jfif', 'Imagen20.jpg', 'Imagen22.jpg', 'switch-de-escritorio-con-8ptos-etehrnet-sin-administracion.jpg', 6),
(34, 'Switch TP-Link Gigabit Ethernet LS105G, 5 Puertos 10/100/1000Mbps, 7.4 Mpps, 2000 Entradas - No Administrable', 360.00, 'Los switches no gestionables Tp-Link de la serie LiteWave proporcionan de una manera fácil y sencilla la expansión de tu red cableada. Son fáciles de usar y fiables. Con éstos switches plug-and-play, puedes ampliar las conexiones de tu red a múltiples dispositivos de manera instantánea.', 'Cantidad de Puertos: 5\r\nPuertos RJ-45 Ethernet: Gigabit Ethernet (10/100/1000).\r\nCapacidad de conmutación: 10 Gbit/s\r\nTabla de direcciones MAC: 2000 entradas.\r\nTipo de interruptor: No administrado.\r\nEnergía sobre Ethernet (PoE): X \r\nMontaje en rack: X', 5, 'CP-TP-LINK-LS105G-2.jpg', 'jkutd.jpg', 'bcgdgh.jpg', '51KWlFnl70L._AC_SX679_.jpg', 6),
(35, 'Ubiquiti Networks NSM5', 2250.00, 'Los nuevos NanoStation M y NanoStation Loco M tienen el mismo concepto que el original pero han sido rediseñados adaptándose a las nuevas tendencias del diseño y su línea es ahora más depurada y elegante. Más de 150Mpbs reales de rendimiento y un alcance superior a 15km. Gracias a la tecnología 2x2 MIMO que utiliza el nuevo NanoStation M, los enlaces son significativamente más rápidos y a una distancia superior que con los NanoStation tradicionales.', 'Cantidad de puertos LAN: 2 \r\nGanancia de la antena (max): 16 dBi. \r\nFrecuencia de banda: 4.9 - 5.9 5GHz. \r\nTasa de transferencia: 150 Mbit/s. \r\nVelocidad de transferencia: 10,100 Mbit/s. \r\nVoltaje de entrada: 24 \r\nCorriente de entrada: 1', 2, '31rlofZ8mHL._AC_.jpg', '41175cQVWOL._AC_SS450_.jpg', '31WWwPGl9JL._AC_.jpg', 'vbnmjhtr.jpg', 6),
(36, 'Router MIMO 2x2:2 ac, Punto de acceso, 300 Mbps, 2.4 Ghz, Hasta 100 dispositivos WiFi, Puerto WAN y LAN 10/100/1000, Potencia 16 dBm', 850.00, 'Ubiquiti Inc. es fabricante y creador de tecnología de manera disruptiva, la cual cuenta con una amplia gama de productos que ofrecen una solución unificada donde podrás encontrar, switches, routers, cámaras de videovigilancia, puntos de acceso, sistema de control de acceso así como la línea para WISPs. Todo administrado por sus novedosas, fáciles e intuitivas herramientas que son totalmente gratuitas y que podrás trabajar desde tu computadora o incluso celular.', 'Integrado para alimentar los dispositivos Mimosa C5C. \r\nDiseñado para instalarse directamente en un enchufe de pared de CA. \r\nRango superior de Wi-Fi en interiores. \r\nModos de operación Router WiFi y Repetidor. \r\nAlimenta los dispositivos C5C.', 6, '1acvbn.jpg', 'G2.jpg', 'D_NQ_NP_998804-MLM44528798042_012021-W.jpg', 'g3.jpg', 6),
(37, 'LiteBeam airMAX M5 CPE hasta 100 Mbps, 5 GHz (5150 - 5875 MHz) con antena integrada de 23 dBi', 1250.00, 'Ubiquiti LiteBeam M5 LBE-M5-23 5GHz 23 dBi de largo alcance ligero airMAX CPE InnerFeed Technology.', 'Modo de operación: access point y estación. \r\nPolaridad simple, SISO 1x1. \r\nPotencia de salida: 25 dBm. \r\nThroughput 100+ Mbps.', 8, 'LBE-M5-23_1.jpg', 'DL34.jpg', 'D_NQ_NP_951753-MLM31228293864_062019-O.jpg', 'Im29.jpg', 6),
(38, 'Switch PoE no administrable SOHO de 5 puertos gigabit ethernet, S1900-5TP, 5 puertos', 1225.00, 'El switch S1900-5TP Gigabit Ethernet multimodo no administrable PoE+ de 5 puertos proporciona una conexión de red perfecta, que integra capacidades de red Ethernet de 1000Mbps y Ethernet de 10/100Mbps.', 'Plug and Play, sin necesidad de configuración. \r\n5 puertos RJ45 de 10/100/1000Mbps con autonegociación. \r\nFuncionamiento sin ventilador y silencioso. \r\n4 puertos PoE+ con 60W de presupuesto de energía total. \r\nSoporta autopuerto MDI/MDIX.', 4, '132528.F.jpg', '132528.H.jpg', '132526.B.jpg', '3YEDC9AU5I460FLX.jpg', 6),
(39, 'Router Balanceador TP-Link Fast Ethernet con Firewall TL-R470T+, Alámbrico, 5x RJ-45', 800.00, 'El router balanceador de carga de banda ancha, el TL-R470T+ es una sabia elección para negocios pequeños. Ofrece un alto rendimiento con respecto a las inversiones con pocos gastos adicionales. Cuenta con tres puertos WAN/LAN intercambiables, el TL-R470T+ soporta hasta 4 puertos WAN, que pueden satisfacer diferentes requisitos de acceso a internet a través de un dispositivo. El TL-R470T+ integra múltiples estrategias de balanceo de carga, QoS avanzado y un potente firewall (cortafuegos) para ofrecerle un tiempo de actividad en la red consistente y una conectividad a Ethernet confiable.', 'Cantidad de Puertos RJ-45. \r\n5 Memoria interna: 64 MB. \r\nDispositivo que facilita conexión a la red.', 3, 'D_NQ_NP_779214-MLM42667655791_072020-O.jpg', 'RD200TPL03_2.jpg', 'router-tp-link-tl-r470t-balanceo-de-carga-control-ancho-de-banda-portal-captivo.jpg', 'TL470-1.jpg', 6),
(40, 'Mikrotik RB750UPr2 hEX PoE Lite es un pequeño router de 5 puertos, 1 puerto USB 2.0 y salida PoE', 3600.00, 'Con el router MikroTik hEX PoE lite podrás establecer redes potentes para enviar y recibir información a gran velocidad.', 'HEX PoE Lite es un pequeño router Ethernet de cinco puertos en una carcasa de plástico, tiene un puerto USB 2.0 y salida PoE. \r\nLos puertos 2-5 pueden alimentar otros dispositivos con capacidad PoE con el mismo voltaje que se aplica a la unidad. \r\nMenos adaptadores de alimentación y cables de los que preocuparse. \r\nLa corriente máxima es de 1 A por puerto, los puertos Ethernet están protegidos. \r\nEs asequible, pequeño y fácil de usar. \r\nCon su diseño compacto y aspecto limpio, se adapta perfectamente a cualquier entorno SOHO. \r\nFrecuencia nominal de la CPU: 650 MHz. \r\nNivel de licencia: 4 \r\nSistema operativo: RouterOS.', 8, '51w2HyLokPL._AC_SY355_.jpg', 'ghdrh5yr.jpg', '5ujr.jpg', 'cetfgh.jpg', 6),
(41, 'Ubiquiti ACCUBI310 Supresor Eth-SP-G2', 500.00, 'Ubiquiti Inc. es fabricante y creador de tecnología de manera disruptiva, la cual cuenta con una amplia gama de productos que ofrecen una solución unificada donde podrás encontrar, switches, routers, cámaras de videovigilancia, puntos de acceso, sistema de control de acceso así como la línea para WISPs. Todo administrado por sus novedosas, fáciles e intuitivas herramientas que son totalmente gratuitas y que podrás trabajar desde tu computadora o incluso celular.', 'ESD protección para dispositivos PoE para exteriores. \r\nProtección ESD adicional. \r\nEnchufe-y-juego de instalación.', 6, '714R57b-XwL._AC_SS450_.jpg', 'ryjg.jpg', '3rd-Party_ESD_Protection_01.jpg', 'tjuh.jpg', 6),
(42, 'Switch Dahua Fast Ethernet PFS3005-5ET-L, 5 Puertos RJ-45 Ethernet 10/100Mbps, 1000 Gbit/s, 100 Entradas', 250.00, 'Switch para Escritorio de 5 Puertos DAHUA DH-PFS3005-5ET-L / No administrable / Fast Ethernet 10/100Mbps / Diseño Compacto / Capa 2 / Switching 1 Gbps', 'Cantidad de Puertos: 5 Puertos. \r\nRJ-45 Ethernet: Fast Ethernet (10/100). \r\nCapacidad de conmutación: 1000 Gbit/s. \r\nTabla de direcciones MAC: 100 entradas. \r\nTipo de interruptor: No administrado. \r\nEnergía sobre Ethernet (PoE): X \r\nMontaje en rack: X', 4, 'D_NQ_NP_744229-MLM45627549154_042021-O.jpg', 'svdhr.jpg', 'CP-DAHUA-DH-PFS3005-5ET-L-1.jpg', 'uyih.jpg', 6),
(43, 'Radio Estación Base airMAX Rocket-M5, hasta 150 Mbps, 5 GHz (5150-5875 MHz)', 2300.00, 'Diseñado para sobrevivir a ambientes hostiles, el Rocket ™ M está disponible en varios modelos de frecuencia y admite anchos de banda de múltiples canales, según el modelo específico y las regulaciones locales del país.', 'Modo de operación: access point y estación. \r\nAplicaciones Point-to-Point (PtP) o Point-to-MultiPoint (PtMP). \r\nIntegración Plug and Play con antenas airMAX.', 9, 'UBIQUITI_NETWORKS_ROCKETM5.jpg', 'gjkt.jpg', 'hqdefault.jpg', 'ubiquiti-rocket-m5.jpg', 6),
(44, 'Access Point Ubiquiti Rocket M2 AirMax, 150 Mbit/s, 2.4GHz', 2329.00, 'Diseñado para sobrevivir a ambientes hostiles, el Rocket ™ M está disponible en varios modelos de frecuencia y admite anchos de banda de múltiples canales, según el modelo específico y las regulaciones locales del país.', 'Cantidad de puertos LAN: 1 \r\nCantidad de antenas: 2 \r\nFrecuencia de banda: 2.4 GHz 2.4GHz.  \r\nTasa de transferencia: 150 Mbit/s. \r\nVelocidad de transferencia: 10,100 Mbit/s. \r\nVoltaje de entrada: 24 \r\nCorriente de entrada: 1', 3, 'dtyru.jpg', 'ehfyp.jpg', 'apibquitim2.jpg', 'bvbnnmds.jpg', 6),
(45, 'Tp-link TL-WR840N', 280.00, 'El 300Mbps Wireless N Router TL-WR840N es un dispositivo combinado con cable / inalámbrico de conexión de red diseñado específicamente para las necesidades de pequeñas empresas y oficinas domésticas de redes.', 'Admite 4 modos: router, repetidor, punto de acceso y modos WISP. \r\nVelocidad de transmisión inalámbrica de 300Mbps ideal para tareas sensibles al ancho de banda y trabajo básico. \r\nLos controles parentales administran cuándo y cómo los dispositivos conectados pueden acceder a Internet.  \r\nIPTV admite IGMP Proxy / Snooping, Bridge y Tag VLAN para optimizar la transmisión de IPTV. \r\nGuest Network proporciona acceso separado para invitados mientras asegura la red doméstica.', 4, '51TeYZuSttL._AC_SL1000_.jpg', '519+0xdg4lL._AC_SL1000_.jpg', 'TL-WR840N-TP-LINK-1200X1200-4.jpg', 'D_NQ_NP_785799-MLM42242209751_062020-O.jpg', 6),
(46, 'EASYTAO Kit de Sistema de Cámara de seguridad, 8CH 3MP WiFi NVR + 4 3MP Cámaras de Vigilancia, Sistemas de Seguridad Inalambrico', 4200.00, 'Sistema de seguridad de camara DVR 4 en 1.', 'Detección de Humanos con IA. \r\nSistema de Vigilancia Inalámbrico Ultra HD 4K 3MP y Rango de Visión Nocturna de 25 m. \r\nMire Videos en Vivo y Reprodúzcalos en Cualquier Momento y en Cualquier Lugar. \r\nMicrófono Integrado y Voz Bidireccional. \r\nGrabación 24 Horas al Día, 7 Días a la Semana para una Protección Constante.', 3, '714slNN0VIL._AC_SL1500_.jpg', '615I5vj0SJL._AC_SL1000_.jpg', '61EGM2ioKHL._AC_SL1000_.jpg', '51DgqXSuEjL._AC_SL1000_.jpg', 7),
(47, 'EASYTAO Cámara de Seguridad Wifi Al Exterior', 800.00, 'Esta cámara de seguridad Wifi cuenta con alta resolución de 2Mp (1920 * 1080) y la distancia IR llega hasta 30 metros para monitorear claramente a las 24 horas, todo se graba por esta cámara.', 'Audio bidireccional para hablar y escuchar. \r\nRotacion de 330°y 90°. \r\nModo de todo color en la oscuridad. \r\nAlmacenamiento de video en tarjeta sd.', 5, '41noKRDfraL._AC_SL1000_.jpg', '61wyv6nVr9L._AC_SL1000_.jpg', '61YeA9B++pL._AC_SL1000_.jpg', '71y-9yg4p-L._AC_SL1000_.jpg', 7),
(48, 'EASYTAO O1 Cámara WiFi Exterior Onvif', 700.00, 'La cámara de vigilancia Wi-Fi para exteriores O1 ofrece grabaciones claras y nítidas, asegurándose de que pueda vigilar su hogar, tienda u oficina, siempre y en todas partes.', '1080P Full HD con visión nocturna superior. \r\nAudio bidireccional y funciona con Alexa. \r\nIP65 resistente a la intemperie y detección de movimiento. \r\nConfigure, supervise y comparta todo a través de la aplicación Arenti. \r\nAlmacenamiento en Cloud y tarjeta SD Soportada.', 2, '51+XS9jIqvL._AC_SL1500_.jpg', '51midLVGrlL._AC_SL1000_.jpg', '71KCEKv7GqL._AC_SL1000_.jpg', '71NNMuJjHZL._AC_SL1000_.jpg', 7),
(49, 'Camara Wi-Fi de Interior Seguridad para el Hogar', 600.00, 'Camara de seguridad que muestra un video claro y nítido para que pueda vigilar su hogar sin importar cuándo o dónde especial para monitorear cuartos y salas de hogar.', 'Sistema de vigilancia de 1080p y visión nocturna. \r\nDetección de movimiento y sonido impulsada por IA. \r\nServidor en la nube de AWS con modo de privacidad. \r\nFunciona con Alexa y el Asistente de Google. \r\nAlmacenamiento en Cloud y tarjeta SD Soportada.', 4, '41y3e89VIpL._AC_SL1000_.jpg', '714ZMIIGVHL._AC_SL1500_.jpg', '81Z0bNjsehL._AC_SL1500_.jpg', '71pe1Dzd4IL._AC_SL1500_.jpg', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD CONSTRAINT `carritos_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
