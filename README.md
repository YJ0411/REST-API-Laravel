# YJ0411-REST-API-Laravel

A simple REST API built with **Laravel**.  
This project is for learning and experimenting with Laravel RESTful APIs, including CRUD operations.

---

## 🚀 Features
- Laravel 10+ REST API
- CRUD example (Posts API)
- MySQL database integration
- Organized structure with Models, Controllers, and Routes

---

## 🛠️ Requirements
- PHP 8.1 or higher
- Composer
- MySQL (or MariaDB)
- Laravel CLI

---

## ⚡ Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/YOUR-USERNAME/YJ0411-REST-API-Laravel.git
   cd YJ0411-REST-API-Laravel/src
   ```

 2. Install dependencies:
   ```bash
    composer install
   ```  

 3. Copy .env file and configure database:
   ```bash
    cp .env.example .env
   ```  
   Update database credentials inside .env.

 4. Generate application key:
   ```bash
    php artisan key:generate
   ```  

 5. Run database migrations:
   ```bash
    php artisan migrate
   ```  

 6. Start local server:
   ```bash
    php artisan serve
   ```  
   App will be running on 👉 http://127.0.0.1:8000

---

## 📌 API Endpoints
| Method | Endpoint          | Description     |
| ------ | ----------------- | --------------- |
| GET    | `/api/health`     | Health Check    |


---

## 🧪 Testing with cURL
   ```bash
    curl -X GET http://127.0.0.1:8000/api/health \
        -H "Accept: application/json" \
        -H "Content-Type: application/json"
   ```  