<?php
return "
CREATE TABLE applications (
    id INT AUTO_INCREMENT PRIMARY KEY,

    user_id INT NOT NULL,

    opportunity_type ENUM('internship','placement') NOT NULL,

    opportunity_id INT NOT NULL,

    resume_path VARCHAR(255),

    status ENUM('applied','shortlisted','rejected','selected') DEFAULT 'applied',

    applied_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
";