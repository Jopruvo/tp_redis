CREATE TABLE Utilisateurs(
   id_utilisateur INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
   nom varchar(35),
   prenom varchar(35),
   email varchar(50),
   mdp varchar(50)
);


CREATE TABLE Articles(
   id_article INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
   nom_article varchar(50),
   type_article varchar(25)
);


CREATE TABLE Echanges(
   reference_echange INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
   id_article INT,
   id_utilisateur INT,
   prix DECIMAL,
   type_echange varchar(20),
   FOREIGN KEY (id_article) REFERENCES Articles(id_article),
   FOREIGN KEY (id_utilisateur) REFERENCES Utilisateurs(id_utilisateur)
);