USE  entrenamiento_deportivo_prueva;

INSERT INTO tb_usuarios VALUE
('1', '1022437184', 'C.C', 'Cristian Camilo', 'Anzola Cardenas', 'criscaanca@gmail.com', '1998-08-08', '3124160562', NULL, '$2y$10$q1fyili0S4xhsh81opJKIuI3onRD3Nk38C9shMvGWKPLa7Am.mZGq', 'Masculino', 'Calle 23', 'entrenador', 'foto/porfile.png', NULL, '2020-12-05 06:42:09', '2020-12-05 06:42:09', NULL),
('2', '1234567890', 'T.I', 'Prueba', 'Perez', 'anzola_98@hotmail.com', '2000-01-01', '3124567789', NULL, '$2y$10$A7lW4bHocV9dO1PbaXcpP.a2qNTczBNI8nuie7/sWs7.XJvhcFgMC', 'Masculino', 'calle 23', 'deportista', 'foto/porfile.png', NULL, '2020-12-05 14:38:48', '2020-12-05 14:38:48', NULL),
('3', '9876543210', 'C.C', 'Director Pepe', 'Perez', 'ccanzola3@misena.edu.co', '1888-01-01', '3142569870', NULL, '$2y$10$OkI7DpIw0rXRYFayn0mdJ.NOB386MoTkrPO33MLsvafiZSnNvfcnK', 'Masculino', 'calle45', 'director', 'foto/porfile.png', NULL, '2020-12-05 22:09:49', '2020-12-05 22:09:49', NULL);
INSERT INTO tb_deporte VALUE
('1', 'Futbol', 'deporte practicado con los pies', NULL, NULL, NULL),
('2', 'Baloncesto', 'deporte practicado con las manos', NULL, NULL, NULL),
('3', 'Atletismo', 'deporte practicado en una pista', NULL, NULL, NULL),
('4', 'Voleibol', 'deporte practicado con los manos', NULL, NULL, NULL);

INSERT INTO tb_ficha VALUE
('111111', 'Externo', 'jaja', 'mixta', NULL, NULL, NULL);
INSERT INTO tb_deportistas VALUE
("1234567890", 'futbol', '1', 'ninguna', '111111', '1', NULL, NULL, NULL);

INSERT INTO tb_director VALUE
("9876543210", 'futbol', NULL, NULL, NULL);

INSERT INTO tb_fed VALUE
('12345', 'Externo', 'Externo', 'mixta', '9876543210', NULL, NULL, NULL);

INSERT INTO tb_entrenador VALUE
('1022437184', '12345', 'Tecnologo', 'futbol', NULL, NULL, NULL);

INSERT INTO tb_planentrenamiento VALUE
(123, '2020-12-01', '2021-07-01', '1', '1022437184', '1234567890', NULL, NULL, NULL);

INSERT INTO tb_mesociclo VALUE
(1, 123, 1, '2020-12-01', '2020-12-31', 12, 2000, 6, NULL, NULL, NULL);

INSERT INTO tb_microciclo VALUE
(1, 1, 2, 'suave', '2020-12-02', 'muchas', '120mm', 2, 3, 4, NULL, NULL, NULL);

INSERT INTO tb_sesion VALUE
(1, 'titulos', 1, 'centro', '#000000', '#FFFFFF', '2020-12-28 10:30:00', '2020-12-28 10:30:00', 4, 5, '5', '3', 're', NULL, NULL, NULL),
(2, 'titulos', 1, 'centro', '#000000', '#FFFFFF', '2021-01-05 10:30:00', '2021-01-05 10:30:00', 4, 5, '5', '3', 're', NULL, NULL, NULL),
(12, 'titulos', 1, 'centro', '#000000', '#FFFFFF', '2020-12-29 10:30:00', '2020-12-29 10:30:00', 4, 5, '5', '3', 're', NULL, NULL, NULL);

