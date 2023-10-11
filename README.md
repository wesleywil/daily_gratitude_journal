# Gratitude Daily Journal

A project that allows users to write some daily gratitudes in a platform that behaves like a journal

## Tech Stack

**Language:** PHP, SQL

**Backend:** Laravel, MySQL

**FrontEnd:** HTML(Blade), Tailwindcss

## Run Locally

### Clone the project

```bash
  git clone https://github.com/wesleywil/daily_gratitude_journal
```

### Setup .env

```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=your_mysql_port
DB_DATABASE=your_mysql_database
DB_USERNAME=your_mysql_username
DB_PASSWORD=your_mysql_password
```

### Installing dependencies

```bash
  composer install
```

### Migrate and Seed DB

```bash
    php artisan migrate
    php artisan db:seed
```

### Running the Application

```bash
  php artisan serve
```

## Authors

-   [Wesley Wilson](https://github.com/wesleywil)
