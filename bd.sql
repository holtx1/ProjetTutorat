
/*DROP TABLE needhelp;
DROP TABLE helper;
DROP TABLE etudiant;
DROP TABLE groupe;
DROP TABLE matiere;
DROP TABLE privileges;*/

CREATE TABLE privileges (
  id_priv INT(4) PRIMARY KEY,
  nom_priv VARCHAR(30)
);

CREATE TABLE matiere (
  id_mat INT(4) PRIMARY KEY,
  nom_mat VARCHAR(30)
);

CREATE TABLE groupe (
  id_grp INT(4) PRIMARY KEY,
  filiere VARCHAR(30),
  annee DATE
);

CREATE TABLE etudiant (
  numero_etudiant INT(8) PRIMARY KEY,
  mdp VARCHAR(25),
  nom VARCHAR(30),
  prenom VARCHAR(30),
  age INT(3),
  email VARCHAR(30),
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
