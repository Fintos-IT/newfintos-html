# CouchCMS Setup Guide

## Introduction

This guide will walk you through the steps needed to set up a CouchCMS on your local environment.

## Prerequisites

- A local web server (e.g., XAMPP, WAMP, or MAMP)
- PHP 5.3 or higher
- MySQL or MariaDB database

## Setup Steps

### 1. Clone the Repository

Start by cloning the repository to your local machine:

```bash
git clone <your-repo-url>
cd <your-repo-folder>
```

### 2. Configure Database Settings

Next, you need to configure the database settings. Open the `config.php` file located in the `couch/` directory and update the following settings:

```php
// couch/config.php

// Your MySQL database host (usually 'localhost')
define( 'K_DB_HOST', 'localhost' );

// Your MySQL database name
define( 'K_DB_NAME', 'your_database_name' );

// Your MySQL username
define( 'K_DB_USER', 'your_username' );

// Your MySQL password
define( 'K_DB_PASS', 'your_password' );
```

### 3. Install CouchCMS

Once the database configuration is set up, go to your web browser and visit:

```
http://localhost/couch
```

This will bring up the CouchCMS login page. 

- If this is your first time setting up CouchCMS, follow the instructions to create an admin account and complete the installation.
- The system will then run the necessary SQL queries to set up the database tables.

### 4. Access the CMS Dashboard

After the installation is complete, you can log in with the admin account you created:

```
http://localhost/couch
```

You will be directed to the CouchCMS dashboard, where you can manage your content.

## Additional Configuration

If you need to further customize CouchCMS, you can modify the settings in the `couch/config.php` file. For more advanced features, refer to the official [CouchCMS Documentation](https://docs.couchcms.com/).