CREATE DATABASE IF NOT EXISTS retro_games;
USE retro_games;

CREATE TABLE IF NOT EXISTS consolas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    fabricante VARCHAR(100) NOT NULL,
    anio_lanzamiento INT NOT NULL
);

INSERT INTO consolas (nombre, fabricante, anio_lanzamiento) VALUES
('Game Boy', 'Nintendo', 1989),
('PlayStation 1', 'Sony', 1994),
('Sega Mega Drive', 'Sega', 1988),
('Super Nintendo', 'Nintendo', 1990),
('Dreamcast', 'Sega', 1998);