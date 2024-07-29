<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library and School Management Systems</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f4f4f4;
        }
        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        main {
            padding: 20px;
        }
        section {
            background: #fff;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        ol, ul {
            margin-left: 20px;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Library and School Management Systems</h1>
        <nav>
            <ul>
                <li><a href="#library">Library Management System</a></li>
                <li><a href="#school">School Management System</a></li>
                <li><a href="#installation">Installation</a></li>
                <li><a href="#usage">Usage</a></li>
                <li><a href="#contributing">Contributing</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="library">
            <h2>Library Management System</h2>
            <p>This system manages library operations including book inventory, borrowing, and returning.</p>
        </section>
        <section id="school">
            <h2>School Management System</h2>
            <p>This system handles school administrative tasks like student records, class schedules, and grade management.</p>
        </section>
        <section id="installation">
            <h2>Installation</h2>
            <h3>Prerequisites</h3>
            <ul>
                <li>PHP 8.0 or higher</li>
                <li>Composer</li>
                <li>Laravel 10.x</li>
                <li>MySQL or any compatible database</li>
            </ul>
            <h3>Steps</h3>
            <ol>
                <li>Clone the repository: <code>git clone <repository-url></code></li>
                <li>Navigate to the project directory: <code>cd project-directory</code></li>
                <li>Install dependencies: <code>composer install</code></li>
                <li>Set up your environment file: <code>cp .env.example .env</code></li>
                <li>Generate the application key: <code>php artisan key:generate</code></li>
                <li>Run database migrations: <code>php artisan migrate</code></li>
                <li>Start the local development server: <code>php artisan serve</code></li>
            </ol>
        </section>
        <section id="usage">
            <h2>Usage</h2>
            <h3>Library Management System</h3>
            <p>Access the library management system at <code>http://localhost:8000/library</code>. Features include:</p>
            <ul>
                <li>Book catalog management</li>
                <li>Borrow and return functionality</li>
                <li>User management</li>
            </ul>
            <h3>School Management System</h3>
            <p>Access the school management system at <code>http://localhost:8000/school</code>. Features include:</p>
            <ul>
                <li>Student record management</li>
                <li>Class schedule management</li>
                <li>Grade tracking</li>
            </ul>
            <h3>Packages Used</h3>
            <ul>
                <li><strong>Laravel Notify</strong>: Provides notification functionality for user alerts.</li>
                <li><strong>Resend</strong>: Allows for easy re-sending of emails and other notifications.</li>
                <li><strong>Toastr</strong>: Provides toast notifications for user interactions.</li>
            </ul>
        </section>
        <section id="contributing">
            <h2>Contributing</h2>
            <p>We welcome contributions! Please follow these steps:</p>
            <ol>
                <li>Fork the repository</li>
                <li>Create a new branch: <code>git checkout -b feature-branch</code></li>
                <li>Make your changes and commit: <code>git commit -am 'Add new feature'</code></li>
                <li>Push to the branch: <code>git push origin feature-branch</code></li>
                <li>Submit a pull request</li>
            </ol>
            <p>Please ensure your code adheres to the project's coding standards and includes tests where applicable.</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Library and School Management Systems</p>
    </footer>
</body>
</html>
