# TaskManagement

A draggable card style web-based task management system UI for Web Programming Lab made by me and my teammates. <br>
It is built with PHP, SQL, HTML, CSS, and JavaScript.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [File Structure](#file-structure)

## Introduction

This project is a simple task management system that allows users to sign up, log in, and manage their tasks. Users can add, edit, and delete tasks. The project is designed with a clean and intuitive interface.

## Features

- User authentication (sign up, log in, log out)
- Add, edit, and delete tasks
- Responsive design

## Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/your-username/your-repository.git
   ```

2. Navigate to the project directory:
   ```sh
   cd your-repository
   ```

3. Import the database:
   
   - Create a database in your SQL server.
   - Import the database.sql file (if you have one) to set up the required tables.

4. Configure the database connection:
   - Open _dbconnect.php and update the database connection details.

## Usage

1. Start your local server (e.g., XAMPP, WAMP).
2. Open your web browser and go to `http://localhost/your-repository`.
3. Sign up for a new account or log in with existing credentials.
4. Start managing your tasks.

## File Structure

- `partials/_dbconnect.php`: Contains the database connection script.
- `partials/_nav.php`: Contains the navigation bar HTML.
- `homelogged.php`: The home page for logged-in users.
- `README.md`: Documentation file.
- `login.css`: Styles for the login page.
- `login.php`: Login page script.
- `login.png`: Image used on the login page.
- `logout.php`: Logout script.
- `signup.css`: Styles for the signup page.
- `signup.php`: Signup page script.
- `style-task.css`: Styles for the task management interface.
- `task-script.js`: JavaScript for task management functionalities.
- `task.php`: Main task management page.

