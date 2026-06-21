CREATE TABLE submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,

    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    phone VARCHAR(50),

    company_name VARCHAR(255),
    tagline VARCHAR(255),
    address VARCHAR(255),
    website VARCHAR(255),
    social_links TEXT,
    model VARCHAR(50),
    primary_color VARCHAR(7),
    secondary_color VARCHAR(7),
    logo_path VARCHAR(500),

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);