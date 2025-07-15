CREATE TABLE authors(
    id BIGINT auto_increment PRIMARY KEY,
    firstname VARCHAR(100),
    lastname VARCHAR(100),
    email VARCHAR(100)
);

CREATE TABLE posts(
    id BIGINT auto_increment PRIMARY KEY,
    title VARCHAR(100) not NULL,
    body VARCHAR(100) not NULL,
    publish_date CHAR(8),
    author_id BIGINT,
    FOREIGN KEY (author_id) REFERENCES authors(id)
);

CREATE TABLE comments(
    id BIGINT auto_increment PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    body VARCHAR(200) NOT NULL,
    date CHAR(8),
    post_id BIGINT,
    FOREIGN KEY (post_id) REFERENCES posts(id)
)