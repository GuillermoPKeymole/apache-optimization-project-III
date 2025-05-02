# Apache Optimization Project – John Abbott College

This project was completed as part of the **Network Installation and Administration I** course at John Abbott College.

It demonstrates performance optimization and advanced configuration of the Apache web server using AlmaLinux, including integration with CGI, PHP, MySQL, and SSL.

---

## 🧱 Project Tasks

| Task | Description |
|------|-------------|
| Task 1 | Apache MPM tuning with `prefork` settings |
| Task 2 | Monitoring with `/server-status` and `/server-info` (subnet-restricted) |
| Task 3 | CGI scripting with Perl |
| Task 4 | PHP scripting with client-subnet logic |
| Task 5 | PHP + MySQL integration (dynamic employee table) |
| Task 6 | SSL setup with self-signed certificate and HTTPS access |

---

## 📍 Web Root & Script Paths

- `/var/www/html_project3/` – Main project folder
- `/var/www/cgi-bin/` – CGI script directory
- `/var/www/html_project3/q4/` – PHP subnet logic
- `/var/www/html_project3/q5/` – PHP-MySQL integration

---

## 🔒 Security Features

- SELinux configuration for CGI, PHP, and MySQL access  
- IP-restricted access to `/server-status`, PHP logic, and database access  
- SSL implementation using self-signed OpenSSL certificate

---

## 📎 Quick Access – Key Files

🔧 **Apache Configuration**
- [`httpd.conf`](https://github.com/GuillermoPKeymole/apache-optimization-project-III/blob/main/Apache%20Optimisation_project3/etc/httpd/conf/httpd.conf)

💻 **Web Project Files**
- [`q4`](https://github.com/GuillermoPKeymole/apache-optimization-project-III/tree/main/Apache%20Optimisation_project3/var/www/html_project3/q4)
- [`q5`](https://github.com/GuillermoPKeymole/apache-optimization-project-III/tree/main/Apache%20Optimisation_project3/var/www/html_project3/q5)
- [`master_project3.html`](https://github.com/GuillermoPKeymole/apache-optimization-project-III/blob/main/Apache%20Optimisation_project3/var/www/html_project3/master_project3.html)

🐪 **CGI Script**
- [`task3.cgi`](https://github.com/GuillermoPKeymole/apache-optimization-project-III/blob/main/Apache%20Optimisation_project3/var/www/cgi-bin/task3.cgi)

📄 **Documents**
- [`Project Report`](https://github.com/GuillermoPKeymole/apache-optimization-project-III/blob/main/Guillermo_PadillaKeymole_Report_P3.pdf)
- [`Project Instructions`](https://github.com/GuillermoPKeymole/apache-optimization-project-III/blob/main/Projet-Part%20III_Apache%20optimisation.pdf)
- [`Original .tar archive`](https://github.com/GuillermoPKeymole/apache-optimization-project-III/blob/main/guillermopk_project3.tar)

---

## 👨‍💻 Author

**Guillermo Padilla Keymole**  
AEC – Network Administration  
John Abbott College
