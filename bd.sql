
/*DROP TABLE needhelp;
DROP TABLE helper;
DROP TABLE etudiant;
DROP TABLE groupe;
DROP TABLE matiere;
DROP TABLE privileges;*/

/**
NOT NULL ne fonctionne pas sur les "references" alors que sa fonctionne lorsque l'on modifie sur phpmyadmin
THE FUCK ! Peut pas mettre non plus de valeur par defaut (marche sur phpmyadmin)
Need serveur distant :D 
**/

CREATE TABLE privileges (
  id_priv INT(4) PRIMARY KEY AUTO_INCREMENT,
  nom_priv VARCHAR(30) NOT NULL
);

CREATE TABLE matiere (
  id_mat INT(4) PRIMARY KEY AUTO_INCREMENT,
  nom_mat VARCHAR(30) NOT NULL
);

CREATE TABLE groupe (
  id_grp INT(4) PRIMARY KEY AUTO_INCREMENT,
  filiere VARCHAR(30) NOT NULL,
  annee INT NOT NULL NOT NULL
);

CREATE TABLE etudiant (
  numero_etudiant INT(8) PRIMARY KEY,
  mdp VARCHAR(25) NOT NULL,
  nom VARCHAR(30) NOT NULL,
  prenom VARCHAR(30) NOT NULL,
  age INT(3),
  email VARCHAR(30) NOT NULL,
  id_priv INT(4) REFERENCES privileges,
  id_grp INT(4) REFERENCES groupe
);                                      

CREATE TABLE helper (
  numero_etudiant INT(8) REFERENCES etudiant,
  id_mat INT(4) REFERENCES matiere,
  PRIMARY KEY(numero_etudiant, id_mat)
);

CREATE TABLE needhelp (
  numero_etudiant INT(8) REFERENCES etudiant,
  id_mat INT(4) REFERENCES matiere,
  PRIMARY KEY(numero_etudiant, id_mat)
);

CREATE TABLE cours(
  id_mat INT(4) REFERENCES matiere,
  id_grp INT(4) REFERENCES groupe,
  PRIMARY KEY(id_mat, id_grp)
);

INSERT INTO privileges (nom_priv) VALUES ('user');
INSERT INTO privileges (nom_priv) VALUES ('admin');
INSERT INTO groupe (filiere,annee) VALUES ('GEI',1);
INSERT INTO groupe (filiere,annee) VALUES ('Informatique',1);
INSERT INTO groupe (filiere,annee) VALUES ('MMI',1);
INSERT INTO groupe (filiere,annee) VALUES ('RT',1);
INSERT INTO groupe (filiere,annee) VALUES ('GEI',2);
INSERT INTO groupe (filiere,annee) VALUES ('Informatique',2);
INSERT INTO groupe (filiere,annee) VALUES ('MMI',2);
INSERT INTO groupe (filiere,annee) VALUES ('RT',2);
