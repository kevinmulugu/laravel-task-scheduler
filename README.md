# Laravel Task Scheduler

## Overview
A Laravel project that demonstrates task scheduling and artisan commands. This application features a user management system with the ability to generate a large dataset and export it efficiently.

## Features
- **Users Table**: Manages user details (name, email, phone, password).
- **Factory and Seeder**: Generates 50,000 users for testing and development.
- **CSV Export Command**: Artisan command to export user data into CSV files, with each file limited to 10,000 users.
- **Task Scheduler**: Configured to run the CSV export command weekly.

## Installation
1. Clone the repository:
   ```bash
   git clone git@github.com:kevinmulugu/laravel-task-scheduler.git
2. Navigate to the project directory:
   ```bash
   cd laravel-task-scheduler
3. Install the dependencies:
   ```bash
    composer install
4. Create a copy of the `.env` file:
5. Generate an application key:
   ```bash
   php artisan key:generate
6. Storage link:
   ```bash
   php artisan storage:link
7. Migrate the database:
   ```bash
    php artisan migrate
8. Seed the database:
9. Run command to export users to CSV:
   ```bash
   php artisan export:users
   ```
