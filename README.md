# DRAGO – Premium Product Showcase Website

A responsive product showcase website with an admin panel, built using PHP and MySQL.  
Designed with a premium black and gold theme and fully responsive for mobile and desktop.

---

## 🚀 Live Features

### 🔹 User Side
- Premium dark theme (Black & Gold UI)
- Responsive layout (Mobile + Desktop)
- Product listing with dynamic database data
- About section
- Contact section with social links
- Modern footer design

### 🔹 Admin Panel
- Secure admin login (password_hash / password_verify)
- Add products with image upload
- Edit product details
- Delete products (with confirmation)
- Session-based authentication

---

## 🛠 Tech Stack

- PHP (Core PHP)
- MySQL
- Bootstrap 5
- HTML5
- CSS3
- Git & GitHub

---

## 📂 Project Structure
drago-product-website/
│
├── admin/
│ ├── login.php
│ ├── dashboard.php
│ ├── add-product.php
│ ├── edit-product.php
│ ├── delete-product.php
│ └── auth.php
│
├── assets/
│ ├── css/
│ └── img/
│
├── includes/
│ ├── header.php
│ └── footer.php
│
├── config/
│ └── db.example.php
│
├── index.php
└── README.md

---

## ⚙️ Installation Guide

1. Clone the repository:
git clone https://github.com/yourusername/drago-product-website.git

2. Create a database in MySQL.

3. Import your SQL table structure.

4. Create `config/db.php` and add:

```php
<?php
$conn = mysqli_connect("localhost", "YOUR_DB_USER", "YOUR_DB_PASSWORD", "YOUR_DB_NAME");
?>

🔐 Security Notes

Passwords are hashed using password_hash()

Login uses password_verify()

Admin routes protected using session authentication

📱 Responsive Design

3 cards per row (Desktop)

2 cards per row (Tablet)

1 card per row (Mobile)

Fully optimized layout using Bootstrap Grid

📌 Future Improvements

Prepared statements to prevent SQL Injection

Image validation & size restriction

Role-based authentication

Deployment on live hosting

REST API integration

👨‍💻 Author

Bharani
Full Stack Developer (PHP & MySQL Focused)

GitHub: https://github.com/bharani4112
📄 License

This project is created for educational and client showcase purposes.


---




