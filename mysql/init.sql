CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

INSERT INTO users (name, email) VALUES 
('Ricardo Tello', 'ricardo10301984@gmail.com'),
('Vanessa Ojeda', 'vanebb1989@gmail.com');