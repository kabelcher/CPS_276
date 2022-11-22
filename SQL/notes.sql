USE kabelcher;

DROP TABLE IF EXISTS notes;

CREATE TABLE notes (
  id int(100) NOT NULL AUTO_INCREMENT,
  date_time timestamp NULL,
  note varchar(500) NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB

