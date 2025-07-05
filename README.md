# MedNet Insurance Project

A web application for calculating and managing insurance quotes, built with Laravel.

## Features

- **Insurance Premium Calculator:** Users can input their details and receive a calculated insurance premium.
- **Quote Management:** All quotes are stored and can be viewed in a dashboard.
- **PDF Export:** Download insurance quotes as PDF files.
- **User-Friendly Forms:** Clean and simple UI for data entry and results.

## Requirements

- PHP >= 8.0
- Composer
- Laravel 10.x
- Node.js & npm (for frontend assets)
- [barryvdh/laravel-dompdf](https://github.com/barryvdh/laravel-dompdf) (for PDF generation)
- A database (MySQL, SQLite, etc.)

## Installation

1. **Clone the repository:**
   ```sh
   git clone https://github.com/hamzaaboras/MedNet-Larvel-php-Project.git
   cd MedNet-Larvel-php-Project
   ```

2. **Install PHP dependencies:**
   ```sh
   composer install
   ```

3. **Install JavaScript dependencies:**
   ```sh
   npm install
   ```

4. **Copy and configure environment variables:**
   ```sh
   cp .env.example .env
   ```
   Edit `.env` to match your database and mail settings.

5. **Generate application key:**
   ```sh
   php artisan key:generate
   ```

6. **Run migrations:**
   ```sh
   php artisan migrate
   ```

7. **Build frontend assets:**
   ```sh
   npm run build
   ```

8. **Start the development server:**
   ```sh
   php artisan serve
   ```

## Usage

- Visit `http://localhost:8000` to access the insurance quote form.
- Fill in the required details to calculate a premium.
- View all quotes in the dashboard.
- Download any quote as a PDF.

## Project Structure

- `app/Http/Controllers/` - Application controllers (business logic)
- `app/Models/` - Eloquent models (database)
- `resources/views/` - Blade templates (UI)
- `routes/web.php` - Web routes
- `database/migrations/` - Database schema

## License

This project is open-source and available under the [MIT License](LICENSE).

---

**Contributions and feedback are welcome!**