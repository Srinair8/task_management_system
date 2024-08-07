# TASK MANAGEMENT SYSTEM
A simple task management system using HTML, CSS, JavaScript, MySQL, Laravel where users can create, view, update, and delete tasks. 

## Prerequisites
- PHP >= 8.0
- Composer
- MySQL
- XAMPP (for local server)

## Setup Instructions
### 1. Clone the Repository
git clone repository-url
cd project-directory

### 2. Install Dependencies
composer install
npm install
npm run dev

### 3. Setup environment variables
cp .env.example .env
Open the .env file and configure the following settings:

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:uymPiG4gaCgm+gpgl0UO1l9UMkmd6tO5mLQeW5x8K6o=
APP_DEBUG=true
APP_TIMEZONE=Asia/Kolkata
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_management_system
DB_USERNAME=root
DB_PASSWORD=yourpassword   --------Replace yourpassword with your actual MySQL password.

### 4. Generate Application Key
php artisan key:generate

### 5. Run Migrations
php artisan migrate

### 6. Start the Local Development Server
php artisan serve

The application will be available at http://localhost:8000.

########Usage
Create a Task: Navigate to /tasks/create and fill in the form.
View Tasks: Navigate to /tasks to see the list of tasks.
Edit a Task: Click on 'Edit' next to a task to modify it.
Delete a Task: Click on 'Delete' next to a task to remove it.

########Commands Overview
Starting the server: php artisan serve
Running migrations: php artisan migrate
Generating application key: php artisan key:generate


