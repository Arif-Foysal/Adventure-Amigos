# Adventure Amigos

Adventure Amigos is a web application for managing and exploring adventurous travel experiences. This document will guide you through the process of setting up and running the project on your local machine.

## Prerequisites

Ensure you have the following installed:

1. **PHP** (Version 8.0 or higher recommended)
2. **Composer** (Dependency Manager for PHP)
3. **MySQL** (or any compatible database server)
4. **Web Server** (e.g., Apache, Nginx, or MAMP/WAMP/XAMPP)
5. **Web Browser**

## Installation Steps

### 1. Clone the Repository

Clone the Adventure Amigos project from your version control system (e.g., GitHub):

```bash
git clone https://github.com/your-username/adventure-amigos.git
```

Navigate into the project directory:

```bash
cd adventure-amigos
```

### 2. Install Composer Dependencies

Run the following command to install all required PHP dependencies:

```bash
composer install
```

### 3. Set Up the Database

1. Create a new database in your MySQL server.
2. Import the `database.sql` file located in the project directory:

   - Using phpMyAdmin:
     - Open phpMyAdmin.
     - Select the database you created.
     - Click on the **Import** tab and upload the `database.sql` file.
   
   - Using MySQL Command Line:
     ```bash
     mysql -u your_username -p your_database_name < database.sql
     ```

3. Update the database credentials in the project's configuration file (`/src/dbconnect.php` or similar):

```php
// Example
    $servername = "localhost";
    $username = "root";
    $password = "asdf1234";
    $dbname = "tourism";
```

### 4. Start the Web Server

If using PHP's built-in server:

```bash
php -S localhost:8000 -t src
```

If using Apache or Nginx, configure the document root to point to the `src` directory of the project.

### 5. Access the Application

Open your web browser and navigate to:

```
http://localhost:8000
```

Or, if using a custom domain, navigate to the configured URL.

## Additional Notes

- Ensure your server has write permissions for directories that require file uploads or caching.
- For production deployment, configure a proper virtual host and ensure secure database credentials.

## Support

If you encounter any issues, please feel free to contact the development team or open an issue in the repository.

---

Enjoy exploring adventures with Adventure Amigos!

