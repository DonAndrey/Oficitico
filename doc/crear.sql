CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(20),
    name varchar(70) NOT NULL,
    last_name_1 varchar(30) NOT NULL,
    last_name_2 varchar(30),
    address varchar(300) NOT NULL,
    phone varchar(20),
    cellphone varchar(20) NOT NULL,
    picture VARCHAR(300),
    x DOUBLE,
	y DOUBLE,
    state INT(1),
    UNIQUE(username)
);

CREATE TABLE activities (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    description VARCHAR(2048) NOT NULL,
    user_id INT UNSIGNED,
    FOREIGN KEY(user_id) REFERENCES users(id)
);


CREATE TABLE doings (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    picture VARCHAR(300) NOT NULL,
    description VARCHAR(1024) NOT NULL,
    cost double(8,2),
    time varchar(20),
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    user_id INT UNSIGNED,
    FOREIGN KEY(user_id) REFERENCES users(id)
);

