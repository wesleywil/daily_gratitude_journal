# Gratitude Daily Journal

A project that allows users to write some daily gratitudes in a platform that behaves like a journal

## Tech Stack

**Language:** PHP, SQL

**Backend:** Laravel, MySQL

**FrontEnd:** HTML(Blade), Tailwindcss

## Screenshots

### Home

![Homepage](https://i.imgur.com/VzyHjEk.png)

### Journal

![Journal](https://i.imgur.com/03eoL42.png)

### Gratitude List\*

![Gratitudes](https://i.imgur.com/4KdTYt9.png)

### Gratitude Detils/Update

![DEMO](https://i.imgur.com/d1p0F8J.png)

### Demo

![DEMO](https://i.imgur.com/HG49O8P.gif)

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
