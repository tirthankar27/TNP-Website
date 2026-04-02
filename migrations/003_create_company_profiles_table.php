<?php
return "
CREATE TABLE company_profiles (
    id INT AUTO_INCREMENT PRIMARY KEY,

    user_id INT NOT NULL,

    company_name VARCHAR(255) NOT NULL,

    contact_number VARCHAR(20),

    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
";