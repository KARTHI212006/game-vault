# GameVault (PHP)

An early-stage **PHP and MySQL** game storefront that lists games from a database and includes a simple admin form for adding new ones.

> **Status:** Learning prototype. The storefront page and admin upload form work at a basic level. The Home, Store, and Login links are placeholders, and the admin form has no authentication. This version is not production-ready.
>
> A more complete React-based GameVault is in [`next-program-`](https://github.com/KARTHI212006/next-program-).

## Overview

`index.php` reads rows from a `games` table and renders them as cards (cover image, title, price). `admin/add_game.php` posts to `admin/insert_game.php`, which saves the uploaded cover image to `uploads/` and inserts a new game row.

## Features

- Home page with hero section and a featured games grid loaded from MySQL.
- Admin form to add a game (title, price, description, cover image).
- Standalone browser calculator in `calculator/` (see its own README).

## Technology Stack

| Area | Technology |
| --- | --- |
| Backend | PHP (`mysqli`) |
| Database | MySQL |
| Frontend | HTML, CSS |
| Local server | XAMPP (Apache + MySQL) |

## Project Structure

```text
.
├── index.php            # Storefront page (reads from the games table)
├── config.php           # MySQL connection settings
├── style.css
├── test.php
├── admin/
│   ├── add_game.php     # Add-game form
│   └── insert_game.php  # Handles upload and database insert
├── calculator/          # Standalone calculator page
└── images/              # Sample cover images
```

## Prerequisites

- [XAMPP](https://www.apachefriends.org/) (or any Apache + PHP + MySQL stack)

## Setup

1. Copy this folder into your web root, for example `htdocs/gamevault`.
2. Start Apache and MySQL.
3. Create a database named `gamevault` and a `games` table with the columns used in the code: `id`, `title`, `price`, `image`, `description`.
4. Create an `uploads/` folder in the project root (it is not tracked in this repository).
5. Open `config.php` and set your **own** local MySQL username and password.
6. Visit `http://localhost/gamevault/`.

A SQL schema file is not included yet.

## Known Limitations

- `admin/` pages have no login protection.
- `insert_game.php` builds SQL from raw form input (SQL injection risk) and accepts any uploaded file type.
- Database credentials are set directly in `config.php`.

These are documented honestly because this is a learning project. Fixing them with prepared statements, upload validation, and admin authentication is the next step.

## Future Improvements

- Add a `schema.sql` and sample data.
- Use prepared statements and validate uploads.
- Add admin authentication and user login.
- Implement the Store and Login pages.

## Author

**Karthikeyan S** — B.E. Computer Science & Engineering (Expected 2027)

- GitHub: [KARTHI212006](https://github.com/KARTHI212006)
- Portfolio: [s-karthikeyan-portfolio.vercel.app](https://s-karthikeyan-portfolio.vercel.app/)
