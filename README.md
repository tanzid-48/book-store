# Book Store Project

This is a simple Book Store web application built with Laravel. The project allows users to manage a collection of books, including adding, editing, viewing, and deleting book records. It demonstrates CRUD operations, user authentication, and basic web application structure using Laravel's MVC architecture.

---

## 📺 Demo Video

<div align="center">
  
[![Book Store Laravel Demo](https://github.com/tanzid-48/book-store/blob/main/Assets/Pictures/Dashboard.png)](https://youtu.be/8OAsc-vdX6khttps://youtu.be/8OAsc-vdX6k)

</div>

> _Click the image above to watch the demo on YouTube!_


---

## Features


- Add new books with details
- Edit and update existing books
- Delete books with validation
- View a list of all books
- View detailed information for each book
- Responsive UI with Blade templates

## Project Structure

- `app/Models/` - Eloquent models for Book and User
- `app/Http/Controllers/` - Controllers handling business logic
- `database/migrations/` - Database schema migrations
- `database/seeders/` - Database seeders for initial data
- `resources/views/` - Blade templates for UI
- `routes/web.php` - Web routes for the application
- `public/` - Publicly accessible files (entry point, assets)
- `Assets/` - Project screenshots and demo video

## Getting Started

### Prerequisites
- PHP >= 8.0
- Composer
- MySQL (or another supported database)
- Node.js & npm (for frontend assets)

### Installation

1. Clone the repository:
   ```sh
   git clone <repository-url>
   cd book-store
   ```
2. Install PHP dependencies:
   ```sh
   composer install
   ```
3. Install Node.js dependencies:
   ```sh
   npm install
   ```
4. Copy the example environment file and set your configuration:
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```
5. Set up the database:
   - By default, uses SQLite. Update `.env` if using another DB.
   - Run migrations and seeders:
     ```sh
     php artisan migrate --seed
     ```
6. Build frontend assets:
   ```sh
   npm run build
   ```
7. Start the development server:
   ```sh
   php artisan serve
   ```

Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Screenshots & Demo

Screenshots and a demo video are available in the `Assets/` folder:
- `Assets/Pictures/` - UI screenshots
- `Assets/Video/Book-Store-Project-Video.mp4` - Project walkthrough

## Testing

Run feature and unit tests with:
```sh
php artisan test
```

## License

This project is open-source and available under the [MIT License](LICENSE).
