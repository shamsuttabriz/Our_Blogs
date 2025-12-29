# Simple Blog Project (PHP OOP + MVC)

A beginner-friendly **Simple Blog application** built using **Core PHP**, **OOP principles**, and a **custom MVC architecture**.  
This project demonstrates how to structure a real-world PHP application **without any framework**.

---

## 🚀 Features

- Clean **MVC architecture**
- **OOP-based** PHP code
- CRUD for **Posts**
- CRUD for **Categories**
- Each post belongs to a category
- Uses **PDO** with prepared statements
- Simple **CSS styling**
- Works on **XAMPP / Apache**
- No authentication (open CRUD for learning purposes)

---

## 🛠 Tech Stack

- PHP 8+
- MySQL
- Apache (XAMPP)
- HTML5
- CSS3
- PDO (Database layer)

---

## 📂 Project Structure
simple_blog/
│
├── app/
│   ├── config/
│   │   └── config.php
│   │
│   ├── core/
│   │   ├── Database.php
│   │   ├── Model.php
│   │   └── Controller.php
│   │
│   ├── controllers/
│   │   ├── PostController.php
│   │   └── CategoryController.php
│   │
│   ├── models/
│   │   ├── Post.php
│   │   └── Category.php
│   │
│   └── views/
│       ├── layout/
│       │   ├── header.php
│       │   └── footer.php
│       │
│       ├── posts/
│       │   ├── index.php
│       │   ├── create.php
│       │   └── edit.php
│       │
│       └── categories/
│           ├── index.php
│           └── create.php
│
├── public/
│   ├── css/
│   │   └── style.css
│   └── index.php
