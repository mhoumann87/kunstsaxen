<?php

/* ============================================================
* Keep database credentials in a separate file.
* 1. Easy to exclude this file from source code managers
* 2. Unique credentials on development and production servers
* 3. Unique credentials if working with multiple developers
============================================================ */

/* ============================================================
* REMOVE -sample from the filename so you end up with:
* 'db_credentials.php'
* Enter your information down below
============================================================ */

define("DB_SERVER", "YOUR SERVER NAME");
define("DB_USER", "YOUR USERNAME");
define("DB_PASS", "DATABASE PASSWORD");
define("DB_NAME", "YOUR DATABASE NAME");