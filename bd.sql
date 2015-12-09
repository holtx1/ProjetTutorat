
/*DROP TABLE needhelp;
DROP TABLE helper;
DROP TABLE etudiant;
DROP TABLE groupe;
DROP TABLE matiere;
DROP TABLE privileges;*/

CREATE TABLE privileges (
  id_priv INT(4) PRIMARY KEY,
  nom_priv VARCHAR(30) NOT NULL
);

CREATE TABLE matiere (
  id_mat INT(4) PRIMARY KEY,
  nom_mat VARCHAR(30) NOT NULL
);

CREATE TABLE groupe (
  id_grp INT(4) PRIMARY KEY,
  filiere VARCHAR(30) NOT NULL,
  annee INT(1) NOT NULL
);

CREATE TABLE etudiant (
  numero_etudiant INT(8) PRIMARY KEY,
  mdp VARCHAR(25) NOT NULL,
  nom VARCHAR(30) NOT NULL,
  prenom VARCHAR(30) NOT NULL,
  age INT(3) NOT NULL,
  email VARCHAR(30) NOT NULL,
  id_priv INT(4) REFERENCES privileges,
  id_grp INT(4) REFERENCES groupe
);

CREATE TABLE helper (
  numero_etudiant INT(8) REFERENCES etudiant,
  id_mat INT(4) REFERENCES matiere,
  commentare varchar(300),
  PRIMARY KEY(numero_etudiant, id_mat)
);

CREATE TABLE needhelp (
  numero_etudiant INT(8) REFERENCES etudiant,
  id_mat INT(4) REFERENCES matiere,
  commentaire varchar(300),
  PRIMARY KEY(numero_etudiant, id_mat)
);

CREATE TABLE cours (
  id_grp INT(4) REFERENCES groupe,
  id_mat INT(4) REFERENCES matiere,
  PRIMARY KEY(id_grp,id_mat)
);

INSERT INTO groupe values
  (0000,'INFO',1),
  (0001,'INFO',2),
  (0002,'RT',1),
  (0003,'RT',2),
  (0004,'MMI',1),
  (0005,'MMI',2),
  (0006,'GEII',1),
  (0007,'GEII',2);

INSERT INTO privileges values
  (0000,'Administrateur'),
  (0001,'Utilisateur');
