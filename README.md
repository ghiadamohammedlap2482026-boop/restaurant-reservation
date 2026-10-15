# Table & Thyme — Restaurant Reservation Demo

A student portfolio project demonstrating a responsive restaurant landing page and a PHP/MySQL reservation form.

## Features
- Responsive layout using Bootstrap 5
- Reservation form with server-side validation
- PDO prepared statement for inserting reservations
- CSRF token validation
- MySQL schema included in `database.sql`
- User-facing success and error pages

## Requirements
- PHP 8.1+ with PDO MySQL and mbstring extensions
- MySQL or MariaDB
- Apache or PHP's local development server

## Run locally with XAMPP
1. Start Apache and MySQL in XAMPP.
2. Copy this folder into `C:\xampp\htdocs\restaurant-reservation-starter`.
3. Open phpMyAdmin at `http://localhost/phpmyadmin`.
4. Import `database.sql` using the Import tab.
5. Check `config.php` and update database credentials if needed.
6. Open `http://localhost/restaurant-reservation-starter/`.

## Test checklist
- Submit a valid reservation and confirm the success page appears.
- In phpMyAdmin, open `restaurant_reservations` → `reservations` and confirm a row was added.
- Try an invalid email.
- Try a past date.
- Try zero or more than 10 guests by editing the request or selecting form options.
- Try a reservation time outside 11:00–22:00.
- Confirm the invalid submissions are rejected.

## Limitations
- This is a learning/demo project, not a production booking service.
- It does not check table capacity or prevent overlapping reservations.
- There is no admin authentication or public deployment included.
- Bootstrap is loaded from a CDN, so an internet connection is needed for its styles.

## Security notes
- Database values are inserted with PDO prepared statements.
- User-visible values are escaped before HTML output.
- The form uses a session CSRF token.
- Never commit real passwords, API keys, or personal data.

## Portfolio honesty
This repository represents the implementation currently present here. Describe your own contribution accurately and be prepared to explain the validation, database insert, and security measures.
