# php_messenger
This is my pet project - kind of messenger on PHP.

This project can be used as a kind of messenger, I made it just for my portfolio.

Project include dynamic filling for some pages using databases (in this case - MySQL).
Thus for the full-fledged work of the project, a database ("messenger") is required. The database should include three tables: "categories" - Name of categories displayed at the top of the page in include/header.php, "users" - Table with data about registered users, "messages" - Table of all messages.

Table structures:

1. categories -
CREATE TABLE categories
(
id INT AUTO_INCREMENT,
name VARCHAR(255) NOT NULL,
PRIMARY KEY(id)
);

2. users - 
CREATE TABLE users
(
id INT AUTO_INCREMENT,
login VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
username VARCHAR(255) NOT NULL,
PRIMARY KEY(id)
);

3. messages -
CREATE TABLE messages
(
id INT AUTO_INCREMENT,
sender_username VARCHAR(255) NOT NULL,
recipient_username VARCHAR(255) NOT NULL,
message text NOT NULL,
time DATETIME DEFAULT(CURRENT_TIMESTAMP) NOT NULL,
PRIMARY KEY(id)
);
