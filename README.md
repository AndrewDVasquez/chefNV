<div align="center">

# 🍽️ Chef NV Website

**A modern e-commerce website built with Laravel for a home-based food business.**

Designed to simplify online ordering, showcase products, and streamline business operations.

<img src="https://github.com/user-attachments/assets/20a8daf1-0758-4882-a3ee-a3e324ca8532" width="350">

<br>

![Laravel](https://img.shields.io/badge/Laravel-12-red?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.4-777BB4?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap)
![Docker](https://img.shields.io/badge/Docker-Laravel%20Sail-2496ED?style=for-the-badge&logo=docker)

</div>

---

#  About

Chef NV Website is a full-stack e-commerce application built using **Laravel 12**.

As a former chef, I created this project to support my wife's home-based food business by providing customers with an easy way to browse products, place orders, and stay updated with new offerings.

The goal was to build a clean, responsive platform while applying modern Laravel development practices.

---

#  Features

## Customer

- Browse food products
- Search products
- Browse by category
- Shopping cart
- Secure checkout
- Contact form
- Blog
- Responsive design

## Admin

- Dashboard
- Product Management (CRUD)
- Category Management (CRUD)
- Order Management
- Blog Management
- Image Uploads

---

# 🛠 Tech Stack

| Category | Technologies |
|-----------|--------------|
| Backend | Laravel 12, PHP 8.4 |
| Frontend | Blade, Bootstrap 5, JavaScript, Vite |
| Database | MySQL |
| Development | Docker, Laravel Sail, Composer, NPM |
| Version Control | Git & GitHub |
| Editor | VS Code |

---

#  Project Structure

```
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
tests/
```

---

#  Getting Started

## Clone the repository

```bash
git clone https://github.com/yourusername/chefnv-website.git

cd chefnv-website
```

## Install dependencies

```bash
composer install

npm install
```

## Configure environment

```bash
cp .env.example .env

php artisan key:generate
```

Update your database credentials inside `.env`.

---

## Start Laravel Sail

```bash
./vendor/bin/sail up -d
```

---

## Run migrations

```bash
./vendor/bin/sail artisan migrate
```

---

## Build frontend assets

```bash
npm run dev
```

---

Visit:

```
http://localhost
```

---

# 📸 Screenshots

| Home Page |
|-----------|
| <img src="https://github.com/user-attachments/assets/20a8daf1-0758-4882-a3ee-a3e324ca8532" width="500"> |

*(More screenshots coming soon.)*

---

#  Learning Objectives

This project allowed me to gain practical experience with:

- Laravel MVC Architecture
- E-commerce functionality
- CRUD operations
- Authentication & Authorization
- Database relationships
- Image uploads
- Form validation
- Responsive UI development
- Docker with Laravel Sail
- Git workflow

---

#  Future Improvements

- Payment gateway integration
- Wishlist
- Order tracking
- Product reviews
- Email notifications
- Inventory management

---

# Author

**Andrew Vasquez**

BSc Information Technology Student

Full-Stack Laravel Developer

🇹🇹 Trinidad & Tobago

GitHub: https://github.com/AndrewDVasquez

---

## License

This project is licensed under the MIT License.
