# TalentSpot – Full-Stack Laravel 12 Job Portal

**TalentSpot** is a **full-stack web application** built with **Laravel 12** and **Blade templates**.
It allows users to **register, login, create jobs, search jobs**, and **browse jobs by tags** in a seamless, user-friendly interface.

---

## Table of Contents

* [Features](#features)
* [Requirements](#requirements)
* [Installation](#installation)
* [Environment Configuration](#environment-configuration)
* [Running the Application](#running-the-application)
* [Routes & Endpoints](#routes--endpoints)

  * [Public Routes](#public-routes)
  * [Authentication Routes](#authentication-routes)
  * [Protected Routes](#protected-routes)
  * [Search & Tags](#search--tags)
* [Middleware](#middleware)
* [Project Structure](#project-structure)

---

## Features

* User registration and login
* Create, view, and manage job postings
* Search for jobs by keyword
* Browse jobs by tags
* Authentication-protected actions for job creation
* Blade-powered frontend with responsive layouts

---

## Requirements

* PHP 8.1+
* Composer
* MySQL / PostgreSQL / SQLite
* Laravel 12
* Web server (Apache/Nginx or PHP built-in server)

---

## Installation

1. Clone the repository:

```bash
git clone https://github.com/yourusername/talentspot.git
cd talentspot
```

2. Install dependencies:

```bash
composer install
```

3. Copy `.env.example` to `.env` and configure environment variables:

```bash
cp .env.example .env
```

4. Generate application key:

```bash
php artisan key:generate
```

5. Run database migrations:

```bash
php artisan migrate
```

6. (Optional) Seed the database:

```bash
php artisan db:seed
```

---

## Environment Configuration

Update your `.env` file with database and app settings:

```dotenv
APP_NAME=TalentSpot
APP_ENV=local
APP_KEY=base64:generated_key_here
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=talentspot
DB_USERNAME=root
DB_PASSWORD=secret
```

---

## Running the Application

Start the development server:

```bash
php artisan serve
```

The application will be available at: `http://127.0.0.1:8000`

---

## Routes & Endpoints

### Public Routes

 Method  URI                 Description            

 GET     `/`                 View all job listings  
 GET     `/search`           Search jobs by keyword 
 GET     `/tags/{tag:name}`  Browse jobs by tag     

### Authentication Routes (Guest Only)

 Method  URI          Description            

 GET     `/register`  Show registration form 
 POST    `/register`  Register a new user    
 GET     `/login`     Show login form        
 POST    `/login`     Authenticate user      

### Protected Routes (Auth Required)

 Method  URI             Description                   

 GET     `/jobs/create`  Show form to create a new job 
 POST    `/jobs`         Store a new job               
 DELETE  `/logout`       Logout the authenticated user 



## Middleware

* **auth:** Protects routes accessible only to authenticated users (`/jobs/create`, `/jobs`)
* **guest:** Protects routes accessible only to unauthenticated users (`/login`, `/register`)


