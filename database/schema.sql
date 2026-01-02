---------- driver table------------
CREATE TABLE driver (
    driver_id INT AUTO_INCREMENT PRIMARY KEY,
    full_name varchar(20) NOT NULL,
    email VARCHAR(30) NOT NULL, 
    password VARCHAR(20),
    phone_number VARCHAR(20),
    life_time_vihecules INT,
    total_kms INT
    
);
----------  admin table------------

CREATE TABLE admin(
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name varchar(20) NOT NULL,
    email VARCHAR(30) NOT NULL, 
    username VARCHAR(30) NOT NULL,
    password VARCHAR(20),
    phone_number VARCHAR(20)
    );
---------- vehicules table------------

CREATE TABLE vehicules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(20) NOT NULL ,
    model VARCHAR(20) NOT NULL,
    mileage INT DEFAULT 0 ,
    is_active BOOLEAN NOT NULL ,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    driver_id INT ,
    FOREIGN KEY (driver_id) REFERENCES driver(driver_id),
    status ENUM("active","maintenance","out of service")
);

---------- maintenance table------------

CREATE TABLE maintenance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vehicle_id INT NOT NULL,
    description TEXT NOT NULL,
    maintenance_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (vehicle_id) REFERENCES vehicules(id) ON DELETE CASCADE
);


-----------------Assignment table ----------------------
CREATE TABLE assignment (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_driver INT NOT NULL,
    vehicle_id INT,
    start_date  DATE NOT NULL,
    end_date DATE NOT NULL,
    status ENUM("scheduled","sompleted","sctive"),
    FOREIGN KEY (vehicle_id) REFERENCES vehicules(id) ON DELETE CASCADE
);