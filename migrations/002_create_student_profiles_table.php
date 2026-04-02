<?php
return "
CREATE TABLE student_profiles (
    id INT AUTO_INCREMENT PRIMARY KEY,

    user_id INT NOT NULL,

    resume_path VARCHAR(255),

    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
";