The Student Task Manager is a mini web application built with Laravel to manage students and their assigned tasks efficiently. It provides full CRUD functionality for students and tasks, enabling users to add, update, delete, and list students and their tasks. Tasks can be assigned to individual students with a status indicator that can be updated via a dropdown (Pending, In Progress, Completed).

The app features a responsive user interface built with Bootstrap, a simple navigation menu, and a dashboard that displays all students with their tasks and task counts by status. Additionally, the project includes a basic API endpoint to fetch all tasks assigned to a specific student in JSON format.

Input validation is implemented to ensure data integrity, and route protection is added through middleware-based authentication to secure the application.

Features
Student CRUD operations (Create, Read, Update, Delete)

Task CRUD operations linked to students

Task status update via dropdown

Dashboard displaying students with their tasks and task status counts

Responsive UI with Bootstrap for easy navigation and usability

Basic API endpoint: /api/students/{id}/tasks

Input validation for safer data handling

Middleware-based route protection for authentication

Technology Stack
Backend: Laravel PHP Framework

Database: MySQL

Frontend: Bootstrap CSS Framework

Setup Instructions
Clone the repository.

Run composer install to install PHP dependencies.

Copy .env.example to .env and configure your database settings.

Run php artisan key:generate to generate the application key.

Run php artisan migrate to create database tables.

Start the development server with php artisan serve.

Open the application in your browser via http://localhost:8000.


