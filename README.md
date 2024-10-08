# TASK MANAGEMENT SYSTEM
A simple task management system using HTML, CSS, JavaScript, MySQL, Laravel where users can create, view, update, and delete tasks. 

## Prerequisites
- PHP >= 8.0
- Composer
- MySQL
- XAMPP (for local server)

## Setup Instructions
### 1. Clone the Repository
git clone repository-url,
cd project-directory

### 2. Install Dependencies
A) composer install
B) npm install
C) npm run dev

### 3. Setup environment variables
cp .env.example .env

### 4. Generate Application Key
php artisan key:generate

### 5. Run Migrations
php artisan migrate

### 6. Start the Local Development Server
php artisan serve

The application will be available at http://localhost:8000.

Navigate to http://127.0.0.1:8000/tasks/ to go the task list page

########Usage
1) Create a Task: Navigate to /tasks/create and fill in the form.
      http://localhost:8000/create
2) View Tasks: Navigate to http://localhost:8000/tasks to see the list of tasks.
3) Edit a Task: Click on 'Edit' next to a task to modify it.
4) Delete a Task: Click on 'Delete' next to a task to remove it.
5) Additionally there is a search functionality to filter tasks based on the title or status

########Commands Overview
1) Starting the server: php artisan serve
2) Running migrations: php artisan migrate
3) Generating application key: php artisan key:generate


