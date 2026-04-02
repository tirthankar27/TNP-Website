<?php
return "
CREATE TABLE internships (
    id INT AUTO_INCREMENT PRIMARY KEY,

    company_name VARCHAR(255) NOT NULL,

    mca_registration_date DATE,

    allowed_branches JSON,

    job_role VARCHAR(255),

    duration_months INT,

    stipend DECIMAL(10,2),

    ppo_ctc DECIMAL(10,2),

    selection_rounds TEXT,

    hr_name VARCHAR(100),
    hr_email VARCHAR(100),
    hr_phone VARCHAR(20),

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
";