# Quai Antique 🍴

**Quai Antique** is a complete, dynamic web application for restaurant management. Built with **Symfony 6.2**, it provides a streamlined interface for customers to view menus and make reservations, while offering a robust administration dashboard for the restaurant owner to manage daily operations.

---

## ✨ Features

- **🍽️ Dynamic Menu Management**: Detailed listings of dishes, categorized menus, and set menus (formules).
- **📅 Smart Reservation System**: Real-time booking with capacity management to avoid overbooking.
- **🕒 Operating Hours Control**: Easily update lunch and dinner opening/closing times for each day of the week.
- **🖼️ Photo Gallery**: Upload and manage high-quality images of the restaurant and its dishes.
- **🔐 User Accounts**: Secure customer registration and login with profile management.
- **🛠️ Admin Dashboard**: Centralized panel to manage dishes, menus, reservations, and operating hours.

---

## 🛠️ Technology Stack

- **PHP**: ^8.1
- **Framework**: Symfony 6.2
- **Database**: MariaDB 10.9 (Dockerized)
- **Templating**: Twig
- **ORM**: Doctrine
- **Styling**: Vanilla CSS / Bootstrap 5 (or specified)
- **Environment**: Docker & Docker Compose

---

## 🚀 Getting Started

### Prerequisites

- [PHP 8.1](https://www.php.net/downloads) or higher
- [Composer](https://getcomposer.org/)
- [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- [Symfony CLI](https://symfony.com/download) (optional but recommended)

### Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/Quai-Antique-.git
   cd Quai-Antique-
   ```

2. **Install PHP dependencies**:
   ```bash
   composer install
   ```

3. **Set up the environment variables**:
   Create a `.env.local` file (or edit the existing `.env`):
   ```bash
   DATABASE_URL="mysql://symfony_user:symfony_password@127.0.0.1:3306/symfony_db?serverVersion=mariadb-10.9.0&charset=utf8mb4"
   ```

4. **Start the database container (Docker)**:
   ```bash
   docker-compose up -d
   ```

5. **Create the database and run migrations**:
   ```bash
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   ```

6. **Load fixtures (Optional - for test data)**:
   ```bash
   php bin/console doctrine:fixtures:load
   ```

---

## 💻 Running Locally

To start the local Symfony development server:
```bash
symfony serve
```
Alternatively, using the PHP built-in server:
```bash
php -S localhost:8000 -t public
```

Access the application at `http://localhost:8000`.

---

## 🧪 Testing

The project includes unit and functional tests using PHPUnit:
```bash
php bin/phpunit
```

---

## 📄 License

This project is proprietary. Please check the `license` field in `composer.json` for more details.

---

*Made with ❤️ for the food lovers.*
