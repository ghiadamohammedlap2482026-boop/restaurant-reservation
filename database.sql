CREATE DATABASE IF NOT EXISTS restaurant_reservations
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE restaurant_reservations;

CREATE TABLE IF NOT EXISTS reservations (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(254) NOT NULL,
    phone VARCHAR(30) NULL,
    reservation_date DATE NOT NULL,
    reservation_time TIME NOT NULL,
    guests TINYINT UNSIGNED NOT NULL,
    notes VARCHAR(500) NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT chk_reservation_guests CHECK (guests BETWEEN 1 AND 10)
);
