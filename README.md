# 🍹 Bubble Tea App

A simple **Laravel web application** built as a university advanced web programming project. Users can create, view, edit and delete custom bubble tea (boba) creations and add reviews.

> Built with Laravel, SQL, phpMyAdmin and styled responsively with CSS & Tailwind.

## 🔗 Live Demo

Try the app live here: 👉 **https://bubble-tea-app-production.up.railway.app/bobas**

### 🧪 Test Accounts / Demo Logins

You can use the following accounts to test the app:

| Name           | Email                          | Password    | Role               |
|----------------|--------------------------------|------------|------------------|
| Sunil Laxman   | s.laxman@hudstudent.ac.uk      | password2  | Admin              |
| Kate Hutton    | k.l.hutton@hudstudent.ac.uk    | password   | Regular User       |
| Yousef Miandad | y.miandad@hudstudent.ac.uk     | letmein    | Regular User       |

> 💡 **Note:** Admin users have full control, while regular users have limited access.
---

## 🚀 Features

- Create your **own custom bubble tea** with selectable options.
- **Store and view** saved bubble tea creations.
- **Edit or delete** your entries.
- **User authentication** with access restrictions:
  - Admins have full control.
  - Regular users have limited access.
- Reviews associated with bubble tea entries (one‑to‑many *Eloquent* relationship).
- Responsive, styled UI.

## 🛠️ Technologies

| Technology | Used For |
|------------|-----------|
| **Laravel (PHP)** | Backend framework |
| **MySQL / SQL / phpMyAdmin** | Database & migrations |
| **Tailwind CSS** | Frontend styling |
| **Composer / npm** | Dependency management |
| **Blade Templates** | UI rendering |

## 📦 Local Installation

**Requirements**
- PHP (8.4)
- Composer
- Node.js & npm
- MySQL / MariaDB
- Nginx, Apache or other local server

Here is the local setup I used:

1. Install laravel Herd
2. clone github repo and add it as a site to laravel herd
3. open the repo in VS code
4. run in the terminal "composer install", "npm install", "npm run dev"
6. Replace current dockerfile with your chosen db, you can use my example via Docker:

```yaml
services:
  mysql:
    image: mysql:8.4
    container_name: bubble-tea-app-mysql
    environment:
      MYSQL_DATABASE: myapp
      MYSQL_USER: myapp
      MYSQL_PASSWORD: secret
      MYSQL_ROOT_PASSWORD: rootsecret
    ports:
      - "3306:3306"
```
7. run php artisan migrate seed -fresh
5. Open the site through Laravel Herd (Herd handles the web server using Nginx)
