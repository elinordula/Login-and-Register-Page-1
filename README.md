PHP Login & Registration System

This is a simple login and registration system developed using **HTML, CSS, PHP**, and **MySQL** (via **phpMyAdmin**). It allows users to create an account using their college email and login with valid credentials. All user data is stored securely in a MySQL database.

Features

- User Registration with Email and Password
- Login Authentication
- Password Confirmation during Registration
- Front-end form validation
- MySQL database connectivity using `mysqli`
- Redirects to a protected page upon successful login

Technologies Used

- Frontend: HTML5, CSS3, Boxicons
- Backend: PHP
- Database: MySQL (phpMyAdmin)

Database

Database Name: rit_fleet
Table Name: register

Structure:

| Column          | Type    |
| --------------- | ------- |
| email           | VARCHAR |
| password        | VARCHAR |
| confirmpassword | VARCHAR |

Note: Passwords are stored as plain text in this demo. For production, always hash passwords using `password_hash()` and verify with `password_verify()`.

Setup Instructions

1. Clone or download the repository.
2. Start your local server (XAMPP recommended).
3. Create a database `rit_fleet` in phpMyAdmin.
4. Run the following SQL query to create the table:

sql
CREATE TABLE register (
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  confirmpassword VARCHAR(255) NOT NULL
);


5. Place all files inside your XAMPP `htdocs` folder.
6. Open `http://localhost/sample1.html` in your browser to start.

To Do

* Add password hashing for security.
* Improve error handling and form validation.
* Create a user dashboard after login.

