````markdown
# Laravel API for Students

This repository contains a Laravel API project for managing student information. This guide will help you set up the project locally using Docker.

## Prerequisites

-   Docker
-   Docker Compose

## Getting Started

### Clone the Repository

```bash
git clone https://github.com/your-username/laravel-student-api.git
cd laravel-student-api
```
````

### Create Environment File

Copy the example `.env` file and configure the necessary environment variables:

```bash
cp .env.example .env
```

### Update the Environment File

Update the `.env` file with the following database connection settings:

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=laravel
```

### Build and Start the Docker Containers

Use Docker Compose to build and start the containers:

```bash
docker-compose up --build -d
```

This command will start the following containers:

-   `laravel_app`: The PHP application container.
-   `nginx_webserver`: The Nginx web server container.
-   `mysql`: The MySQL 5.7 database container.
-   `phpmyadmin`: The phpMyAdmin container.

### Install Composer Dependencies

After the containers are up, you need to install the project dependencies. Open a terminal in the `laravel_app` container and run Composer install:

```bash
docker-compose exec app composer install
```

### Run Migrations

Run the database migrations to set up the necessary tables:

```bash
docker-compose exec app php artisan migrate
```

### Access the Application

You can now access the application and related services at the following URLs:

-   Laravel API: [http://localhost:8080](http://localhost:8080)
-   phpMyAdmin: [http://localhost:8081](http://localhost:8081)

### Stopping the Containers

To stop the Docker containers, use the following command:

```bash
docker-compose down
```

## Project Structure

-   `app/`: Contains the Laravel application code.
-   `config/`: Configuration files for the Laravel application.
-   `database/`: Database migrations and seeders.
-   `docker/`: Docker configuration files.
    -   `nginx/`: Nginx configuration files.
    -   `php/`: PHP configuration files.
-   `public/`: Publicly accessible files, including the front controller.
-   `resources/`: Blade templates, language files, and other resources.
-   `routes/`: Application route definitions.
-   `tests/`: Automated tests.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any changes.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
