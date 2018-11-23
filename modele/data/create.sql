CREATE TABLE user
(
  id INTEGER PRIMARY KEY,
  login varchar(20),
  password varchar(30)
);

CREATE TABLE service
(
  id INTEGER PRIMARY KEY,
  commande varchar(10)
);
