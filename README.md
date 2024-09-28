# Laravel Init

Welcome to **Laravel Init**, a starter template for Laravel applications. This template comes pre-configured with essential packages and tools, providing a solid foundation for Laravel-based projects.

## Features

-   **Laravel 11.9 Framework**: Latest version of Laravel, supporting PHP 8.2.
-   **Laravel Sanctum**: API authentication via personal access tokens.
-   **PestPHP**: Simple and powerful testing framework.
-   **Code Quality Tools**:
    -   **Larastan**: PHPStan extension for Laravel to analyze code quality.
    -   **Laravel Pint**: Code style fixer based on PHP-CS-Fixer.
    -   **Rector**: Automated refactoring and upgrades for PHP.
    -   **Pest Plugins**: For type coverage, Laravel integration, and architecture tests.
-   **SQLite DB Setup**: Automated database setup using SQLite for quick development.
-   **Optimized Laravel Migrations**: Ensure seamless database migrations during project setup.

## Requirements

-   PHP 8.2 or higher
-   Composer
-   Node.js & NPM (for front-end tooling if needed)

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/your-repo/laravel-init.git
    ```

2. Navigate to the project directory:

    ```bash
    cd laravel-init
    ```

3. Install PHP dependencies:

    ```bash
    composer install
    ```

4. Create the `.env` file and generate an application key:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. Set up the database:

    ```bash
    touch database/database.sqlite
    php artisan migrate
    ```

6. Serve the application:

    ```bash
    php artisan serve
    ```

## Development Tools

### Testing

-   **Run unit tests**:

    ```bash
    composer test
    ```

-   **Run code linting**:

    ```bash
    composer lint
    ```

-   **Run code refactoring checks**:

    ```bash
    composer refactor
    ```

-   **Run static analysis**:

    ```bash
    composer test:types
    ```

-   **Run architecture tests**:

    ```bash
    composer test:arch
    ```

-   **Run code coverage checks**:
    ```bash
    composer test:code-coverage
    ```

### Additional Development Commands

-   **Run all tests and quality checks**:

    ```bash
    composer test
    ```

-   **Run all tests with code coverage**:
    ```bash
    composer test-code-coverage
    ```

## Package Overview

-   **Laravel Sanctum**: API token management and authentication.
-   **Larastan**: Static analysis tool for Laravel.
-   **Pint**: Code style linter and fixer.
-   **Rector**: Automated PHP refactoring tool.
-   **PestPHP**: Testing framework with built-in support for Laravel.
-   **Nunomaduro Laravel Optimize Database**: Optimize your database queries.

## Contributing

Feel free to open issues or submit pull requests to improve the template.
