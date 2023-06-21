## Prerequisites

Make sure you have the following software installed on your machine:

- Docker
- Docker Compose

## Installation Steps

1. Clone the repository or download the source code of the Laravel application.
2. Open a terminal or command prompt and navigate to the project directory.
3. Copy the `.env.example` file to `.env` by executing the following command:
   ```
   cp .env.example .env
   ```
4. Start the Docker containers by running the following command:
   ```
   docker-compose up -d
   ```
5. Access the Laravel container's command-line interface (CLI) by executing:
   ```
   docker-compose exec -it laravel.test bash
   ```
   After successfully logged In to container

6. Generate a application key by running the following command inside the container:
   ```
   php artisan key:generate
   ```
7. Migrate the database and seed it with data by executing the following command:
   ```
   php artisan migrate --seed
   ```

## Accessing the Application

Once the setup is complete, you can access the Laravel application in your web browser using the following URL: [http://127.0.0.1:8001](http://127.0.0.1:8001)

## Admin Panel

To access the admin panel, use the following URL: [http://127.0.0.1:8001/admin](http://127.0.0.1:8001/admin)

Use the following credentials to log in as an admin:

- Email: admin@example.com
- Password: root

Remember to change the default admin credentials for security purposes.

## Additional Information

For more information on Laravel and its features, please refer to the official [Laravel documentation](https://laravel.com/docs).
