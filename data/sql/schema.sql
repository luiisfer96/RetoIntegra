CREATE TABLE deporte (id_deporte INT AUTO_INCREMENT, nombre_deporte VARCHAR(100) NOT NULL, tipo_deporte VARCHAR(100) NOT NULL, PRIMARY KEY(id_deporte)) ENGINE = INNODB;
CREATE TABLE mascota (id_mascota INT AUTO_INCREMENT, nombre_mascota VARCHAR(100) NOT NULL, tipo_mascota VARCHAR(100) NOT NULL, PRIMARY KEY(id_mascota)) ENGINE = INNODB;
CREATE TABLE persona (id INT AUTO_INCREMENT, nombre VARCHAR(100), apellido VARCHAR(100), celular VARCHAR(100), cedula VARCHAR(100), id_mascota INT NOT NULL, id_deporte INT NOT NULL, INDEX id_deporte_idx (id_deporte), INDEX id_mascota_idx (id_mascota), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE persona ADD CONSTRAINT persona_id_mascota_mascota_id_mascota FOREIGN KEY (id_mascota) REFERENCES mascota(id_mascota) ON DELETE CASCADE;
ALTER TABLE persona ADD CONSTRAINT persona_id_deporte_deporte_id_deporte FOREIGN KEY (id_deporte) REFERENCES deporte(id_deporte) ON DELETE CASCADE;
