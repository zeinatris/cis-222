CREATE TABLE threads(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content VARCHAR(255) NOT NULL,
    creation_date DATETIME NOT NULL,
    last_edit_date DATETIME NOT NULL,
    creators_username VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE messages(
   id INT UNSIGNED NOT NULL AUTO_INCREMENT,
   thread_id INT UNSIGNED NOT NULL,
   content VARCHAR(255) NOT NULL,
   date DATETIME NOT NULL,
   username VARCHAR(255) NOT NULL,
   PRIMARY KEY (id),
   FOREIGN KEY (thread_id) REFERENCES threads(id)
);