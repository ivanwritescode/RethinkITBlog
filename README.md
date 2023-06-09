# RethinkIT Skills Examination Solution

This repository contains my solution for the skills examination for RethinkIT.

## Project Directory Structure

```
.
├── accounts/
│   ├── login/
│   │   ├── login.php
│   │   └── loginform.php
│   ├── registration/
│   │   ├── register.php
│   │   └── registrationform.php
│   └── logout.php
├── blogposts/
│   ├── createpost.php
│   ├── createpostform.php
│   ├── deletepost.php
│   ├── updatepost.php
│   └── updatepostform.php
├── dbassets/
│   └── rethinkittestminiblogsite.sql
├── public/
│   ├── styles/
│   │   └── styles.scss
│   └── js/
│       └── formfields.js
├── utils/
│   └── db_connect.php
├── header.php
├── home.php
└── index.php
```

## Description

This project is a MiniBlog site developed as part of the skills examination for RethinkIT. It consists of various directories and files that handle different aspects of the application.

The `accounts` directory contains subdirectories for user login and registration. The `login` directory contains files for user login functionality, including `login.php` for handling the login process and `registration.php` for displaying the registration form. The `registration` directory contains files for user registration, including `register.php` for handling the registration process and `registration.php` for displaying the registration form. The `logout.php` file is responsible for logging out the user.

The `blogposts` directory contains files related to managing blog posts. It includes `createpost.php` and `createpostform.php` for creating new blog posts, `deletepost.php` for deleting blog posts, `updatepost.php` and `updatepostform.php` for updating existing blog posts.

The `dbassets` directory contains the SQL file `rethinkittestminiblogsite.sql` that can be used to set up the necessary database structure for the application.

The `public` directory contains the `styles` subdirectory, which includes the `styles.scss` file for styling the application using Sass.

The `utils` directory contains the `db_connect.php` file, which establishes a connection to the database.

The `header.php` file is responsible for displaying the header section of the application, including the logo, user greeting, and navigation links.

The `home.php` file is the main page of the MiniBlog site, which displays blog posts and provides options for creating, updating, and deleting posts.

The `index.php` file serves as the entry point of the application.

Please refer to the respective files for the implementation details.

## Getting Started

To get started with the MiniBlog site, follow these steps:

1. Set up a web server environment (e.g., Apache) with PHP and MySQL support.
2. Import the `rethinkittestminiblogsite.sql` file into your MySQL database to create the necessary tables and structure.
3. Place the project files in the appropriate directories within your web server's document root.
4. Ensure the necessary database connection details are properly configured in the `db_connect.php` file.
5. Access the application through the appropriate URL in your web browser.

## Note

This project is for demonstration and evaluation purposes only. It may not include complete error handling, security measures, or other production-ready features. Use it responsibly and at your own risk.
