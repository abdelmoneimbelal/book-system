# 📚 Book Management System

A modern, full-featured library management system built with Laravel 12 and Filament 4.0. This application provides a comprehensive solution for managing books, authors, borrowers, and book lending operations through an intuitive admin dashboard.

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat-square&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square&logo=php)
![Filament](https://img.shields.io/badge/Filament-4.0-FFB02B?style=flat-square)
![License](https://img.shields.io/badge/license-MIT-green?style=flat-square)

## ✨ Features

### 📖 Core Functionality
- **Books Management**: Complete CRUD operations for books with ISBN, publication year, and inventory tracking
- **Authors Management**: Manage authors and their associated books
- **Categories Management**: Organize books into categories with many-to-many relationships
- **Borrowers Management**: Track library members and borrowers
- **Borrowing System**: Manage book loans with status tracking (borrowed/returned)
- **Inventory Control**: Track total copies and available copies for each book

### 🎨 Admin Dashboard
- **Modern UI**: Beautiful and responsive admin panel powered by Filament
- **User Management**: Complete user authentication and authorization system
- **Real-time Updates**: SPA (Single Page Application) experience
- **Data Tables**: Advanced filtering, sorting, and searching capabilities
- **Form Validation**: Comprehensive form validation and error handling

## 🛠️ Technology Stack

- **Framework**: Laravel 12.x
- **PHP**: 8.2+
- **Admin Panel**: Filament 4.0
- **Frontend**: Tailwind CSS 4.0, Vite
- **Database**: MySQL/PostgreSQL/SQLite (configurable)
- **Testing**: Pest PHP

## 📋 Requirements

- PHP >= 8.2
- Composer
- Node.js & NPM
- Database (MySQL, PostgreSQL, or SQLite)

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/abdelmoneimbelal/book-system.git
   cd book-system
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database**
   Edit `.env` file and set your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=book_system
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Build assets**
   ```bash
   npm run build
   ```

8. **Create admin user**
   ```bash
   php artisan make:filament-user
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

10. **Access the admin panel**
    Navigate to `http://localhost:8000/admin` and login with your admin credentials.

## 📁 Project Structure

```
book-system/
├── app/
│   ├── Filament/
│   │   └── Admin/
│   │       └── Resources/
│   │           ├── Authors/      # Author management
│   │           ├── Books/        # Book management
│   │           ├── Borrowers/    # Borrower management
│   │           ├── Borrowings/   # Borrowing records
│   │           ├── Categories/   # Category management
│   │           └── Users/        # User management
│   └── Models/
│       ├── Author.php
│       ├── Book.php
│       ├── Borrower.php
│       ├── Borrowing.php
│       └── Category.php
├── database/
│   └── migrations/               # Database migrations
└── resources/
    └── views/                    # Blade templates
```

## 🗄️ Database Schema

### Main Entities
- **Books**: Stores book information (title, ISBN, published year, copies)
- **Authors**: Author information
- **Categories**: Book categories
- **Borrowers**: Library members
- **Borrowings**: Loan records with status tracking
- **Users**: Admin users for the system

### Relationships
- Books belong to Authors (Many-to-One)
- Books belong to many Categories (Many-to-Many)
- Books have many Borrowings (One-to-Many)
- Borrowers have many Borrowings (One-to-Many)
- Borrowings belong to both Books and Borrowers

## 🎯 Usage

### Managing Books
1. Navigate to **Books** in the admin panel
2. Click **New Book** to add a new book
3. Fill in the book details (title, ISBN, publication year, copies)
4. Select an author and assign categories
5. Save the book

### Managing Borrowings
1. Go to **Borrowings** section
2. Create a new borrowing record
3. Select a borrower and a book
4. Set the borrowing date and status
5. The system automatically tracks available copies

## 🧪 Testing

Run the test suite using Pest:

```bash
php artisan test
```

## 📝 Available Commands

- `composer setup` - Complete setup (install dependencies, generate key, migrate, build assets)
- `composer dev` - Start development server with queue and Vite
- `php artisan test` - Run tests
- `php artisan migrate` - Run database migrations
- `php artisan make:filament-user` - Create a new admin user

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 👤 Author

**Abdelmoneim Belal**

- GitHub: [@abdelmoneimbelal](https://github.com/abdelmoneimbelal)
- Repository: [book-system](https://github.com/abdelmoneimbelal/book-system)

## 🙏 Acknowledgments

- [Laravel](https://laravel.com) - The PHP Framework
- [Filament](https://filamentphp.com) - The admin panel framework
- All contributors and supporters

---

⭐ If you find this project helpful, please consider giving it a star!
