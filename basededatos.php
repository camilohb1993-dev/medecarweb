
CREATE DATABASE login;

USE login;

CREATE TABLE usuarios(
id INT AUTO_INCREMENT PRIMARY KEY,
usuario VARCHAR(50),
contrasena VARCHAR(50)
);

INSERT INTO usuarios(usuario, contrasena)
VALUES('CAMILOH','5555');