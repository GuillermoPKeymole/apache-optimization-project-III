# Apache Optimization Project – John Abbott College

This project was completed as part of the **Network Installation and Administration I** course at John Abbott College.

It demonstrates performance optimization and advanced configuration of the Apache web server using AlmaLinux, including integration with CGI, PHP, MySQL, and SSL.

## 🧱 Project Tasks

| Task | Description |
|------|-------------|
| Task 1 | Apache MPM tuning with prefork settings |
| Task 2 | Monitoring with /server-status and /server-info (restricted by subnet) |
| Task 3 | CGI scripting with Perl |
| Task 4 | PHP scripting with client-subnet logic |
| Task 5 | PHP + MySQL integration (dynamic employee table) |
| Task 6 | SSL setup with self-signed certificate and HTTPS access |

## 📁 Files Included

- `httpd.conf` – Apache configuration
- `master_project3.html` – Project homepage with task links
- `task3.cgi` – Perl CGI script
- `task4.php`, `info.php` – PHP scripts with IP-based responses
- `task5.php` – PHP script connecting to MySQL
- `Guillermo_PadillaKeymole_Report_P3.pdf` – Report with full configuration and validation
- `Projet-Part III_Apache optimisation.pdf` – Project instructions

## 📍 Web Root & Script Paths

- `/var/www/html_project3/` – Main project folder
- `/var/www/cgi-bin/` – CGI script directory
- `/var/www/html_project3/q4/` – PHP subnet logic
- `/var/www/html_project3/q5/` – PHP-MySQL integration

## 🔒 Security Features

- Access control using SELinux booleans  
- IP-restricted monitoring and PHP logic  
- HTTPS setup using OpenSSL self-signed certificate

## 👨‍💻 Author

**Guillermo Padilla Keymole**  
AEC – Network Administration  
John Abbott College
